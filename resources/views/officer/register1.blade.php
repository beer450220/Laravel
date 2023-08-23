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
        <h5 class="card-title">ลงทะเบียน</h5>
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
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อหน่วยงาน</th>
              <th>หมายเหตุ</th>
             <th>สถานะ</th>
             
              <th style="width:10%">ไฟล์เอกสาร</th>
            
              <th style="width:10%">ตรวจสอบเอกสาร</th>
              {{-- <th style="width:10%">ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $row)
            <tr>
              <td class="col-1 text center">{{$registers->firstItem()+$loop->index}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->establishment}}</td>
              <td>{{$row->annotation}}</td>
              
         
                 <td class="text-danger">{{$row->Status_registers}}</td>
              <td><a  href="/file/{{ $row->filess }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
{{-- download --}}
              <td><a href="/officer/editregister1/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
             {{--  <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$registers->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
