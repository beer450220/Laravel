


   
    



@extends('layouts.officermin1')

@section('content')
@yield('content') 




        <div class="col-md-12 mb-12">
 
   
      
     
         
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูล</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div> 
              
                  
                <div class="modal-body">
                 
                 
                  <form method="POST" action="{{url('/studenthome/updateinformdetails/'.$informdetails->informdetails_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method("put") --}}
                    @if ($errors->any())
         
               
                <ul>
                    @foreach ($errors->all() as $error)
                       
                    @endforeach
                </ul>
            </div>
        @endif
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control" name="establishment" value="{{$informdetails->establishment}}" >
                        @error('establishment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control"	name="" value="" placeholder="Last name" aria-label="Last name">
                        {{-- @error('establishment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                     
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name=""value="" placeholder="Last name" aria-label="Last name">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                        <input type="file" class="form-control"@error('files') is-invalid @enderror  name="files"value="{{$informdetails->files}}" ><br>
                        {{-- <img src="/file/{{ $establishments->filess }}" class="img-responsive" style="max-height: 300px; max-width: 200px;" alt="" srcset=""> --}}
                  {{$informdetails->files}}
                        {{-- @error('files')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                      </div>
                     
                    </div>
              </div>
                <div class="modal-footer">
             
                  <a href="/studenthome/informdetails"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



   



    

   
  
@endsection