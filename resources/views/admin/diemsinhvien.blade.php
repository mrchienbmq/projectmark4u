@extends("layouts.dashboard")
@section("title")
    <!-- Meta Tags for Bootstrap 4 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @endsection
@section("content")
<!-- Start of Table -->
<table class="table">
    <thead>
    <tr>
        <th>Học Sinh</th>
        <th>Điểm Kì 1: </th>
        <th>Điểm Kì 2: </th>
        <th>Điểm Kì 3: </th>
        <th>Điểm Kì 4: </th>
        <th>Điểm Trung Bình</th>
        <th>Thành Tích</th>
    </tr>
    </thead>
    <tbody> <tr>
        <td>{{$sinhvien->ten}}</td>
        <td>{{$sinhvien->getdiem_id->diemki1}}</td>
        <td>{{$sinhvien->getdiem_id->diemki2}}</td>
        <td>{{$sinhvien->getdiem_id->diemki3}}</td>
        <td>{{$sinhvien->getdiem_id->diemki4}}</td>
        <td>{{$total = ($diem->diemki1 + $diem->diemki2 + $diem->diemki3 + $diem->diemki4)/4}}</td>
        <td>@if($total >= 8.5 || $total ==10  )
                <h4>Đạt Sinh Viên Xuất Sắc</h4>
             @elseif($total >= 7 || $total <8.4)
                <h4>Đạt Sinh Viên Khá</h4>
            @elseif($total >= 5.5 || $total <6.9)
                <h4>Đạt Sinh Trung Bình </h4>
            @elseif($total >= 4 || $total <5.4)
                <h4>Đạt Sinh Viên Yếu</h4>
            @endif
        </td>

    </tr>
    </tbody>
</table>
@endsection
@section("scripts")
    <!-- End of Table -->
    <!-- Bootstrap 4 Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
