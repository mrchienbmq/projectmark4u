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
        "lop_id",
        "lophoc_id",
        "active",
    ];

    public function lop(){
        return $this->belongsTo("App\LopHocModel","lop_id","lop_id");
    }
/*    public function getshowlop_id(){
        return $this->belongsTo("App\ShowLopModel","giaovien_id","giaovien_id");
    }*/
public function getlophoc_id(){
    return $this->belongsTo("App\ShowLopModel","lophoc_id","lophoc_id");
}

}
