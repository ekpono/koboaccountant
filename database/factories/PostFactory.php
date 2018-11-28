<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'title' => $faker->word,
        'slug' => $faker->slug,
        'featured_image' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->biasedNumberBetween(1-5)
    ];
});
