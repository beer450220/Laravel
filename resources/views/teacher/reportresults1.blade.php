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
        <h5 class="card-title">รายงานผลการฝึกประสบการณ์</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                {{-- <p class="card-text">Add <tbody>
                </p> --}}
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover "style="width:100%">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th style="width:10%">ชื่อนักศึกษา</th>
              <th >รายงานโครงการ</th>
              <th>การนำเสนอ</th>
              <th>โปสเตอร์</th>
              <th>รายงานสรุปโครงการ</th>
              <th style="width:10%">สถานะ</th>
              {{-- <th style="width:10%">ดูข้อมูล</th> --}}
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($report as $row)
            <tr>
              <td>{{$report->firstItem()+$loop->index}}</td>
              <td>{{$row->name}} </td>
              <td  >{{$row->projects}}<br><a href="/รายงานโครงการ/{{ $row->projects }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>{{$row->presentation}}<br><a href="/การนำเสนอ/{{ $row->presentation}}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>{{$row->poster}}<br><a href="/โปสเตอร์/{{ $row->poster }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>{{$row->projectsummary}}<br><a href="/รายงานสรุปโครงการ/{{ $row->projectsummary }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td>{{$row->Status}}</td>
              {{-- <td><a href="/studenthome/editreport/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td> --}}
              {{-- <td><a  href="/studenthome/deletereport/{{$row->report_id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
