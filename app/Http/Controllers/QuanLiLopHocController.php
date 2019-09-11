<?php

namespace App\Http\Controllers;

use App\GiaoVienModel;
use App\KhoaModel;
use App\LopHocModel;
use App\ShowLopModel;
use App\SinhVienModel;
use Illuminate\Http\Request;

class QuanLiLopHocController extends Controller
{
    public function lophoc(){
        $lops = LopHocModel::all();
        $lops = LopHocModel::orderBy("lop_id","asc")->paginate(10);
        return view("admin.lophoc",compact("lops"));
    }
/*    public function SinhVienLopHoc($lop_id){
        $sinhvien = SinhVienModel::find($lop_id);
        return view("admin.sinhvienlophoc",compact("sinhvien"));
    }*/
    public function SinhVienLopHoc($lop_id){
        $sinhviens = LopHocModel::find($lop_id);
        return view("admin.sinhvienlophoc",compact("sinhviens"));
    }

/*    public function SinhVienLopHoc(){
        $sinhviens = SinhVienModel::all("lop_id");
        $sinhviens = SinhVienModel::orderBy("lop_id")->paginate(20);
        return view("admin.sinhvienlophoc",compact("sinhviens"));
    }*/

    public function show($lop_id){
        $lophocs = LopHocModel::find($lop_id);
        return view("admin.detail_lophoc",compact("lophocs"));
    }
    public function LopHocEdit(Request $request){
        $id  = $request->get("lop_id");
        $lophocs = LopHocModel::find($id);
        if ($lophocs){
            $title = ShowLopModel::where("active",1)->orderBy("title","asc")
                ->select(["lophoc_id","title"])->get();
            $giaoviens = GiaoVienModel::where("active",1)->orderBy("tengv","asc")
                ->select(["giaovien_id","tengv"])->get();
            return view("admin.editlophoc",compact("lophocs","title","giaoviens"));
        }
        echo "sinh vien not foud";
    }
    public function LopHocUpdate(Request $request){
        $this->validate($request,[
            "malop" =>  "required|min:2|max:100:lop,title,".$request->get("lop_id").",lop_id",
            "tenlop" => "required|min:2|max:100|"
        ]);
        $lophocs = LopHocModel::find($request->get("lop_id"));
        if ($lophocs){
            $lophocs->update([
                "malop" =>$request->get("malop"),
                "tenlop" => $request->get("tenlop"),
                "lophoc_id" => $request->get("lophoc_id"),
            ]);
            return redirect("lophoc")->with("message","Chỉnh sửa Lớp Thành Công");
        }
        return " Lớp Không Có";
    }
    public function LopHocDelete($lop_id){
        $lophocs = LopHocModel::find($lop_id);
        $lophocs->delete();
        return redirect("lophoc")->with("message","Delete Successfully");
    }


    public function LopHocCreate(){
        $lophocs = ShowLopModel::where("active",1)->orderBy("title","asc")
            ->select(["lophoc_id","title"])->get();
        return view("admin.themlophoc",compact("lophocs"));
    }
    public function LopHocSave(Request $request){
        $this->validate($request,[
           "malop" =>  "required|min:2|max:100|",
           "tenlop" => "required|min:2|max:100|",
        ]);
        LopHocModel::create([
           "malop" => $request ->get("malop"),
           "tenlop" => $request ->get("tenlop"),
           "lophoc_id" => $request ->get("lophoc_id"),
        ])->save();
        return redirect("lophoc")->with("message","Thêm Lớp Thành Công");
    }

}
