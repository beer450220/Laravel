@extends('layouts.appteacher')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">นิเทศงาน</h5>


        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-3">
                <a href="/teacher/addsupervision" type="button" class=" btn btn-outline-primary">เพิ่มข้อมูล</a>
                <a href="/officer/pdf" target="_BLANK" type="button" class="btn btn-outline-danger">Pdf</a>
                <a href="/teacher/Excel" target="_BLANK" type="button" class="btn btn-outline-success">Export</a>
              </div>
            </div>

        </div>

<br>



        <table class="table table-hover text-center">
          <thead class="thead-dark ">
            <tr>
              <th>#</th>
              <th>วันเวลาการนิเทศ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              {{-- <th>ดูข้อมูล</th> --}}
              <th>สถานะ</th>
              <th>แก้ไขข้อมูล</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $row)
            <tr>
              <td>{{$events->firstItem()+$loop->index}}</td>
              <td>{{$row->start}}</td>
              <td>{{$row->student_name}}</td>
              {{-- <td>{{$row->fname}}</td> --}}
              {{-- <td> @foreach ($major as $row1)

               {{$row1->id==$row->student_name}}

               @endforeach</td> --}}
              {{-- "{{$row->id==$supervisions->user_id }} --}}
              {{-- <td>@foreach ($phpArrayFromDatabase as $item) {
                {{$item->student_name}}
            }@endforeach</td> --}}  <td class="text-danger">{{$row->establishment_name}}</td>
            {{-- <td class="text-danger"><a href="/teacher/editsupervision02/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td> --}}
              <td class="text-danger">{{$row->Statusevents}}</td>
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td> --}}
              <td><a href="/teacher/editsupervision02/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deletSupervise/{{$row->id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>
              {{-- <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td> --}}
            </tr>

            @endforeach
          </tbody>

        </table> {!!$events ->links('pagination::bootstrap-4')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection