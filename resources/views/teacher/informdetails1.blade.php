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
        <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>


        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              {{-- <div class="col col-lg-2">
                <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button>
              </div> --}}
            </div>

        </div>

<br>



        <table class="table table-hover text-center">
          <thead class="thead-dark ">
            <tr>
              <th>#</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>เอกสารแจ้ง</th>
              <th>สถานะ</th>
              <th>ดูข้อมูล</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)
            <tr>
              <td>{{$informdetails->firstItem()+$loop->index}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->establishment}}</td>
              <td><a href="/fileinformdetails/{{ $row->files }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td class="text-danger">{{$row->Status}}</td>
              <td><a href="/teacher/viewinformdetails1/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td>
 
              {{-- <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
