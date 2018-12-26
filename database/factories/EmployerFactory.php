<?php

use Faker\Generator as Faker;

$factory->define(App\models\Employer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'company_id' => 1,
    ];
});