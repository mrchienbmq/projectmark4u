@extends("layouts.dashboard")
@section("title")
@endsection
@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">EMAIL ĐĂNG KÍ</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
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
                            <th>Email </th>
                            <th>Họ Và Tên</th>
                            <th>Số Điện Thoại </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emails as $email)
                            <tr>
                                <td>{{$email->email_id}}</td>
                                <td>{{$email->email}}</td>
                                <td>{{$email->fullname}}</td>
                                <td>{{$email->phonenumber}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
@section("scripts")
@endsection
