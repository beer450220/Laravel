







@extends('layouts.officermin1')

@section('content')
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />



        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ให้เลือกสถานประกอบการ</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">



                    {{-- @method("put") --}}
                    @if ($errors->any())


                <ul>
                    @foreach ($errors->all() as $error)

                    @endforeach
                </ul>
            </div>
        @endif



                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">สถานประกอบการ</h5>

                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{url('/studenthome/establishmentstatusupdate/'.$events->id)}}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">

                                <br>
                                 {{-- @foreach ($establishments as $row) --}}
                               {{-- {{$events->firstItem()+$loop->index}} --}}
                                {{-- {{$establishments->name}} --}}
                                {{-- {{Auth::user()->id}} --}}
                              </div>
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">เลือกสถานประกอบการ</label>
                                <select class="form-select  select2" name="establishment" aria-label="Default select example">

                                  <option selected>กรุณาเลือก</option>

                                  @foreach($users as $name )
                                  {{-- @if($events1->establishment==$name) selected @endif required --}}
                                      <option value="{{ $name }}" {{ old('name') == $name ? 'selected' : '' }}>{{ $name }}</option>
                                      {{-- <option value="{{ $name }}" {{ (old('name') == $name || $events1->establishment == $name) ? 'selected' : '' }}>{{ $name }}</option> --}}
                                      {{-- <option value="{{ $id }}" {{ old('establishment') == $id ? 'selected' : '' }}>{{ $name }}</option> --}}
                                      {{-- <option value="{{ $name }}" {{ old('name') == $name || ($events1->establishment == $name && $events1->establishment == $name) ? 'selected' : '' }}>{{ $name }}</option> --}}
{{-- ($events->establishment == $name ? 'selected' : '') --}}
                                                                        {{-- @if($events->Statusevents=="วันจันทร์") selected @endif required --}}


                                                                        @endforeach
                                </select>
                              </div>



                          </div>
                          <div class="modal-footer">
                            <a href="/studenthome/establishmentuser"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                            <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการอัพเดทข้อมูล !!');">อัพเดท</button>
                        </form>  </div>
                        </div>
                      </div>
                    </div>
                    {{-- @endforeach --}}
              </div>
                <div class="modal-footer">


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
    $('.select2').select2({
    closeOnSelect: false
    });
    });
    </script>
    @foreach($users as $name )
    {{-- {{$name->id}} --}}
    {{-- {{$name->id}} --}}
     {{-- {{$name->name}} --}}

    @endforeach






@endsection
