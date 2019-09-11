@extends("layouts.dashboard")

@section("title")
    @endsection
@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">THÊM SINH VIÊN</h1>
        <!-- DataTales Example -->
                <div class="table-responsive">
                    <form action="{{url("sinhvien/create")}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label> Mã Sinh Viên</label>
                            <input type="text" class="form-control" value="{{old("masv")}}" name="masv" placeholder="masv" required="required">
                            @if($errors->has("masv"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("masv")}}</strong>
            </span>
                            @endif
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nhập Tên Sinh Viên</label>
                                    <input type="text" class="form-control" value="{{old("ten")}}" name="ten" placeholder="Tên" required="required">
                                    @if($errors->has("ten"))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("ten") }}</strong>
            </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label >Nhập Họ Sinh Viên</label>
                                    <input type="text" class="form-control" value="{{old("ho")}}" name="ho" placeholder="Họ" required="required">
                                    @if($errors->has("ho"))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("ho") }}</strong>
            </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label">Giới Tính</label>
                            <select class="form-control" name="gioitinh"  required="required">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Địa Chi</label>
                            <input type="text" class="form-control" value="{{old("diachi")}}" name="diachi" placeholder="địa chỉ" required="required">
                            @if($errors->has("diachi"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("diachi") }}</strong>
            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{old("email")}}" name="email" placeholder="Email" required="required">
                            @if($errors->has("email"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("email") }}</strong>
            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Ngay sinh</label>
                            <input type="date" class="form-control" value="{{old("ngaysinh")}}" name="ngaysinh" placeholder="ngay sinh" required="required">
                            @if($errors->has("ngaysinh"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("ngaysinh") }}</strong>
            </span>
                            @endif
                        </div>
   {{--                     <div class="form-group">
                            <select name="lophoc_id" class="form-control">
                                <option value="">Chọn Chuyên Ngành lớp</option>
                                @foreach($tenlop as $lop)
                                    <option @if(old("lophoc_id") == $lop->lophoc_id) selected @endif value="{{$lop->lophoc_id}}">{{$lop->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has("title"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("title") }}</strong>
            </span>
                            @endif
                        </div>--}}
                        <div class="form-group">
                            <select name="lop_id" class="form-control">
                                <option value="">Chọn tên lớp</option>
                                @foreach($lophocs as $lop)
                                    <option @if(old("lop_id") == $lop->lop_id) selected @endif value="{{$lop->lop_id}}">{{$lop->tenlop}}</option>
                                @endforeach
                            </select>
                            @if($errors->has("tenlop"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenlop") }}</strong>
            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="giaovien_id" class="form-control">
                                <option value="">Chọn Giáo Viên</option>
                                @foreach($giaoviens as $gv)
                                    <option @if(old("giaovien_id") == $gv->giaovien_id) selected @endif value="{{$gv->giaovien_id}}">{{$gv->tengv}}</option>
                                @endforeach
                            </select>
                            @if($errors->has("tengv"))
                                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tengv") }}</strong>
            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" value="{{old("sinhvien_image")}}" name="sinhvien_image" placeholder="Anh sinh vien" required="required">
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