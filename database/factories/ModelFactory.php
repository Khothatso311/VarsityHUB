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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
		'mobile' => $faker->mobile,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Images::class, function (Faker\Generator $faker) {
    

    return [
        'name' => $faker->name,
		 'surname' => $faker->surname,
		 'location' => $faker->location,
		'mobile' => $faker->unique()->mobile,
		 'gender' => $faker->gender,
		  'sponsor' => $faker->sponsor,
		  'sponsorname' => $faker->sponsorname,
		 'occupation' => $faker->occupation,
		  'grade' => $faker->grade,
         'file' => $faker->file,
        ,
    ];
});