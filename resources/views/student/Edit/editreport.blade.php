


   
    



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
                 
                 
                  <form method="POST" action="{{url('/studenthome/updatereport/'.$report->report_id)}}" enctype="multipart/form-data">
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
                        <label for="recipient-name" class="col-form-label">รายงานโครงการ</label>
                        {{-- <input type="text" class="form-control" name="establishment" value="{{$report->projects}}" > --}}
                        <input type="file" class="form-control"@error('projects') is-invalid @enderror  name="projects"value="{{$report->projects}}" >
                        @error('projects')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{$report->projects}}
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">การนำเสนอ</label>
                      
                        <input type="file" class="form-control"@error('presentation') is-invalid @enderror  name="presentation"value="{{$report->presentation}}" >
                        @error('projects')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{$report->presentation}}
                      </div>
                     
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">โปสเตอร์</label>
                       
                        <input type="file" class="form-control"@error('poster') is-invalid @enderror  name="poster"value="{{$report->poster}}" >
                        @error('projects')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{$report->poster}}
                      </div>
                       
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">รายงานสรุปโครงการ</label>
                      
                        <input type="file" class="form-control"@error('projectsummary') is-invalid @enderror  name="projectsummary"value="{{$report->projectsummary}}" >
                        @error('projects')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{$report->projectsummary}}
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