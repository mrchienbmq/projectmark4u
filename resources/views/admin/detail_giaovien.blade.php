@extends("layouts.dashboard")
@section("title")
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
@endsection

@section("content")
    <div class="container">
        <form action="{{url("giaovien/detail")}}" method="get">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       {{-- <img src="{{$giaovien->sinhvien_image}}"  width="200" height="200">--}}
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container" style="border-bottom:1px solid black">
                            <h2>{{$giaovien->hogv}} {{$giaovien->tengv}}</h2>
                        </div>
                        <hr>
                        <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>giới tính: @if($giaovien->gioitinh==1)
                                        {!! 'Nam' !!}
                                    @else
                                        {!! 'Nữ' !!}
                                    @endif</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Trình Độ Học Vấn:
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
                                    @endif</p></li>
                            {{--@foreach($sinhvien->gettitle as $title)--}}
                            {{--@endforeach--}}
                            <hr>
                        </ul>
                        <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;">Chuyên Ngành: {{$giaovien->getlophoc_id->title}}</span></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Lớp Đang giảng dạy: {{$giaovien->lop->tenlop}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
@endsection
@section("scripts")
@endsection