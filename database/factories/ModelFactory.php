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
        'email' => $faker->unique()->safeEmail,
        'level' => 'user',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName($gender = null) ,
        'email' => $faker->unique()->safeEmail ,
        'phone' => $faker->numberBetween($min = 66800000001, $max = 66999999999) ,
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'ip' => $faker->ipv4 ,
        'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()) ,
        'updated_at' => date("Y-m-d H:i:s") ,
    ];
});
