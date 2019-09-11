@extends("layouts.dashboard")
@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">THÊM GIÁO VIÊN</h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("lophoc/create")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>Nhập Thêm Mã Lớp</label>
                    <input type="text" class="form-control" value="{{old("malop")}}" name="malop" placeholder="Thêm Mã Lớp" required="required">
                    @if($errors->has("malop"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("malop")}}</strong>
            </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nhập Tên Lớp Học</label>
                        <input type="text" class="form-control" value="{{old("tenlop")}}" name="tenlop" placeholder="Nhập Tên Lớp Học" required="required">
                        @if($errors->has("tenlop"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenlop") }}</strong>
            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <option value="">Chương Trình Học</option>
                    <select name="lophoc_id" class="form-control">
                        <option value="">Chương Trình Học</option>
                        @foreach($lophocs as $lops)
                            <option @if(old("lophoc_id") == $lops->lophoc_id) selected @endif value="{{$lops->lophoc_id}}">{{$lops->title}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("title"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("title") }}</strong>
            </span>
                    @endif
                </div>
{{--                <div class="form-group">
                    <option value="">Chọn Giáo Viên</option>
                    <select name="giaovien_id" class="form-control">
                        <option value="">Tên Giáo Viên</option>
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
                    <option value="">Chọn Khóa Học</option>
                    <select name="khoa_id" class="form-control">
                        <option value="">Chọn Khóa Học</option>
                        @foreach($khoas as $khoa)
                            <option @if(old("khoa_id") == $khoa->khoa_id) selected @endif value="{{$khoa->khoa_id}}">{{$khoa->tenkhoa}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("tenkhoa"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenkhoa") }}</strong>
            </span>
                    @endif
                </div>--}}
                <div class="form-group"> <button type="submit" class="btn btn-primary">Lưu Lại</button></div>

            </form>


        </div>
    </div>
@endsection
@section("scripts")
@endsection