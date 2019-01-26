<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female'));
    return [
        'name' => $faker->name($gender),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'state' => $faker->state,
        'role' => $faker->numberBetween(1,6),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone' => $faker->e164PhoneNumber,
        'remember_token' => str_random(10),
    ];
});
