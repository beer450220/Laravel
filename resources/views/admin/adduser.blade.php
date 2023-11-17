{{-- @extends('layouts.app') --}}
@extends('layouts.adminmin')

{{-- @section('titlebar','home') --}}
    <title>admin</title>
  @section('content')

{{-- @include('layouts.adminsidebsr')

    @include('layouts.admintop') --}}
    @yield('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}
                        <form method="POST" action="{{ route('adduser') }}" enctype="multipart/form-data">
                        @csrf
<h4 class="text-primary">ข้อมูลส่วนตัว</h4>
{{-- @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

@if(session("error"))
<div class="alert alert-danger col-6">{{session('error')}}
@endif --}}


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รหัสประจำตัว') }}</label>

                            <div class="col-md-6">
                                <input id="code_id" type="text" class="form-control @error('code_id') is-invalid @enderror" name="code_id" value="{{ old('code_id') }}" required autocomplete="code_id" autofocus>

                                @error('code_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="surname" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('อีเมล์') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรศัพท์') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หลักสูตร') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="telephonenumber" type="text" class="form-control" name="major_id" required autocomplete="major_id"> --}}
                                <select class="form-control" id="validationSelect1" name="major_id" >
                                    <option value="">กรุณาเลือกหลักสูตร</option>
                                    @foreach ($major as $row)
                                    {{-- <optgroup label="Mountain Time Zone"> --}}
                                      <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option>
                                      {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                    </optgroup>

                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เกรดเฉลี่ย') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="GPA" required autocomplete="GPA">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="Parent_name" required autocomplete="Parent_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="Parent_phonenumber" required autocomplete="Parent_phonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ความเกี่ยวข้อง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="Relevance" required autocomplete="Relevance">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่ผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="Parent_address" required autocomplete="Parent_address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพผู้ใช้งาน') }}</label>

                            <div class="col-md-6">
                                <input id="inputGroupFile02" type="file" class="form-control" name="images" required autocomplete="images">


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('บทบาท') }}</label>

                            <div class="col-md-6">

                            <select class="form-control" aria-label="Default select example"@error('role') is-invalid @enderror name="role"value="{{ old('role') }}" required autocomplete="role">
                            <option selected>เลือกสถานะผู้ใช้งาน</option>
                                <option value="student">นักศึกษา</option>
                            <option value="teacher">อาจาร์ยนิเทศ</option>
                            <option value="officer">เจ้าหน้าที่</option>
                            </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/user" type="submit" class="btn btn-primary">
                                    {{ __('ย้อมกลับ') }}
                                </a>
                                <button type="submit" class="btn btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">
                                    {{ __('ตกลง') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
