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
        <h5 class="card-title">เอกสารตอบรับนักศึกษา</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                <a href="/officer/addacceptancedocument1" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อนักศึกษา</th>
                <th>ชื่อไฟล์</th>
                <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th>
                {{-- <th>รูปภาพ</th> --}}
               <th>สถานะ</th>
               <th>หมายเหตุ</th>
                <th style="width:10%">ดูไฟล์เอกสาร</th>

                <th style="width:10%">แก้ไข</th>

              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($acceptances as $row)
              <td>{{$acceptances->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}}</td>
              <td>{{$row->namefile}}</td>
              <td>{{ $row->year}}</td>
              <td>{{ $row->term}}</td>
              <td>{{$row->Status_acceptance	}}</td>
              <td>{{$row->annotation}}</td>
              <td><a href="/ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/{{ $row->filess }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>


              <td><a href="/officer/editacceptancedocument1/{{$row->acceptance_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deletacceptance/{{$row->acceptance_id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>

              </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
