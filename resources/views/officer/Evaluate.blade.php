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
        <h5 class="card-title">เอกสารประเมินผล</h5>
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
              <th>ชื่อไฟล์เอกสาร</th>
              <th>ภาคเรียน</th>
                <th>ปีการศึกษา</th>
              <th>คะแนน</th>
              <th>หมายเหตุ</th>
              <th>ไฟล์เอกสาร</th>


            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>
                {{$row->supervision_id}}</td>
                <td>{{$row->namefile}}</td>
              <td>{{$row->term}}</td>
              <td>{{$row->year}}</td>
              <td>{{$row->score}}</td>

              <td>{{$row->annotation}}</td>
              <td><a href="../ไฟล์เอกสารประเมิน/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>

            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


{{-- <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
<div class="col-md-12 my-4">
<div class="card shadow">
  <div class="card-body">
    <h5 class="card-title">เอกสารประเมินผล</h5>
    <div class="container">
        <div class="row">
          <div class="col-10">
            <p class="card-text"> <tbody>
            </p>
          </div>
          <div class="col col-lg-2"> --}}
            {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
          </div>
        </div>
<br>
    </div>


        {{-- <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
               <th>ไฟล์เอกสาร</th>
              <th>หมายเหตุ</th>



            </tr>
          </thead>
          <tbody>
            @foreach ($supervision as $row)
            <tr>
              <td>{{$supervision->firstItem()+$loop->index}}</td>
              <td>
                {{$row->supervision_id}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->score}}</td>
              <td>{{$row->Status_supervision}}</td>
              <td class="text-warning ">{{$row->Status_supervision}}</td>
              <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>

            </tr>

            @endforeach
          </tbody>
        </table>


         </div> --}}



@endsection
