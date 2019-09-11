@extends("layouts.dashboard")
@section("title")
@endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">QUẢN LÍ MÔN HỌC</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">THÔNG TIN MÔN HỌC</h6>
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
                            <th>CHUYÊN NGÀNH</th>
                            <th>LỚP ĐANG HỌC</th>
                            <th style="text-align: center">TÙY CHỈNH</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>CHUYÊN NGÀNH </th>
                            <th>LỚP ĐANG HỌC</th>
                            <th style="text-align: center">TÙY CHỈNH</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($monhocs as $mh)
                            <tr>
                                <td>{{$mh->lophoc_id}}</td>
                                <td>{{$mh->title}}</td>
                                <td>{{$mh->getlop_id->tenlop}}</td>
                                <td style="text-align: center">
                                    <a class="btn btn-primary" href="{{url("monhoc/edit?lophoc_id=".$mh->lophoc_id)}}">CHỈNH SỬA </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$monhocs ->links()!!}
                </div>
               {{-- <a href="{{ url("lophoc/create") }}" class="btn btn-danger">TẠO LỚP HỌC MỚI</a>--}}

            </div>
        </div>

    </div>

@endsection
@section("scripts")
@endsection

