<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\LopHocModel::class, function (Faker $faker) {
    return [
        "malop" => $faker ->postcode,
        "tenlop" => $faker ->name,
        "khoa_id" => $faker ->randomFloat(0,1,10)
    ];
});
