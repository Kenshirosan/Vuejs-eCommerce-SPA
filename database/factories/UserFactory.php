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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    $address = $faker->address;
    $address2 = null;
    $zipcode = 13001;
    $name = $faker->name;
    $email = $faker->unique()->safeEmail;
    $price = $faker->numberBetween($min = 2500, $max = 35000);
    $phone = $faker->phoneNumber;

    return [
        'name' => $name,
        'password' => $password ?: $password = bcrypt('secret'),
        'email' => $email,
        'last_name' => $name,
        'address' => $address,
        'address2' => null,
        'zipcode' => 13001,
        'employee' => 0,
        'theboss' => 0,
        'remember_token' => str_random(10),
        'phone_number' => $faker->phoneNumber,
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'option_group_id' => 999,
        'category_id' => 999,
        'category' => 'Appetizers',
        'slug' => $faker->name,
        'description' => $faker->text,
        'price' => $faker->numberBetween($min = 2500, $max = 35000),
        'image' => $faker->file
    ];
});