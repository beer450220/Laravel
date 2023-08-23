@extends('layouts.appstudent')

 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>user</title>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
{{-- {{ __('หหDashboard') }} --}}
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
        </div>
    </div>
    
</div>
{{-- <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Form elements</h2>
          <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Form controls</strong>
            </div>
            <div class="card-body">
              <div class="row">
               
                <div class="col-md-6"> 
                    <form method="POST" action="/studenthome">
                    @csrf
                    <input type="hidden"  name="line_id" class="form-control">
                  <div class="form-group mb-3">
                    <label for="simpleinput">ส่งข้อความ</label>
                    <input type="text" id="simpleinput" name="message" class="form-control">
                  </div>
                 
               
                <div class="text-end form-group mb-3 ">
                <button type="submit" class="btn mb-2 btn-outline-primary">ตกลง</button>  
               
                </div>
                </div>
              </div>
            </div>
          </div> <!-- / .card --> --}}
@endsection 
{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
                                   