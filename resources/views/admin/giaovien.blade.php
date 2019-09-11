@extends("layouts.dashboard")

@section("title")
@endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">QUẢN LÍ GIÁO VIÊN</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông Tin Giáo Viên</h6>
            </div>
            @if(Session::has("message"))
                <div class="alert alert-success" role="alert">
                    {{Session::get("message")}}
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>MÃ GIÁO VIÊN</th>
                            <th>TÊN </th>
                            <th>HỌ</th>
                            <th>GIỚI TÍNH</th>
                            <th>ĐANG GIẢNG DẠY</th>
                            <th>HỌC VẤN</th>
                            <th>TÙY CHỌN</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>MÃ GIÁO VIÊN</th>
                            <th>TÊN </th>
                            <th>HỌ</th>
                            <th>GIỚI TÍNH</th>
                            <th>ĐANG GIẢNG DẠY</th>
                            <th>HỌC VẤN</th>
                            <th>TÙY CHỌN</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($giaoviens as $giaovien)
                            <tr>
                                <td>{{$giaovien->giaovien_id}}</td>
                                <td>{{$giaovien->magv}}</td>
                                <td>{{$giaovien->tengv}}</td>
                                <td>{{$giaovien->hogv}}</td>
                                <td>
                                    @if($giaovien->gioitinh==1)
                                        {!! 'Nam' !!}
                                    @else
                                        {!! 'Nữ' !!}
                                    @endif
                                </td>
                                <td>{{$giaovien->lop->tenlop}}</td>
                                <td>
                                    @if  ($giaovien -> hocvi == 5 )
                                        {!! 'Cao Học' !!}
                                    @elseif($giaovien -> hocvi == 4)
                                        {!! "Đại Học" !!}
                                    @elseif($giaovien -> hocvi ==3)
                                        {!! "Cao Đẳng" !!}
                                    @elseif($giaovien -> hocvi == 2)
                                        {!! "Trung cấp" !!}
                                        @else
                                         {!! "Hợp Đồng" !!}
                                        @endif
                                <td><a class="btn btn-primary" href="{{url("giaovien/edit?giaovien_id=".$giaovien->giaovien_id)}}">CHỈNH SỬA </a>
                                    <a class="btn btn-success" onclick="return confirm('Bạn Muốn Xóa Không? ');" href="{{url("giaovien/delete/".$giaovien->giaovien_id)}}">XÓA </a>
                                    <a class="btn btn-info" href="{{url("giaovien/detail/".$giaovien->giaovien_id)}}">Thông Tin</a></td>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$giaoviens ->links()!!}
                </div>
                <a href="{{ url("giaovien/create") }}" class="btn btn-danger">Tạo giáo viên mới</a>
            </div>
        </div>

    </div>

@endsection
@section("scripts")
@endsection