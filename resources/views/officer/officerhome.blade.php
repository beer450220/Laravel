{{-- @extends('layouts.app') --}}
@extends('layouts.officermin')

{{-- @section('titlebar','home') --}}
    <title>officer</title>
  @section('content')  

{{-- @include('layouts.adminsidebsr')

    @include('layouts.admintop') --}}
    @yield('content')


    


  <div class="container">    
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
</div> 

{{-- <h1 class="text-center" ><strong>หน้าแรก</strong></h1> 
    <h3 class="text-center">62042380105</h3> --}}
    
    




{{-- <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="" aria-labelledby="navbarDropdown">
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li> --}}
@endsection

