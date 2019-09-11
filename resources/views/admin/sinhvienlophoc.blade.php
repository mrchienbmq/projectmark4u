@extends("layouts.dashboard")
@section("title")
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
@endsection
@section("content")
   {{-- <div class="container">
        <form action="{{"lophoc/sinhvien/"}}}" method="get">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        --}}{{-- <img src="{{lop->sinhvien_image}}"  width="200" height="200">--}}{{--
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container" style="border-bottom:1px solid black">
                            <h3 STYLE="text-align: center"></h3>
                        </div>
                        <hr>
                        <ul class="container details">@foreach($sinhviens->getStudent as $sinhvien)
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;">{{$sinhvien->ten}} {{$sinhvien->ho}}</span>
                            </li>
                       --}}{{--     <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><h2>Tên Lớp : {{$lophocs->tenlop}}</h2></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><h3>GIÁO VIÊN CHỦ NHIỆM : {{$lophocs->getgiaovien_ten->hogv}} {{$lophocs->getgiaovien_ten->tengv}}</h3></p></li>--}}{{--
                            <hr>
                                                          @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </form>--}}
   <div class="container-fluid">
       <form action="{{"lophoc/sinhvien/"}}}" method="get">
       <!-- Page Heading -->
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
                       </tr>
                       </tfoot>
                       <tbody>
                       @foreach($sinhviens->getStudent as $sinhvien)
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
                           </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
       </form>

   </div>
@endsection
@section("scripts")
@endsection
