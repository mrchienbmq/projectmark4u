<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowLopModel extends Model
{
    protected $table = "lophoc";
    protected $primaryKey = "lophoc_id";

    protected $fillable = [
        "giaovien_id",
        "title",
        "lop_id",

    ];
    public function getlop_id(){
        return $this->belongsTo("App\LopHocModel","lop_id","lop_id");
    }
}
