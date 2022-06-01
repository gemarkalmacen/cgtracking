<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    private $users = [
        [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',        
            'details' => [
                'is_active' => 1,                
                'first_name' => 'System',
                'last_name' => 'Administrator',
                'mobile' => '+639219242220',
                'address' => 'Butuan City',
            ]
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = $this->users;
        foreach ($users as $key => $data) {
            $details = Arr::pull($data, 'details');
            $user = User::where('email', $data['email'])->first();
            // create new record if empty
            if (empty($user))
                $user = User::create($data);
            // create if empty, update if not
            if (empty($user->details))
                $user->details()->create($details);
            else
                $user->details()->update($details);
        }
    }
}