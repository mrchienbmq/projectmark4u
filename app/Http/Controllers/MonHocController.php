<?php

namespace App\Http\Controllers;

use App\GiaoVienModel;
use App\LopHocModel;
use App\ShowLopModel;
use Illuminate\Http\Request;

class MonHocController extends Controller
{
    public function MonHoc(){
        $monhocs = ShowLopModel::all();
        $monhocs = ShowLopModel::orderBy("lophoc_id","asc")->paginate(5);
        return view("admin.monhoc",compact("monhocs"));
    }

    public function MonHocEdit(Request $request){
        $id = $request->get("lophoc_id");
        $monhocs = ShowLopModel::find($id);
        if ($monhocs){
            $giaoviens = GiaoVienModel::where("active",1)->orderBy("tengv","asc")
                ->select(["giaovien_id","tengv"])->get();
            $lops = LopHocModel::where("active",1)->orderBy("tenlop","asc")
                ->select(["lop_id","tenlop"])->get();
            return view("admin.editmonhoc",compact("monhocs","giaoviens","lops"));
        }
        echo " Mon Hoc Not Foud";
    }
    public function MonHocUpdate(Request $request){
        $this->validate($request,[
            "title" =>  "required|min:2|max:100:lophoc,title,".$request->get("lophoc_id").",lophoc_id",
        ]);
        $monhocs = ShowLopModel::find($request->get("lophoc_id"));
        if ($monhocs){
            $monhocs->update([
                "title" => $request ->get("title"),
                "lop_id" => $request ->get("lop_id"),
                "giaovien_id" => $request ->get("giaovien_id"),
            ]);
            return redirect("monhoc")->with("message","Chỉnh sửa lớp thành công");
        }
        return " sinh vien NOT FOUD";
    }

}
