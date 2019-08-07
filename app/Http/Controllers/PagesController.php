<?php

namespace App\Http\Controllers;

use App\GiaoVienModel;
use App\LopHocModel;
use App\SinhVienModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function charts(){
        return view("admin.charts");
    }
    public function tables(){
        $sinhviens = SinhVienModel::all();

        $sinhviens = SinhVienModel::orderBy("sinhvien_id","asc")->paginate(5);
        return view("admin.table",compact("sinhviens"));


    }
    public function SinhVienCreate(){

        $lophocs = LopHocModel::where("active",1)->orderBy("tenlop","asc")
            ->select(["lop_id","tenlop"])->get();
        return view("admin.themsinhvien",compact("lophocs"));
    }
    public function SinhVienSave(Request $request){
        $this->validate($request,[
            "masv" =>  "required|min:2|max:100|",
            "ten" => "required|min:2|max:100|",
            "ho" => "required|min:2|max:100|",
            "gioitinh" => "required|min:0|max:100|",
            "diachi" => "required|min:6|max:1000|",
            "email" => "required|min:6|max:100|",
            "ngaysinh" => "required|date|min:0",
        ]);
        $url = null;
        if ($request->hasFile("sinhvien_image")){
            $allow_array = ["png","jpg","gif","jpeg"];
            $file = $request->file("sinhvien_image");
            if (in_array($file->getClientOriginalExtension(),$allow_array)) {
                $name = $file->getClientOriginalName();
                $file->move("upload/images/", $name);
                $url = "/upload/images/".$name;
            }
        }
        SinhVienModel::create([
            "masv" => $request ->get("masv"),
            "ten" => $request ->get("ten"),
            "ho" => $request ->get("ho"),
            "gioitinh" => $request ->get("gioitinh"),
            "diachi" => $request ->get("diachi"),
            "email" => $request->get("email"),
            "ngaysinh" => $request ->get("ngaysinh"),
            "lop_id" => $request -> get("lop_id"),
            "sinhvien_image" => $url
        ])->save();
        return redirect("table")->with("message","Thêm sinh viên thành công");
    }

    public function SinhVienEdit(Request $request)
    {
        $id = $request->get("sinhvien_id");
        $sinhvien = SinhVienModel::find($id);
        if ($sinhvien) {
            $lops = LopHocModel::where("active", 1)->orderBy("tenlop", "asc")
                ->select(["lop_id", "tenlop"])->get();
            return view("admin.editsinhvien", compact("sinhvien","lops"));
        }
        echo "sinh vien not foud";
    }
    public function SinhVienUpdate(Request $request, $id){
        $this->validate($request,[
            "masv" =>  "required|min:2|max:100:sinhvien,ten,".$request->get("sinhvien_id").",sinhvien_id",
            "ten" => "required|min:2|max:100|",
            "ho" => "required|min:2|max:100|",
            "gioitinh" => "required|min:0|max:100|",
            "diachi" => "required|min:6|max:1000|",
            "email" => "required|min:6|max:100|",
            "ngaysinh" => "required|date|min:0",
            "sinhvien_image" =>"required|file|min:0|max:10000"
        ]);
/*        $data= Course::findOrFail($id);
        $data->update($request->all());
        if ($request->hasFile('image'))
        {
            $file = $request->file('sinhvien_image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $data->image = $name;
            $file->move(public_path().'upload/images/',$name);
            $data->save();
        }*/

              $url = null;
                if ($request->hasFile("sinhvien_image")){
                    $allow_array = ["png","jpg","gif","jpeg"];
                    $file = $request->file("sinhvien_image");
                    if (in_array($file->getClientOriginalExtension(),$allow_array)) {
                        $name = $file->getClientOriginalName();
                        $file->move("upload/images/", $name);
                        $url = "/upload/images/".$name;
                    }
                }
        $sinhvien = SinhVienModel::find($request->get("sinhvien_id"));
        if ($sinhvien){
            $sinhvien->update([
                "masv" => $request ->get("masv"),
                "ten" => $request ->get("ten"),
                "ho" => $request ->get("ho"),
                "gioitinh" => $request ->get("gioitinh"),
                "diachi" => $request ->get("diachi"),
                "email" => $request ->get("email"),
                "sinhvien_image" => $url,
                "ngaysinh" =>$request ->get("ngaysinh"),
                "lop_id" => $request ->get("lop_id"),
            ]);
            return redirect("table")->with("message","Chỉnh sửa sinh viên thành công");
        }
        return "sinh vien not foud";
    }


    public function forgotps(){
        return view("auth.forgot-password");
    }
    public function erros404(){
        return view("admin.404");
    }
    public function giaovien(){
        $giaoviens  = GiaoVienModel::all();

        $giaoviens = GiaoVienModel::orderBy("giaovien_id","asc")->paginate(5);
        return view("admin.giaovien",compact("giaoviens"));
    }
}
