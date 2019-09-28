<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProcurementOfficer;
use Faker\Generator as Faker;

$factory->define(ProcurementOfficer::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
