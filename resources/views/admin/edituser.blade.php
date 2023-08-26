@extends('layouts.adminmin1')
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
                                name="txt_StudentID" value="{{$users->username}}" pattern="[0-9]{1,}" maxlength="11"  placeholder="รหัสนักศึกษา">
        
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
<input type="submit" name="btn_update" class="btn btn-primary  btn-block " value="แก้ไขข้อมูล">
</div> <div class="col-sm-6">


<a href="../index.php?page=user" class="btn btn-primary  btn-block">ยกเลิก</a>

                       </div><br>
                        <hr>
         </div>
                    </form> 
                </div>
            </div>

                    <main role="main" class="">
                        <div class="container-fluid">
                          <div class="row justify-content-center">
                            <div class="col-12">
                              <h2 class="page-title">Form elements</h2>
                             
                              <div class="card shadow mb-4">
                                <div class="card-header">
                                  <strong class="card-title">Form controls</strong>
                                </div>
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                        <form method="POST" action="{{url('/user/updateuser/'.$users->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-3">
                                        <label for="simpleinput">username</label>
                                        <input type="text" id="simpleinput" name="username" value="{{$users->username}}" class="form-control">
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-email">Email</label>
                                        <input type="email" value="{{$users->email}}" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-password">Password</label>
                                        <input type="password" value="" id="example-password" class="form-control" >
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-palaceholder">role</label>
                                        <input type="text" value="{{$users->role}}"disabled="" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                      </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                      <div class="form-group mb-3">
                                        <label for="example-helping">รูป</label>
                                        <input type="file" id="example-helping" name="images"value="{{$users->images}}" class="form-control" placeholder="Input with helping text">
                                       
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-readonly">Readonly</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-disable">Disabled</label>
                                        <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                      </div>
                                      <div class="form-group mb-3">
                                        <label for="example-static">Static control</label>
                                        <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="j@example.com">
                                      </div>
                                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-outline-success me-md-2 delete-btn"  type="submit">อัพเดทข้อมูล</button>
                                        &nbsp;&nbsp;
                                        <button  class="btn btn-outline-warning fe fe-edit fe-16" type="reset">ยกเลิก</button>
                                        <a href="/user" class="btn btn-primary  btn-block">ย้อนกลับ</a> 
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- / .card -->
                            </div>
                          </div>
                        </form >
                    @endsection