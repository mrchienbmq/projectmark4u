<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHocModel extends Model
{
    protected $table ="lop";
    protected $primaryKey ="lop_id";

    protected $fillable = [

        "malop",
        "tenlop",
        "khoa_id",
        "active",
    ];
}
