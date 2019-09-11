@extends("layouts.dashboard")
@section("title")
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    @endsection
@section("content")
    <div class="container">
        <form action="{{url("lop/detail")}}" method="get">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       {{-- <img src="{{lop->sinhvien_image}}"  width="200" height="200">--}}
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container" style="border-bottom:1px solid black">
                                <h3 STYLE="text-align: center">{{$lophocs->getlophoc_id->title}}</h3>
                        </div>
                        <hr>
                        <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><h2>Mã Lớp : {{$lophocs->malop}}</h2></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><h2>Tên Lớp : {{$lophocs->tenlop}}</h2></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><h3>GIÁO VIÊN CHỦ NHIỆM : {{$lophocs->getgiaovien_ten->hogv}} {{$lophocs->getgiaovien_ten->tengv}}</h3></p></li>
                            <hr>
                        </ul>

                    </div>
                </div>
            </div>
        </form>
@endsection
@section("scripts")
@endsection
