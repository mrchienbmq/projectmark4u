<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\DiemModel::class, function (Faker $faker) {
    return [
        "madiem" => $faker ->postcode,
        "diemki1" => $faker ->randomFloat(0,1,10),
        "diemki2" => $faker ->randomFloat(0,1,10),
        "diemki3" => $faker ->randomFloat(0,1,10),
        "diemki4" => $faker ->randomFloat(0,1,10),
        "sinhvien_id" =>$faker ->randomFloat(0,1,10),
        ];
});
