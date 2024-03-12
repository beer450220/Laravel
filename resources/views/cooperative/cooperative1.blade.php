<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         <!-- Bootstrap CSS-->
    {{-- <link rel="stylesheet" href="http://coop.uru.ac.th/vendor/bootstrap/css/bootstrap.min.css"> --}}
    <!-- Font Awesome CSS-->





    <!-- Custom stylesheet - for your changes-->
    {{-- <link rel="stylesheet" href="http://coop.uru.ac.th/css/custom.css"> --}}
    <!-- Favicon and apple touch icons-->
    {{-- <link rel="shortcut icon" href="http://coop.uru.ac.th/img/coop.ico" type="image/x-icon"> --}}
    {{-- <link href="http://coop.uru.ac.th/css/lity.min.css" rel="stylesheet"> --}}




        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>







<body class="antialiased">


    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              {{-- <li><a href="/" class="nav-link px-2 text-secondary">หน้าแรก</a></li> --}}
              <li><a href="/establishment" class="nav-link px-2 text-white">สถานประกอบการ</a></li>
              <li><a href="/cooperative" class="nav-link px-2 text-white">แบบฟอร์มสหกิจ</a></li>
              <li><a href="คู่มือการใช้งาน.pdf" target="_blank" class="nav-link px-2 text-white">คู่มือการใช้งาน</a></li>
              {{-- <li><a href="/cooperative1" class="nav-link px-2 text-white">ยื่นประสงค์ฝึกประสบการณ์</a></li> --}}
              <li> <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    ยื่นประสงค์ฝึกประสบการณ์
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/cooperative1">เพิ่มข้อมูลประสงค์ฝึกประสบการณ์</a></li>
                  <li><a class="dropdown-item" href="/cooperative2">รายการสถานะยื่นประสงค์</a></li>
                </ul>
              </div></li>

              {{-- <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li> --}}
            </ul>

            {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> --}}

            <div class="text-end">
              {{-- <a type="button" href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a> --}}
              {{-- <a type="button" href="" class="btn btn-outline-light me-2"data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a> --}}
              {{-- <a type="button" href="{{ route('register1') }}" class="btn btn-warning">Sign-up</a> --}}

              {{-- <a type="button" href="{{ route('register1') }}" class="btn btn-outline-warning me-2">สมัครสมาชิก</a> --}}
              <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a>
            </div>
          </div>
        </div>

      </header>
      <div class="container">
      <div class="row   ">
      <div class="col  ">
      </div><br>
      <div class="card ">
        <div class="card-header">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                            <div class="card-body">
                                {{-- <form method="POST" action="{{ route('register') }}"> --}}
                                    <form method="POST" action="{{ route('addcooperative1') }}" enctype="multipart/form-data">
                                    @csrf
            <h4 class="text-">ข้อมูลยื่นประสงค์ฝึกประสบการณ์</h4>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger col-6">{{ $error }}</li>
            @endforeach
            </ul>

            @if(session("error"))
            <div class="alert alert-danger col-6">{{session('error')}}
            @endif


                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รหัสประจำตัว') }}</label>

                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"maxlength="11" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                            @error('code_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อจริง') }}</label>

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
                                            {{-- <div class="badge rounded-pill bg-warning text-dark">*** 123-45-678</div> --}}
                                            <input id="telephonenumber" type="tel" class="form-control" name="telephonenumber"maxlength="10" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"placeholder="123-45-678" required autocomplete="telephonenumber">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('หลักสูตร') }}</label>

                                        <div class="col-md-6">
                                            {{-- <input id="telephonenumber" type="text" class="form-control" name="major_id" required autocomplete="major_id"> --}}
                                            <select class="form-select" id="validationSelect1" name="major_id"required >
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
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อสถานประกอบการ') }}</label>

                                        <div class="col-md-6">
                                            <input id="em_name" type="text" class="form-control" name="em_name" required autocomplete="em_name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ภาคเรียนที่') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-select "  name="term" required>
                                                <option value="">กรุณาเลือกภาคเรียน</option>

                                              <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
                                                <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('ปีการศึกษา') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-select "  name="year"required >
                                                {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach --}}
                                            <option value="">กรุณาเลือกปีการศึกษา</option>
                                            @php
                                            $currentYear = date('Y') + 543; // ปีปัจจุบัน
                                            $startYear = 2566; // ปีเริ่มต้น
                                            $endYear = $currentYear + 50; // ปีสิ้นสุด
                                        @endphp

                                        @for ($i = $endYear; $i >= $startYear; $i--)
                                            @for ($j = 1; $j <= 1; $j++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        @endfor
                                        </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพผู้ใช้งาน') }}</label>

                                        <div class="col-md-6">
                                            {{-- <input id="inputGroupFile02" type="file" class="form-control" name="images" required autocomplete="images"> --}}
                                            <input class="form-control" type="file" id="formFile"name="images" required>

                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <a href="" type="reset" class="btn btn-primary">
                                                {{ __('ยกเลิก') }}
                                            </a>
                                            <button type="submit" class="btn btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล จะไม่สามารถแก้ไขได้ !!');">
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




