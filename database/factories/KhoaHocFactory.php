<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\KhoaModel::class, function (Faker $faker) {
    return [
        "makhoa" => $faker ->postcode,
        "tenkhoa" => $faker ->name,


    ];
});
