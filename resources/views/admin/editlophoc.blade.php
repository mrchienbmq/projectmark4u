@extends("layouts.dashboard")
@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">SỬA THÔNG TIN LỚP HỌC </h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("lophoc/edit")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="lop_id" value="{{$lophocs->lop_id}}"/>
                <div class="form-group">
                    <label> Mã Lớp Học</label>
                    <input type="text" class="form-control" value="{{$lophocs->malop}}" name="malop" placeholder="Mã Lớp Học" required="required">
                    @if($errors->has("malop"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("malop")}}</strong>
            </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Tên Lớp Học</label>
                        <input type="text" class="form-control" value="{{$lophocs->tenlop}}" name="tenlop" placeholder="Tên Lớp Học" required="required">
                        @if($errors->has("tenlop"))
                            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenlop") }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <option >Chọn Chương Trình Học</option>
                    <select name="lophoc_id" class="form-control">
                        @foreach($title as $lop)
                            <option @if($lophocs->lophoc_id == $lop->lophoc_id) selected @endif value="{{$lop->lophoc_id}}">{{$lop->title}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("title"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("title") }}</strong>
            </span>
                    @endif
                </div>
                {{--<div class="form-group">
                    <label>Trình Độ</label>
                    <select name="hocvi" class="form-control">
                        <option value="1" @if($giaovien->hocvi == 1) selected @endif>Hợp Đồng</option>
                        <option value="0" @if($giaovien->hocvi == 2) selected @endif>Trung Cấp</option>
                        <option value="0" @if($giaovien->hocvi == 3) selected @endif>Cao Đẳng</option>
                        <option value="0" @if($giaovien->hocvi == 4) selected @endif>Đại Học</option>
                        <option value="0" @if($giaovien->hocvi == 5) selected @endif>Cao Học</option>
                    </select>
                </div>--}}
                <div class="form-group"> <button type="submit" class="btn btn-primary">Lưu Lại</button></div>

            </form>


        </div>
    </div>
@endsection
@section("scripts")
@endsection
