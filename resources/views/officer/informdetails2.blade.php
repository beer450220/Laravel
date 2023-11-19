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
                <th>ชื่อไฟล์</th>
                <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th>
                <th>สถานะ</th>
                <th>หมายเหตุ</th>
                <th style="width:10%">ดูไฟล์เอกสาร</th>
                <th>แก้ไข</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)


              <tr class="{{
                $row->Status_informdetails === 'รอตรวจสอบเอกสาร' ? 'table-warning' : (
                    $row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว' ? 'table-success' : (
                        $row->Status_informdetails === 'เอกสารไม่ผ่าน' ? 'table-danger' : ''
                    )
                )
            }}">
                <td class="col-1 text-center">{{ $informdetails->firstItem() + $loop->index }}</td>
                <td>{{ $row->fname }}</td>
                <td></td>
                <td>{{ $row->namefile }}</td>
                <td>{{ $row->year }}</td>
                <td>{{ $row->term }}</td>

                <td>
                    @if ($row->Status_informdetails === 'รอตรวจสอบเอกสาร')
                        <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails }}</span>
                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                        <span class="badge badge-pill badge-success">{{ $row->Status_informdetails}}</span>
                    @elseif ($row->Status_informdetails === 'เอกสารไม่ผ่าน')
                        <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails}}</span>
                    @endif
                </td>
                <td>{{ $row->annotation }}</td>
                <td><a href="/fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
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
