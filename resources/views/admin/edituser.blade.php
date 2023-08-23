@extends('layouts.adminmin')
<title>admin</title>
@section('content')  

{{-- @include('layouts.adminsidebsr')

  @include('layouts.admintop') --}}
  @yield('content')

  {{-- <div class="container">    
    <div class="row justify-content-center">
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
        </div>
    </div>
</div>  --}}

   <div class="container-fluid">
<div class="card   ">
    <div class="card-body p-2 ">
        <!-- Nested Row within Card Body -->
        <div class="row  justify-content-md-center">
            
            <div class="col-lg-8 ">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4  text-gray-900 mb-4">ข้อมูลผู้ใช้งาน</h1>
                    </div>
        
    
    
                    
                    <form  method="post" class="user   "enctype="multipart/form-data">



                    <div class="form-group row ">
                        <div class="col-16  " >
                     
</div>
<div class="col-sm-4">
                                <input type="text" class="form-control  " 
                                name="txt_StudentID" value="" pattern="[0-9]{1,}" maxlength="11"  placeholder="รหัสนักศึกษา">
                            </div>
                        <div class="col-4  " >
                    
                                    <select class="form-select form-control "  name="txt_pname"
                                     >
                            <option selected>กรุณาเลือกคำนำหน้าชื่อ</option>
  
  <option value="นาย">นาย</option>
  <option value="นาง">นาง</option>
  <option value="นางสาว">นางสาว</option>
</select>
                            </div>
                             <div class="col-sm-4  ">
                                <input type="text" class=" form-control   "  
                                aria-hidden="true" name="name"value="{{$users->name}}" placeholder="ชื่อ">
                            </div>
                           

                            <div class="col-sm-4">
                            
                            </div>
                            
                           

                        </div> 

                        
<div class="form-group row">
<div class="col-sm-4 mb-">
    <input type="text" class="form-control "
        id="exampleInputPassword" name="txt_lastname" value=""  placeholder="นามสกุล">
</div>
<div class="col-sm-4">
<select class="form-select form-control "  name="txt_major"
                                     >
                            <option selected>กรุณาเลือกวิชาเอก</option>
  <option value="ชีววิทยา">ชีววิทยา</option>
  <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
  <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
  <option value="คณิตศาสตร์ประยุกต์">คณิตศาสตร์ประยุกต์</option>
  <option value="เคมี">เคมี</option>
  <option value="วิทยาศาสตร์การกีฬาและการออกกำลังกาย">วิทยาศาสตร์การกีฬาและการออกกำลังกาย</option>
  <option value="สิ่งแวดล้อม">สิ่งแวดล้อม</option>
  <option value="วิทยาการข้อมูล">วิทยาการข้อมูล</option>
  <option value="สาธารณสุขศาสตร์">สาธารณสุขศาสตร์</option>
  <option value="อาหารและโภชนาการ">อาหารและโภชนาการ</option>
  
</select>
</div>
<div class="col-sm-4 mb-">
<select class="form-select form-control " name="txt_faculty"
                                     >
                            <option selected>กรุณาเลือกคณะ</option>
  <option value="คณะวิทยาศาสตร์และเทคโนโลยี" >คณะวิทยาศาสตร์และเทคโนโลยี</option>
 
</select>
</div>

</div>




                


               

                        
                        <div class="form-group row  ">
                      
                                   
                                    <div class="col-sm-4">
                                <input type="text" name="txt_phone" value=""name="Number"id="number"pattern="[0-9]{1,}" maxlength="10 "class="form-control  "
                                    placeholder="เบอร์โทรศัพท์">
                            </div>  
                            <div class="col-sm-4">
                                <input type="email" class="form-control  " 
                                name="email"value="{{$users->email}}"   placeholder="อีเมล์">
                            </div>
                            <div class="col-sm-4">
                            <select class="form-select form-control " name="role" 
                                     >
                            <option selected>กรุณาเลือกสถานะ</option>
  <option value="admin"@if($users->role=="admin") selected @endif>ผู้ดูแล</option>
  <option value="student"@if($users->role=="student") selected @endif>นักศึกษา</option>
  <option value="teacher"@if($users->role=="teacher") selected @endif>อาจารย์</option>
  <option value="officer"@if($users->role=="officer") selected @endif>เจ้าหน้าที่</option>
</select>
                            </div>



                            
</div>
                        <div class="form-group">



                            <input type="text" class="form-control " value="" name="txt_address" id="exampleInputEmail"
                                placeholder="ที่อยู่">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control "
                                name="username"value="{{$users->username}}" id="exampleInputPassword" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control "
                                name="txt_password" value=""   id="exampleRepeatPassword"maxlength="11" placeholder=" รหัสผ่าน">
                            </div>
                        </div><div class="form-group">




<input type="file" class="form-control " 
    placeholder="รูปภาพ" name="txt_file" 
    value="">
</div> <p class="text-center">
                    <img src="../../upload/" height="100" width="100" alt="">
                </p>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
<input type="submit" name="btn_update" class="btn btn-primary  btn-block " value="แก้ไขข้อมูล">
</div> <div class="col-sm-6">


<a href="../index.php?page=user" class="btn btn-primary  btn-block">ยกเลิก</a>
                       </div><br>
                        <hr>
         </div>
                    </form> 
                    @endsection