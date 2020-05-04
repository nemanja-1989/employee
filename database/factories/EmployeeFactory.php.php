<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        "birth_date" => $faker->dateTimeBetween('-70 years', '-50 years')->format('Y-m-d'),
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
        "gender" => $faker->randomElement(["M", "F"]),
        "hire_date" => $faker->dateTimeBetween('-35 years', '-18 years')->format('Y-m-d')
    ];
});
