<?php

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {

    $gender = $faker->randomElement(['male', 'female']);
    
    return [
        'last_name' => $faker->name,
        'first_name' => $faker->name,
        'email' => $faker->email,
        'contact' => $faker->phonenumber,
        'gender' => $gender,   
    ];
});
