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
                        <form method="POST" action="{{ route('adduser') }}" >
                        @csrf
<h4 class="text-primary">ข้อมูลส่วนตัว</h4>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รหัสประจำตัว') }}</label>

                            <div class="col-md-6">
                                <input id="code_id" type="text" class="form-control @error('code_id') is-invalid @enderror" name="code_id" value="{{ old('code_id') }}" required autocomplete="Identification_code" autofocus>

                                @error('code_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user_fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="user_fname" type="text" class="form-control @error('user_fname') is-invalid @enderror" name="user_fname" value="{{ old('user_fname') }}" required autocomplete="user_fname">

                                @error('user_fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user_surname" class="col-md-4 col-form-label text-md-end">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="user_surname" type="user_surname" class="form-control @error('user_surname') is-invalid @enderror" name="user_surname" value="{{ old('user_surname') }}" required autocomplete="user_surname">

                                @error('user_surname')
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
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เกรดเฉลี่ย') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('เบอร์โทรผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ความเกี่ยวข้อง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ที่อยู่ผู้ปกครอง') }}</label>

                            <div class="col-md-6">
                                <input id="telephonenumber" type="text" class="form-control" name="telephonenumber" required autocomplete="telephonenumber">
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

                            <select class="form-control" aria-label="Default select example"@error('name') is-invalid @enderror name="name"value="{{ old('name') }}" required autocomplete="name">
                            <option selected>เลือกสถานะผู้ใช้งาน</option>
                                <option value="student">นักศึกษา</option>
                            <option value="teacher">อาจาร์ยนิเทศ</option>
                            <option value="officer">เจ้าหน้าที่</option>
                            </select>
                                @error('name')
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
                                <button type="submit" class="btn btn-primary">
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
