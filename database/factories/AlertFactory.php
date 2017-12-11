<?php

use Faker\Generator as Faker;

$factory->define(App\Alert::class, function (Faker $faker) {
    return [
        //
        'summary' => $faker->sentence($nbwords = 12, $variableNbWords = true),
        'details' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true),
        'priority' => 'warning',
        'effectiveDate' => $faker->dateTime($max = 'now'),
        'expirationDate' => $faker->dateTime($min = 'now')
    ];
});
