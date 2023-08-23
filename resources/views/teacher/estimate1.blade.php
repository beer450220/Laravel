@extends('layouts.appteacher')

@section('content')
<title>รายงานผลการนิเทศ </title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">รายงานผลการนิเทศ </h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                <a href="/teacher/addestimate1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
              <th>สถานะ</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>
                {{$row->name}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->score}}</td>
              <td>{{$row->Status}}</td>
              <td><a href="/teacher/editestimate1/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
              <td><a href="/teacher/viewinformdetails1/{{$row->supervision_id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
