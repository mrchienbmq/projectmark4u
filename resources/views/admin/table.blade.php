@extends("layouts.dashboard")

@section("title")
@endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">QUẢN LÍ SINH VIÊN</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông Tin Sinh Viên</h6>
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
                            <th>Ảnh Đại Diện</th>
                            <th>Mã Sinh Viên</th>
                            <th>Tên </th>
                            <th>Họ</th>
                            <th>Gioi Tính</th>
                            <th>Địa Chi</th>
                            <th>Email</th>
                            <th>Ngày Sinh</th>
                            <th>Lớp Học</th>
                            <th>Lựa Chọn</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh Đại Diện</th>
                            <th>Mã Sinh Viên</th>
                            <th>Tên </th>
                            <th>Họ</th>
                            <th>Gioi Tính</th>
                            <th>Địa Chi</th>
                            <th>Email</th>
                            <th>Ngày Sinh</th>
                            <th>Lớp Học</th>
                            <th>Lựa Chọn</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($sinhviens as $sinhvien)
                      <tr>
                          <td>{{$sinhvien->sinhvien_id}}</td>
                          <td><img src="{{asset("$sinhvien->sinhvien_image")}}" height="70" width="70"></td>
                          <td>{{$sinhvien->masv}}</td>
                          <td>{{$sinhvien->ten}}</td>
                          <td>{{$sinhvien->ho}}</td>
                          <td>
                          @if($sinhvien->gioitinh==1)
                              {!! 'Nam' !!}
                          @else
                              {!! 'Nữ' !!}
                          @endif
                          </td>
                          <td>{{$sinhvien->diachi}}</td>
                          <td>{{$sinhvien->email}}</td>
                          <td>{{$sinhvien->ngaysinh}}</td>
                          <td>{{$sinhvien->getlop_id->tenlop}}</td>
                       {{--   @foreach($sinhvien->getlop_id as $sv)
                          <td>{{$sv->tenlop}}</td>
                          @endforeach--}}
                          <td><a class="btn btn-primary" href="{{url("sinhvien/edit?sinhvien_id=".$sinhvien->sinhvien_id)}}">CHỈNH SỬA </a>
                          <a class="btn btn-success" onclick="return confirm('Bạn Muốn Xóa Không? ');" href="{{url("sinhvien/delete/".$sinhvien->sinhvien_id)}}">XÓA </a>
                          <a class="btn btn-info" href="{{url("sinhvien/detail/".$sinhvien->sinhvien_id)}}">Thông Tin</a></td>
                      </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!!$sinhviens ->links()!!}
                </div>
                <a href="{{ url("sinhvien/create") }}" class="btn btn-danger">Tạo sinh viên mới</a>
            </div>
        </div>

    </div>

@endsection
@section("scripts")
    @endsection