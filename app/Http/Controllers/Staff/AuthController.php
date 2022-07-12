<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Staff\BaseController;
use App\Http\Requests\StaffLoginRequest;
use App\Traits\ThrottlesRequests;
use App\Services\Users\LoginUser;
use App\Services\Users\LogoutUser;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\ModelHasRoles;

use Stevenmaguire\OAuth2\Client\Provider\Keycloak;

/**
 * Controller for admin authentication
 */
class AuthController extends BaseController
{
    use ThrottlesRequests;

    /**
     * Attempts per cycle
     *
     * @var int
     */
    protected $maxAttempts = 10;

    /**
     * Decay minutes for throttling
     *
     * @var int
     */
    protected $decayMinutes = 10;

    /**
     * @var LoginUser $loginUser
     * @var LogoutUser $logoutUser
     */
    protected $loginUser, $logoutUser;

    /**
     * Initialization
     */
    public function __construct(LoginUser $loginUser, LogoutUser $logoutUser)
    {
        $this->loginUser = $loginUser;
        $this->logoutUser = $logoutUser;

        $this->provider = new Keycloak([
            'authServerUrl'             => 'https://caraga-auth-staging.dswd.gov.ph/',
            'realm'                     => 'entdswd.local',
            'clientId'                  => 'caraga-finance',
            'clientSecret'              => '9pLMHX5aYjh2DwGG3tUTrGtSMuFr3TP2',
            'redirectUri'               => 'https://crg-finance-svr.entdswd.local/cgtracking/login_isso',
            'encryptionAlgorithm'       => 'RS256'
        ]);
    }

    /**
     * Admin login
     *
     * @param StaffLoginRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function login(StaffLoginRequest $request)
    {
        $this->checkThrottling($request);
        $status = $this->loginUser->execute($request->validated());
        if ($status === User::LOGIN_BAD_CREDENTIALS || $status === User::LOGIN_INACTIVE) {
            $this->incrementAttempts($request);
            // Message
            $message = __('staff/notifications.login_bad_credentials');
            if ($status === User::LOGIN_INACTIVE)
                $message = __('staff/notifications.login_inactive');
            // redirect back to login page
            return redirect()->back()->with('notification', [
                ['type' => 'error', 'message' => $message]
            ]);
        }
        return redirect()->route('staff.dashboard');
    }

    /**
     * Login ISSO
     */
    public function login_isso()
    {
        session_start();
        if (!isset($_GET['code'])) {

            // If we don't have an authorization code then get one
            $authUrl = $this->provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $this->provider->getState();
            header('Location: ' . $authUrl);
            exit;

            // Check given state against previously stored one to mitigate CSRF attack
        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

            unset($_SESSION['oauth2state']);
            exit('Invalid state, make sure HTTP sessions are enabled.');
        } else {

            // Try to get an access token (using the authorization coe grant)
            try {
                $token = $this->provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);
            } catch (Exception $e) {
                exit('Failed to get access token: ' . $e->getMessage());
            }

            // Optional: Now you have a token you can look up a users profile data
            try {

                // We got an access token, let's now get the user's details
                $user = $this->provider->getResourceOwner($token);
                $data = $user->toArray();

                $userData = [
                    'username' => $data['preferred_username'],
                    'email' => $data['email'],
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
                ];

                if (!User::where('username', $data['preferred_username'])->first()) {
                    $users = User::create($userData);
                    $userDetailsData = [
                        'user_id' => $users->id,
                        'is_active' => 1,
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                    ];
                    UserDetail::create($userDetailsData);
                    ModelHasRoles::create([
                        'role_id' => 4,
                        'model_type' => 'App\Models\User',
                        'model_id' => $users->id,
                    ]);
                } else {
                    echo 'Error authentication attempt';
                };

                $status = $this->loginUser->execute($userData);
                if ($status === User::LOGIN_BAD_CREDENTIALS || $status === User::LOGIN_INACTIVE) {
                    // Message
                    $message = __('staff/notifications.login_bad_credentials');
                    if ($status === User::LOGIN_INACTIVE)
                        $message = __('staff/notifications.login_inactive');
                    // redirect back to login page
                    return redirect()->back()->with('notification', [
                        ['type' => 'error', 'message' => $message]
                    ]);
                }
                return redirect()->route('staff.dashboard');
            } catch (Exception $e) {
                exit('Failed to get resource owner: ' . $e->getMessage());
            }
            // Use this to interact with an API on the users behalf
            echo $token->getToken();
        }
    }
    /**
     * Admin logout
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $this->logoutUser->execute();
        // return redirect()->route('staff.login');
        return redirect($this->provider->getLogoutUrl());
    }
}
