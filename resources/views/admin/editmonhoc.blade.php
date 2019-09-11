@extends("layouts.dashboard")
@section("title")
@endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">SỬA THÔNG TIN LỚP HỌC </h1>
        <!-- DataTales Example -->
        <div class="table-responsive">
            <form action="{{url("monhoc/edit")}}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="lophoc_id" value="{{$monhocs->lophoc_id}}"/>
                <div class="form-group">
                    <label>TÊN MÔN HỌC</label>
                    <input type="text" class="form-control" value="{{$monhocs->title}}" name="title" placeholder="Tên Môn Học" required="required">
                    @if($errors->has("title"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("title")}}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group">
                    <option >CHỈNH SỬA GIÁO VIÊN</option>
                    <select name="giaovien_id" class="form-control">
                        @foreach($giaoviens as $lop)
                            <option @if($monhocs->giaovien_id == $lop->giaovien_id) selected @endif value="{{$lop->giaovien_id}}">{{$lop->tengv}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("tengv"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tengv") }}</strong>
            </span>
                    @endif
                </div>
                <div class="form-group">
                    <option >CHỈNH SỬA LỚP HỌC</option>
                    <select name="lop_id" class="form-control">
                        @foreach($lops as $lop)
                            <option @if($monhocs->lop_id == $lop->lop_id) selected @endif value="{{$lop->lop_id}}">{{$lop->tenlop}}</option>
                        @endforeach
                    </select>
                    @if($errors->has("tenlop"))
                        <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("tenlop") }}</strong>
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