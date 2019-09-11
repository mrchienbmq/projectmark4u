@extends("layouts.dashboard")
@section("title")
    @endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">QUẢN LÍ LỚP HỌC</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông Tin LỚP HỌC</h6>
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
                            <th>MÃ LỚP </th>
                            <th>TÊN LỚP</th>
                            <th style="text-align: center">TÙY CHỈNH</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>MÃ LỚP </th>
                            <th>TÊN LỚP</th>
                            <th style="text-align: center">TÙY CHỈNH</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($lops as $lop)
                            <tr>
                                <td>{{$lop->lop_id}}</td>
                                <td>{{$lop->malop}}</td>
                                <td>{{$lop->tenlop}}</td>
                                <td style="text-align: center">
                                    <a class="btn btn-success" onclick="return confirm('Bạn Muốn Xóa Không? ');" href="{{url("lophoc/delete/".$lop->lop_id)}}">XÓA </a>
                                    <a class="btn btn-primary" href="{{url("lophoc/edit?lop_id=".$lop->lop_id)}}">CHỈNH SỬA </a>
                                    <a class="btn btn-info" href="{{url("lop/detail/".$lop->lop_id)}}">THÔNG TIN</a>
                                    <a class="btn btn-danger" href="{{url("lophoc/sinhvien/".$lop->lop_id)}}">XEM THÀNH VIÊN LỚP HỌC</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$lops ->links()!!}
                </div>
                <a href="{{ url("lophoc/create") }}" class="btn btn-danger">TẠO LỚP HỌC MỚI</a>

            </div>
        </div>

    </div>

@endsection
@section("scripts")
@endsection