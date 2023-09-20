@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>user</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>

            </div>
            {{-- sss --}}
        {{-- </div>
    </div>

</div>  --}}



<style>


  * {
      margin: 0;
      padding: 0
  }

  html {
      height: 100%
  }

  p {
      color: grey
  }

  #heading {
      text-transform: uppercase;
      color: #020508;
      font-weight: normal
  }

  #msform {
      text-align: center;
      position: relative;
      margin-top: 20px
  }

  #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 0.5rem;
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      padding-bottom: 20px;
      position: relative
  }

  .form-card {
      text-align: left
  }

  #msform fieldset:not(:first-of-type) {
      display: none
  }

  #msform input,
  #msform textarea {
      padding: 8px 15px 8px 15px;
      border: 1px solid #ccc;
      border-radius: 0px;
      margin-bottom: 25px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2C3E50;
      background-color: #ECEFF1;
      font-size: 16px;
      letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #673AB7;
      outline-width: 0
  }

  #msform .action-button {
      width: 100px;
      background: #673AB7;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 0px 10px 5px;
      float: right
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
      background-color: #311B92
  }

  #msform .action-button-previous {
      width: 100px;
      background: #616161;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px 10px 0px;
      float: right
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
      background-color: #000000
  }

  .card {
      z-index: 0;
      border: none;
      position: relative
  }

  .fs-title {
      font-size: 25px;
      color: #673AB7;
      margin-bottom: 15px;
      font-weight: normal;
      text-align: left
  }

  .purple-text {
      color: #673AB7;
      font-weight: normal
  }

  .steps {
      font-size: 25px;
      color: gray;
      margin-bottom: 10px;
      font-weight: normal;
      text-align: right
  }

  .fieldlabels {
      color: gray;
      text-align: left
  }

  #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      color: lightgrey
  }

  #progressbar .active {
      color: #030303
  }

  #progressbar li {
      list-style-type: none;
      font-size: 16px;
      width: 15%;
      float: left;
      position: relative;
      font-weight: 400
  }

  #progressbar #account:before {
      font-family: FontAwesome;
      content: "\f007"
  }

  #progressbar #personal:before {
      font-family: FontAwesome;
      content: "\f124"
  }

  #progressbar #payment:before {
      font-family: FontAwesome;
      content: "\f2c3"
  }

  #progressbar #confirm:before {
      font-family: FontAwesome;
      content: "\f0f6"


  }
  /* content: "\f0f6" */

  #progressbar li:before {
      width: 50px;
      height: 50px;
      line-height: 45px;
      display: block;
      font-size: 20px;
      color: #ffffff;
      background: lightgray;
      border-radius: 50%;
      margin: 0 auto 10px auto;
      padding: 2px
  }

  #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: lightgray;
      position: absolute;
      left: 0;
      top: 25px;
      z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
      background: #123bf1
  }

  .progress {
      height: 20px
  }

  .progress-bar {
      background-color: #26cf89
  }

  .fit-image {
      width: 100%;
      object-fit: cover
  }

  .fa-regular.fa-heart {
  color: gray; /* ตั้งค่าสีเริ่มต้นเป็นสีเทา */
  cursor: pointer;
}
.fa-solid.fa-heart {
  color: red; /* ตั้งค่าสีเมื่อเป็นสีแดงเมื่อคลิก */
}
.fa-heart.active {
  color: red; /* สีที่คุณต้องการเมื่อไอคอนมีสี */
}

.highlight {
        background-color: yellow; /* เปลี่ยนสีพื้นหลังเป็นสีเหลืองเมื่อเงื่อนไขเป็นจริง */
        color: black; /* เปลี่ยนสีข้อความในแถวที่เป็น highlight เป็นสีดำ */
    }


  </style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-16 col-lg-8 col-xl-7 text-center p-0 mt-3 mb-2">
        {{-- <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> --}}
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                {{-- <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p> --}}
                <form id="msform">
                    <!-- progressbar -->

                    <ul id="progressbar">
                      <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a>
                      <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong></li></a>
                        <a  href="/studenthome/register">  <li class="active" id="payment"><strong>ลงทะเบียน</strong></li></a>
                          <a  href="/studenthome/informdetails"> <li id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a>
                            <a  href="/studenthome/calendar2confirm"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                              <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a>
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">ลงทะเบียน:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 3 - 6</h2>
                                </div>
                            </div><div class="col-6">
                              <div class=" alert alert-primary  " role="alert">
                                  <b>ขั้นตอนที่ 3 ลงทะเบียน:</b> ให้กรอกข้อมูลนักศึกษาให้เรียบร้อย
                                      <br> แล้วให้อัพโหลดไฟล์เอกสารเพื่อลงทะเบียนให้เรียบร้อย
                                      <br>  <a href="/studenthome/informdetails"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป
                                                              </div>   <br>   <br>
                          </div>
                          {{-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <div class="col-7">
                                      <h1 class="steps">ให้กรอกข้อมูลนักศึกษา<br><h2 class="steps text-success">{{ Auth::user()->status}}</h2></h1>


                      </h2> --}}



{{--
                              <br>
                              <br> --}}


                                <br>
                                <br>
                                <main role="main" class="">
                                    <div class="container-fluid">
                                      <div class="row justify-content-center">
                                        <div class="col-12">
                                          @if(session("success"))
                                          <div class="alert alert-success col-4">{{session('success')}}
                                @endif
                                 @if(session("success0"))
                                          <div class="alert alert-danger col-4">{{session('success1')}}
                                @endif
                                          </div>
                                          </div>
                                <div class="col-md-12 my-4">
                                    <div class="card shadow">
                                      <div class="card-body">
                                        <h5 class="card-title">ข้อมูลนักศึกษา</h5>
                                        <div class="container">
                                            <div class="row">
                                              <div class="col-10">
                                                <p class="card-text"> <tbody>
                                                </p>
                                              </div>

                                              <div class="d-grid gap-2 d-md-block">
                                                {{-- <a href="" type="button" class="btn btn-outline-primary">ดาวน์โหลดไฟล์เอกสาร</a> --}}
                                                <a href="/studenthome/addstudent"  class=" btn btn-outline-success">เพิ่มข้อมูลนักศึกษา</a>

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
                                             {{-- <th>สถานะ</th> --}}


                                              <th style="width:10%">แก้ไข</th>
                                              {{-- <th style="width:10%">ลบ</th> --}}
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($studentinformations as $row)
                                            <tr>
                                              <td class="col-1 text center">{{$studentinformations->firstItem()+$loop->index}}</td>
                                              <td>{{$row->name}}</td>
                                              <td>{{$row->fname}}</td>
                                                 {{-- <td></td> --}}


                                              <td><a href="/studenthome/edit/{{$row->id}}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
                                              {{-- <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
                                            </tr>

                                            @endforeach
                                          </tbody>
                                        </table>
                                        {!!$registers->links('pagination::bootstrap-5')!!}
                                      </div>
                                    </div>
                                  </div> <!-- Bordered table -->
                                </div> <!-- end section -->


<br>
<br>
<main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            @if(session("success6"))
            <div class="alert alert-success col-4">{{session('success6')}}
  @endif
 @if(session("success5"))
          <div class="alert alert-success col-4">{{session('success5')}}
@endif
          </div>
          </div>
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">ลงทะเบียน</h5>
        <div class="container">
            <div class="row">
              <div class="col-9">
                <p class="card-text"> <tbody>
                </p>
              </div>
              {{-- <div class="col col-lg-2 ">
                <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
            </div> --}}
            <div class="d-grid gap-2 d-md-block">
                <a href="/studenthome/documents" type="button" class="btn btn-outline-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">ดาวน์โหลดไฟล์เอกสาร</a>

                <a href="/studenthome/addregister"  class=" btn btn-outline-success">ลงทะเบียนใหม่</a>

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
              <th>รูปภาพ</th>
             <th>สถานะ</th>
             <th>หมายเหตุ</th>
              <th style="width:10%">ดูไฟล์เอกสาร</th>

              <th style="width:10%">แก้ไข</th>
              {{-- <th style="width:10%">ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $row)
            <tr>


            {{-- <tr class="{{ $row->Status_registers === 'รอตรวจสอบ' ? 'table-warning' : ($row->Status_registers === 'ตรวจสอบแล้ว' ? 'table-success' : 'table-warning') }}">
                <td class="col-1 text center">{{$registers->firstItem()+$loop->index}}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->namefile }}</td>
                 <td>{{$row->annotation}}</td>
                <td>
                    @if ($row->Status_registers === 'รอตรวจสอบ')
                        <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                    @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                        <span class="badge badge-pill badge-success">{{ $row->Status_registers }}</span>
                    @else
                        <!-- กรณีอื่น ๆ --><span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                    @endif
                </td>

                <td>{{$row->annotation}}</td>
                <td><a href="/file/{{ $row->filess }}"target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
                <td><a href="/studenthome/edit2register/{{$row->id}}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
            </tr> --}}

            <tr class="{{
                $row->Status_registers === 'รอตรวจสอบ' ? 'table-warning' : (
                    $row->Status_registers === 'ตรวจสอบแล้ว' ? 'table-success' : (
                        $row->Status_registers === 'ไม่ผ่าน' ? 'table-danger' : ''
                    )
                )
            }}">
                <td class="col-1 text-center">{{ $registers->firstItem() + $loop->index }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->namefile }}</td>
                <td><img src="/file/{{ $row->filess }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td>
                <td>
                    @if ($row->Status_registers === 'รอตรวจสอบ')
                        <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                    @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                        <span class="badge badge-pill badge-success">{{ $row->Status_registers }}</span>
                    @elseif ($row->Status_registers === 'ไม่ผ่าน')
                        <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                    @endif
                </td>
                <td>{{ $row->annotation }}</td>
                <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
                <td><a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
            </tr>

            {{-- download --}}
{{-- <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
            @endforeach
          </tbody>
        </table>
        {!!$registers->links('pagination::bootstrap-5')!!}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->






@endsection
{{-- <script src="../student/js/jquery.min.js"></script> --}}


{{-- <script src="../student/js/simplebar.min.js"></script> --}}







{{-- <script src="../student/js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag()
  {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-56159088-1');
</script> --}}

