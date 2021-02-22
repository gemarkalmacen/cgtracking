<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserDetail;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(UserDetail::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\Models\User')->create()->id,
        'is_active' => rand(0,1),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'mobile' => $faker->phoneNumber,
        'address' => $faker->address,        
    ];
});
