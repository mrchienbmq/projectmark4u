@extends("layouts.dashboard")

@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">SỬA THÔNG SINH VIÊN</h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("sinhvien/edit")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="sinhvien_id" value="{{$sinhvien->sinhvien_id}}"/>
                <div class="form-group">
                    <label> Mã Sinh Viên</label>
                    <input type="text" class="form-control" value="{{$sinhvien->masv}}" name="masv" placeholder="Mã Sinh Viên" required="required">
                    @if($errors->has("masv"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("masv")}}</strong>
            </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nhập Tên Sinh Viên</label>
                        <input type="text" class="form-control" value="{{$sinhvien->ten}}" name="ten" placeholder="Tên Sinh viên" required="required">
                        @if($errors->has("ten"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("ten") }}</strong>
            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label >Nhập Họ Sinh Viên</label>
                        <input type="text" class="form-control" value="{{$sinhvien->ho}}" name="ho" placeholder="Họ Sinh Viên" required="required">
                        @if($errors->has("ho"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{$errors->first("ho") }}</strong>
            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Chọn giới tính</label>
                    <select name="gioitinh" class="form-control">
                        <option value="1" @if($sinhvien->gioitinh == 1) selected @endif>Nam</option>
                        <option value="0" @if($sinhvien->gioitinh == 0) selected @endif>Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Địa Chi</label>
                    <input type="text" class="form-control" value="{{$sinhvien->diachi}}" name="diachi" placeholder="địa chỉ" required="required">
                    @if($errors->has("diachi"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("diachi") }}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{$sinhvien->email}}" name="email" placeholder="Email" required="required">
                    @if($errors->has("email"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("email") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ngay sinh</label>
                    <input type="date" class="form-control" value="{{$sinhvien->ngaysinh}}" name="ngaysinh" placeholder="ngay sinh" required="required">
                    @if($errors->has("ngaysinh"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("ngaysinh") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <select name="lop_id" class="form-control">
                        <option value="">Chọn tên lớp</option>
                        @foreach($lops as $lop)
                            <option @if($sinhvien->lop_id == $lop->lop_id) selected @endif value="{{$lop->lop_id}}">{{$lop->tenlop}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("lop_id"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("lop_id") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <select name="giaovien_id" class="form-control">
                        <option value="">Chọn tên giáo viên</option>
                        @foreach($giaoviens as $gv)
                            <option @if($sinhvien->giaovien_id == $gv->giaovien_id) selected @endif value="{{$gv->giaovien_id}}">{{$gv->tengv}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("giaovien_id"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("giaovien_id") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="file" class="form-control"  name="sinhvien_image" placeholder="Anh sinh vien" >
                    <option value="{{$sinhvien->sinhvien_image}}"></option>
                    <img src="{{$sinhvien->sinhvien_image}}" width="100" height="100">
                    @if($errors->has("sinhvien_image"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("sinhvien_image") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group"> <button type="submit" class="btn btn-primary">Lưu Lại</button></div>

            </form>


        </div>
    </div>
    @endsection
@section("scripts")
    @endsection