<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\GiaoVienModel::class, function (Faker $faker) {
    return [
        "magv" => $faker -> postcode,
        "tengv" => $faker -> firstName,
        "hogv" => $faker ->lastName,
        "gioitinh" => $faker ->boolean,
        "hocvi" => $faker ->numberBetween(1,5),
        "lop_id" => $faker ->randomFloat(0,1,10)
    ];
});
