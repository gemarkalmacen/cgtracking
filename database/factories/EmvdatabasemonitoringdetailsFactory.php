<?php

use App\Models\Emvdatabasemonitoringdetails;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Emvdatabasemonitoringdetails::class, function (Faker $faker) {
    return [
        'full_name' => $faker->firstName,  // Random task title
        'user_id' => 1, // Random task description
    ];
});
