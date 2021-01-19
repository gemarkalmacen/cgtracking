<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Staff\BaseController;
use App\Http\Requests\StaffLoginRequest;
use App\Traits\ThrottlesRequests;
use App\Services\Users\LoginUser;
use App\Services\Users\LogoutUser;
use App\Models\User;

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
     * Admin logout
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $this->logoutUser->execute();
        return redirect()->route('staff.login');
    }
}
