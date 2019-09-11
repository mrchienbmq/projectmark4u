@extends("layouts.dashboard")
@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">SỬA THÔNG SINH VIÊN</h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("giaovien/edit")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="giaovien_id" value="{{$giaovien->giaovien_id}}"/>
                <div class="form-group">
                    <label> Mã Sinh Viên</label>
                    <input type="text" class="form-control" value="{{$giaovien->magv}}" name="magv" placeholder="Mã Gíao Viên" required="required">
                    @if($errors->has("magv"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("magv")}}</strong>
            </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nhập Tên Giáo Viên</label>
                        <input type="text" class="form-control" value="{{$giaovien->tengv}}" name="tengv" placeholder="Tên Gíao viên" required="required">
                        @if($errors->has("tengv"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tengv") }}</strong>
            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label >Nhập Họ Giáo Viên</label>
                        <input type="text" class="form-control" value="{{$giaovien->hogv}}" name="hogv" placeholder="Họ Sinh Viên" required="required">
                        @if($errors->has("hogv"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{$errors->first("hogv") }}</strong>
            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Chọn giới tính</label>
                    <select name="gioitinh" class="form-control">
                        <option value="1" @if($giaovien->gioitinh == 1) selected @endif>Nam</option>
                        <option value="0" @if($giaovien->gioitinh == 0) selected @endif>Nữ</option>
                    </select>
                </div>

                <div class="form-group">
                    <option >Chọn tên lớp</option>
                    <select name="lop_id" class="form-control">
                        @foreach($lops as $lop)
                            <option @if($giaovien->lop_id == $lop->lop_id) selected @endif value="{{$lop->lop_id}}">{{$lop->tenlop}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("tenlop"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenlop") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Trình Độ</label>
                    <select name="hocvi" class="form-control">
                        <option value="1" @if($giaovien->hocvi == 1) selected @endif>Hợp Đồng</option>
                        <option value="0" @if($giaovien->hocvi == 2) selected @endif>Trung Cấp</option>
                        <option value="0" @if($giaovien->hocvi == 3) selected @endif>Cao Đẳng</option>
                        <option value="0" @if($giaovien->hocvi == 4) selected @endif>Đại Học</option>
                        <option value="0" @if($giaovien->hocvi == 5) selected @endif>Cao Học</option>
                    </select>
                </div>
                <div class="form-group"> <button type="submit" class="btn btn-primary">Lưu Lại</button></div>

            </form>


        </div>
    </div>
@endsection
@section("scripts")
@endsection
