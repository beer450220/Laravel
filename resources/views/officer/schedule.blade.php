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
        <h5 class="card-title">กำหนดการปฏิทินสหกิจ</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                <a href="/officer/addschedule" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับ</th>
              <th>วันเวลาการปฏิทินสหกิจ</th>
              <th>หัวเรื่อง</th>
               <th>รายละเอียด</th>
              <th>ปีการศึกษา</th>
              <th>ภาคเรียน</th>



              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($schedules as $row)
            <tr>
              <td class="col-1 text center">{{$schedules->firstItem()+$loop->index}}</td>
              <td>{{$row->title}}</td>
              <td>{{$row->title}}</td>
              <td>{{$row->start}}</td>
              <td>{{$row->end}}</td>
              <td>{{$row->title}}</td>
              <td><a href="/officer/editschedule1/{{$row->schedule_id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              <td><a href="/officer/deleschedule1/{{$row->schedule_id}}"type="button" class="btn btn-outline-danger fa-solid fa-trash-can"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></td>
            </tr>

            @endforeach
          </tbody>
        </table>
        {!!$schedules->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->
@endsection
