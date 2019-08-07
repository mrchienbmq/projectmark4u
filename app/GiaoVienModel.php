<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoVienModel extends Model
{
    protected $table ="giaovien";
    protected $primaryKey = "giaovien_id";

    protected $fillable = [

        "magv",
        "tengv",
        "hogv",
        "gioitinh",
        "hocvi",
        "active",
    ];
}
