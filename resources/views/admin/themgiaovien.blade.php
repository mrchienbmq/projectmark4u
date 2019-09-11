@extends("layouts.dashboard")
@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">THÊM GIÁO VIÊN</h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("giaovien/create")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label> Mã Sinh Viên</label>
                    <input type="text" class="form-control" value="{{old("magv")}}" name="magv" placeholder="Thêm Mã Giáo Viên" required="required">
                    @if($errors->has("magv"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("magv")}}</strong>
            </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nhập Tên Sinh Viên</label>
                        <input type="text" class="form-control" value="{{old("tengv")}}" name="tengv" placeholder="Tên Giáo Viên" required="required">
                        @if($errors->has("tengv"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tengv") }}</strong>
            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label >Nhập Họ Sinh Viên</label>
                        <input type="text" class="form-control" value="{{old("hogv")}}" name="hogv" placeholder="Họ Giao Viên" required="required">
                        @if($errors->has("hogv"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("hogv") }}</strong>
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
                    <label class="control-label">Trình Độ</label>
                    <select class="form-control" name="hocvi"  required="required">
                        <option value="5">Cao Học</option>
                        <option value="4">Đại Học</option>
                        <option value="3">Cao Đẳng</option>
                        <option value="2">Trung Cấp</option>
                        <option value="1">Hợp Đồng</option>

                    </select>
                </div>

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
                <div class="form-group"> <button type="submit" class="btn btn-primary">Lưu Lại</button></div>

            </form>


        </div>
    </div>
@endsection
@section("scripts")
@endsection
