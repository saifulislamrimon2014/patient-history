<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Record::class, function (Faker\Generator $faker) {

    $sex_list = Array('Male', 'Female', 'Other');
    $inhabitant_list = Array('Urban', 'Semi-urban', 'Rural');
    $marital_status_list = Array('Unmarried', 'Married');

    return [
        'unit' => $faker->randomLetter,
        'ward' => $faker->randomLetter,
        'bed' => $faker->randomDigit,
        'admission_date' => $faker->date(),
        'examination_date' => $faker->date(),
        'informant_name' => $faker->name,
        'relation_with_patient' => $faker->word,
        'referred_from' => $faker->name,
        'referred_reason' => $faker->sentence,
        'patient_name' => $faker->name,
        'age' => $faker->numberBetween(0, 80),
        'sex' => $faker->randomElement($sex_list),
        'religion' => $faker->word,
        'inhabitant' => $faker->randomElement($inhabitant_list),
        'marital_status' => $faker->randomElement($marital_status_list),
        'occupation' => $faker->word,
        'education' => $faker->word,
        'complain' => $faker->text(200),
        'present_illness' => $faker->text(200),
        'father' => $faker->text(100),
        'mother' => $faker->text(100),
        'siblings' => $faker->text(100),
        'consanguinity' => $faker->text(100),
        'social_pos_family' => $faker->text(100),
        'family_history_mental' => $faker->text(100),
        'family_tree' => $faker->text(100),
        'pregnancy_and_birth' => $faker->text(100),
        'early_developmental_milestones' => $faker->text(100),
        'childhood' => $faker->text(100),
        'education_history' => $faker->text(100),
        'occupation_history' => $faker->text(100),
        'marriage_sex_history' => $faker->text(100),
        'current_relationship' => $faker->text(100),
        'social_circumstances' => $faker->text(100),
        'substance_use' => $faker->text(100),
        'forensic_history' => $faker->text(100),
        'past_psychiatry_history' => $faker->text(200),
        'past_medical_illness' => $faker->text(200),
        'comorbid_illness' => $faker->text(200),
        'relationship' => $faker->text(100),
        'character' => $faker->text(100),
        'hobbies' => $faker->text(100),
        'predominant_mood' => $faker->text(100),
        'attitude_and_standards' => $faker->text(100),
        'ultimate_concern' => $faker->text(100),
    ];
});

