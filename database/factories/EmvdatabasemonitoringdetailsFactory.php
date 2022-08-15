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
        // 'full_name' => $faker->firstName,  // Random task title
        // 'user_id' => 1, // Random task description

        'full_name' => $faker->firstName,
        'hh_id' => '160310001-12779-00017',
        'client_status' => '1 - Active',
        'address' => 'Surigao del Sur',
        'sex' => 'Male',
        'hh_set_group' => 'SETA',
        'assigned_staff' => 'Robert Ranque',
        'minor_grantee' => 'N',
        'contact' => $faker->phoneNumber,
        'current_grantee_card_release_date' => '2022-08-15 02:00:49',
        'current_grantee_card_release_place' => 'Santa Josefa',
        'current_grantee_card_release_by' => 'Jonathan Barriga, MRB',
        'current_grantee_is_available' => 'Yes',
        'current_grantee_reason' => Null,
        'current_grantee_card_number' => $faker->creditCardNumber,
        'other_card_number_1' => $faker->creditCardNumber,
        'other_card_holder_name_1' => $faker->name,
        'other_card_number_2' => $faker->creditCardNumber,
        'other_card_holder_name_2' => $faker->name,
        'other_card_number_3' => $faker->creditCardNumber,
        'other_card_holder_name_3' => $faker->name,
        'other_card_is_available' => 'Yes',
        'other_card_reason' => Null,
        'nma_amount' => $faker->numberBetween(1000,10000),
        'nma_date_claimed' => '2022-08-15 02:00:49',
        'nma_reason' => Null,
        'nma_remarks' => 'Remarks is none',
        'pawn_name_of_lender' => Null,
        'pawn_date' => Null,
        'pawn_retrieved_date' => Null,
        'pawn_status' => Null,
        'pawn_reason' => Null,
        'pawn_offense_history' => Null,
        'pawn_offense_date' => Null,
        'pawn_remarks' => Null,
        'pawn_intervention_staff' => Null,
        'pawn_other_details' => Null,
        'informant_full_name' => Null,
        'accomplish_by_full_name' => Null,
        'accomplish_e_signature' => Null,
        'informant_e_signature' => Null,
        'attested_by_e_signature' => Null,
        'current_cash_card_picture' => Null,
        'beneficiary_picture' => Null,
        'attested_by_full_name' => 'Bernard B. Maglupay',
        'other_card_number_series_1' => 1,
        'other_card_number_series_2' => 2,
        'other_card_number_series_3' => 3,
        'emv_database_monitoring_id' => 1,
        'current_grantee_card_number_series' => 4,
        'user_id' => 1,
        'sync_at' => '2022-08-15 02:00:49',
        'created_at' => '2022-08-15 02:00:49',
        'updated_at' => '2022-08-15 02:00:49',
    ];
});
