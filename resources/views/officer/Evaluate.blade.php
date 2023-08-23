@extends('layouts.officermin')

@section('content')
<title>user</title>

{{-- <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">รายงานผลการนิเทศ</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button>
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
              <th>หมายเหตุ</th>
              <th>สถานะ</th>
              <th>ตรวจสอบ</th>
            
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
              <td>{{$row->Status_supervision}}</td>
              <td>{{$row->Status_supervision}}</td>
              <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> 
</div>  --}}


<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
<div class="col-md-12 my-4">
<div class="card shadow">
  <div class="card-body">
    <h5 class="card-title">รายงานผลการนิเทศ</h5>
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
<br>
    </div>
    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">รอตรวจสอบเอกสาร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ตรวจสอบเอกสารแล้ว</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ตรวจสอบเอกสารไม่ผ่าน</a>
      </li>
    </ul>
    <div class="tab-content mb-1" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
              <th>หมายเหตุ</th>
              <th>สถานะ</th>
              <th>ตรวจสอบ</th>
              {{-- <th>ลบ</th> --}}
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
              <td>{{$row->Status_supervision}}</td>
              <td class="text-warning ">{{$row->Status_supervision}}</td>
              <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->supervision_id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
        
        
         </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> 
        
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
              <th>หมายเหตุ</th>
              <th>สถานะ</th>
              {{-- <th>ตรวจสอบ</th> --}}
              {{-- <th>ลบ</th> --}}
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
              <td>{{$row->Status_supervision}}</td>
              <td class="text-success">{{$row->Status_supervision}}</td>
              {{-- <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td> --}}
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->supervision_id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>
      
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> 


        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>คะแนน</th>
              <th>หมายเหตุ</th>
              <th>สถานะ</th>
              {{-- <th>ตรวจสอบ</th> --}}
              {{-- <th>ลบ</th> --}}
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
              <td>{{$row->Status_supervision}}</td>
              <td class="text-danger">{{$row->Status_supervision}}</td>
              {{-- <td><a href="/officer/editEvaluate/{{$row->supervision_id}} "type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td> --}}
              {{-- <td><a href="/teacher/viewinformdetails1/{{$row->supervision_id}} "type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td> --}}
            </tr>

            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
</div>


@endsection
