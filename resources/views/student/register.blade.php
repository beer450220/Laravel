@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>ระบบสารสนเทศสหกิจศึกษา</title>
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
                                  <b>ขั้นตอนที่ 3 ลงทะเบียน:</b>
                                      <br> ให้อัพโหลดไฟล์เอกสารเพื่อลงทะเบียนให้เรียบร้อย
                                      {{-- <br>  <a href="/studenthome/informdetails"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}
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
                                 @if(session("error"))
                            <div class="alert alert-danger col-4">{{session('error')}}
                                @endif
                                      </div>
                                      </div> </div>
                            <div class="col-md-12 my-4">
                                <div class="card shadow">
                                  <div class="card-body">
                                    <h5 class="card-title">ลงทะเบียน</h5>
                                    <h5 class="card-title"><a href="/studenthome/documents" type="button" class="btn btn-outline-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">ดาวน์โหลดไฟล์เอกสาร</a></h5>
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-1">
                                            <p class="card-text"> <tbody>
                                            </p>
                                          </div>
                                          {{-- <div class="col col-lg-2 ">
                                            <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                                            <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
                                        </div> --}}
                                        <div class="">
                                            {{-- <a href="/studenthome/Announcement"  class=" btn btn-outline-primary">ประกาศผลการตอบรับ</a> --}}




                                          </div>
                                        </div>

                                    </div>
                                    <br>


                                </div> <!-- end section -->
                            </div> <!-- end section -->
                                <br>
                                <br>

                                <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                                 @foreach ($registers1 as $row)

                                         @if ($row->Status_registers === 'รอตรวจสอบ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif
                                         {{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach




                                             <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                                                @foreach ($registers1 as $row)
                                                @if ($row->Status_registers === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                @else
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach</H2>

                                            </span>


                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">  <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                        <br>

                                        @foreach ($registers1 as $row)

                                        <div class="col-md-3">
                                            <div class="card shadow mb-4">
                                              <div class="card-body text-center">
                                                <div class="avatar avatar-lg mt-4">
                                                  {{-- <a href="">
                                                    <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                  </a> --}}
                                                </div>
                                                <div class="card-text my-2">
                                                  <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                  <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                  <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                </div>
                                              </div> <!-- ./card-text -->
                                              <div class="card-footer">
                                                <div class="row align-items-center justify-content-between">
                                                  <div class="col-auto">
                                                    <small>
                                                      {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                      <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                      <td><a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                    </div>

                                                  <div class="col-auto">

                                                  </div>
                                                </div>
                                              </div> <!-- /.card-footer -->
                                            </div>
                                          </div>
                                          @endforeach
                                          </div>

                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span>  @foreach ($registers2 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                    </span><h2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong>

                                          </a><span>
                                            @foreach ($registers2 as $row)
                                            @if ($row->Status_registers === 'รอตรวจสอบ')
                                                <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                            @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                                <span class="text-Success ">ตรวจสอบแล้ว</span>
                                            @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                                <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                            @else
                                                <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                            @endif
                                        @endforeach</h2>

                                    </span>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>

                                          <br>
                                          @foreach ($registers2 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit3register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach

                                        </div>
                                      </div>

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <span>  @foreach ($registers3 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                            </span> <span> </span> <h2><strong>แบบคำรองขอหนังสือขอควำมอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)</strong>
                                          </a> @foreach ($registers3 as $row)
                                          @if ($row->Status_registers === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>

                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                          <br>
                                          @foreach ($registers3 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit4register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            <span>  @foreach ($registers4 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                            </span> <h2><strong>บัตรชาชน</strong>
                                          </a>
                                          @foreach ($registers4 as $row)
                                          @if ($row->Status_registers === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"><a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
                                          <br>
                                          @foreach ($registers4 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit5register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            <span>  @foreach ($registers5 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>บัตรนักศึกษา</strong>
                                          </a>@foreach ($registers5 as $row)
                                          @if ($row->Status_registers === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($registers5 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit6register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            <span>  @foreach ($registers6 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>ผลการเรียน</strong>
                                          </a>
                                          @foreach ($registers6 as $row)
                                          @if ($row->Status_registers === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($registers6 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit7register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            <span>  @foreach ($registers7 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach



                                            </span> <H2><strong>ประวัติส่วนตัว(resume)</strong>
                                          </a> @foreach ($registers7 as $row)
                                          @if ($row->Status_registers === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</H2>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister7"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
                                          <br>
                                          @foreach ($registers7 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit8register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                    </div>

                                  </div>


                                  <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse0" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0" class="collapsed">
                                 @foreach ($registers1 as $row)

                                         @if ($row->Status_registers === 'รอตรวจสอบ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif
                                         {{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach




                                             <h2><strong>ประกาศผลการตอบรับ</strong> </a> <span class="">
                                                @foreach ($registers1 as $row)
                                                @if ($row->Status_registers === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->Status_registers === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                @elseif (Auth::user()->Status_registers)
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach</h2>

                                            </span>


                                        </div>
                                        <div id="collapse0" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">

                                            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                         </div>
                                        <br>

                                        @foreach ($registers1 as $row)

                                        <div class="col-md-3">
                                            <div class="card shadow mb-4">
                                              <div class="card-body text-center">
                                                <div class="avatar avatar-lg mt-4">
                                                  {{-- <a href="">
                                                    <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                  </a> --}}
                                                </div>
                                                <div class="card-text my-2">
                                                  <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                  <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                  <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                </div>
                                              </div> <!-- ./card-text -->
                                              <div class="card-footer">
                                                <div class="row align-items-center justify-content-between">
                                                  <div class="col-auto">
                                                    <small>
                                                      {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                      <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                      <td><a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                    </div>

                                                  <div class="col-auto">

                                                  </div>
                                                </div>
                                              </div> <!-- /.card-footer -->
                                            </div>
                                          </div>
                                          @endforeach
                                          </div>

                                        </div>
                                      </div>




                                  <main role="main" class="">
                                    <div class="container-fluid">
                                  <div class="row justify-content-center">
                                    <div class="col-md-12 my-4 " >
                                   </div>


                                  </div></div></div></div> <div class="d-grid gap-2">

                                    <h2>ขั้นตอนต่อไป</h2>
                                    </div>   <a href=""  id="show-alert" class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>
                                  <br>
<br>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
//Swal.fire('Any fool can use a computer')

$(document).ready(function () {
        $('#show-alert').click(function () {
            Swal.fire({
                title: 'คุณแน่ใจหรือไม่?',
                text: 'คุณต้องการดำเนินการนี้หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/studenthome/informdetails";
                }
            });
        });
    });
</script>

{{-- <main role="main" class="">
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

            <div class="d-grid gap-2 d-md-block">
                <a href="/studenthome/Announcement"  class=" btn btn-outline-primary">ประกาศผลการตอบรับ</a>
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

            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $row)
            <tr>




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


            @endforeach
          </tbody>
        </table>
        {!!$registers->links('pagination::bootstrap-5')!!}
      </div>
    </div> --}}
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

