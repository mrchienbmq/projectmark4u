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
        "lophoc_id",
        "active",
    ];
    public function getgiaovien_ten(){
        return $this->belongsTo("App\GiaoVienModel","lop_id","giaovien_id");
    }
    public function getlophoc_id(){
        return $this->belongsTo("App\ShowLopModel","lophoc_id","lophoc_id");
    }
    public function getStudent(){
        return $this->hasMany("App\SinhVienModel","lop_id","lop_id");
    }
/*    public function getlop_ten(){
        return $this->belongsTo("App\SinhVienModel","lop_id","lop_id");
    }*/

}
