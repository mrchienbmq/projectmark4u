<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MonHocModel::class, function (Faker $faker) {
    return [
        "mamon" => $faker ->postcode,
        "tenmon" => $faker ->name,
        "sotinchi" => $faker ->randomFloat(0,12,50),
        "sotiet" => $faker ->randomFloat(0,1,20),
    ];
});
