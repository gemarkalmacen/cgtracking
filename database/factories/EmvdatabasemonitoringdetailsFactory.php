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
        'full_name' => $faker->name,
        'hh_id' => "160310001-13491-00001",
        'client_status' => $faker->word,
        'address' => $faker->address,
        'sex' => $faker->word,
        'hh_set_group' => $faker->word,
        'assigned_staff' => $faker->name,
        'minor_grantee' => "Yes",
        'current_grantee_card_release_date' => $faker->date,
        'current_grantee_card_release_place' => $faker->word,
        'current_grantee_card_release_by' => $faker->word,
        'current_grantee_is_available' => "Yes",
        'current_grantee_reason' => $faker->word,
        'current_grantee_card_number' => $faker->word,
        'other_card_number_1' => $faker->word,
        'other_card_holder_name_1' => $faker->word,
        'other_card_number_2' => $faker->word,
        'other_card_holder_name_2' => $faker->word,
        'other_card_number_3' => $faker->word,
        'other_card_holder_name_3' => $faker->word,
        'other_card_is_available' => $faker->word,
        'other_card_reason' => $faker->word,
        'nma_amount' => $faker->randomFloat,
        'nma_date_claimed' => $faker->date,
        'nma_reason' => $faker->sentence,
        'nma_remarks' => $faker->sentence,
        'pawn_name_of_lender' => $faker->name,
        'pawn_date' => $faker->date,
        'pawn_retrieved_date' => $faker->date,
        'pawn_status' => $faker->word,
        'pawn_reason' => $faker->word,
        'pawn_offense_history' => $faker->word,
        'pawn_offense_date' => $faker->date,
        'pawn_remarks' => $faker->sentence,
        'pawn_intervention_staff' => $faker->name,
        'pawn_other_details' => $faker->word,
        'attested_by_full_name' => $faker->name,
        'emv_database_monitoring_id' => $faker->randomDigit,
        'current_grantee_card_number_series' => $faker->randomDigit,
        'informant_full_name' => $faker->name,
        'accomplish_by_full_name' => $faker->name,
        'user_id' => 1,
        'created_at' => $faker->date,
    ];
});
