<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGiaoVienModel extends Model
{
    protected $table ="usergiaovien";
    protected $primaryKey = "usergiaovien_id";

    protected $fillable = [

        "name",
        "email",
        "password",
        "sinhvien_id",
    ];
}
