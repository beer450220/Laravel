@extends('layouts.officermin')

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
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>เอกสารแจ้ง</th> 
              <th>หมายเหตุ</th>
              <th>สถานะ</th>
              <th>ตรวจสอบเอกสาร</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)
            <tr>
              <td>{{$informdetails->firstItem()+$loop->index}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->establishment}}</td>
              <td>{{$row->files }}<br><br><a href="/fileinformdetails/{{ $row->files }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td class="text-danger">{{$row->Status_informdetails}}</td>
              <td class="text-danger">{{$row->Status_informdetails}}</td>
              <td><a href="/officer/editinformdetails2/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
