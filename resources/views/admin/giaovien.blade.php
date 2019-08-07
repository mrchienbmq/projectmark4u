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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Mã Giáo Viên</th>
                            <th>Tên </th>
                            <th>Họ</th>
                            <th>Gioi Tính</th>
                            <th>Học vị</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Mã Giáo Viên</th>
                            <th>Tên </th>
                            <th>Họ</th>
                            <th>Gioi Tính</th>
                            <th>Học vị</th>

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
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!$giaoviens ->links()!!}
                </div>
            </div>
        </div>

    </div>

@endsection
@section("scripts")
@endsection