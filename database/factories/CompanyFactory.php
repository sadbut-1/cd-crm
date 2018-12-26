<?php

use Faker\Generator as Faker;

$factory->define(App\models\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'logo' => $faker->imageUrl,
        'website' => $faker->url,
    ];
});