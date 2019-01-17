<?php

use Faker\Generator as Faker;

$factory->define(App\users::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'about' => $faker->text(2000),
        'pic' => $faker->imageUrl(200, 200),
        'age' => $faker->numberBetween(16, 120)
    ];
});
