<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 3),
        'header' => $faker->sentence(6, true),
        'body' => $faker->text(1000),
        'pic' => $faker->imageUrl(750,300)
    ];
});
