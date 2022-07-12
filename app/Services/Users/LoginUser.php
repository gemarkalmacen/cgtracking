<?php
namespace App\Services\Users;

use Illuminate\Support\Arr;
use App\Services\Users\GetUserByEmail;
use App\Models\User;

class LoginUser 
{
    /**
     * @var GetUserByEmail $getUserByEmail
     */
    protected $getUserByEmail;

    /**
     * Initialization
     */
    public function __construct(GetUserByEmail $getUserByEmail)
    {
        $this->getUserByEmail = $getUserByEmail;
    }

    /**
     * Login user
     *
     * @param array $data
     * @return int
     */
    public function execute(array $data)
    {
        $user = $this->getUserByEmail->execute($data['email']);
        if (!isset($user))
            return User::LOGIN_BAD_CREDENTIALS;
        // Check if active
        if ($user->details->is_active) {
            // Attempt
            if (!auth('users')->attempt($data)) {
                // Event here
                return User::LOGIN_BAD_CREDENTIALS;
            }
            // Success
            return User::LOGIN_SUCCESS;
        } else
            return User::LOGIN_INACTIVE;
    }
}
