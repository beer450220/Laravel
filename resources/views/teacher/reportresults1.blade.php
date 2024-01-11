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
              <th style="">ชื่อนักศึกษา</th>
              <th style="">ชื่อเอกสาร</th>
              <th style="">สถานะ</th>
              <th style="width:10%">ดูข้อมูล</th>
              {{-- <th>ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($report as $row)
            <tr>
              <td>{{$report->firstItem()+$loop->index}}</td>
              <td>{{$row->fname}} </td>
              <td>{{$row->namefile}} </td>
              <td>{{$row->Status_report}}</td>
              <td><a href="/ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
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
