<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        //
        'link' => $faker->url,
        'name' => $faker->catchPhrase,
        'imagePath' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
