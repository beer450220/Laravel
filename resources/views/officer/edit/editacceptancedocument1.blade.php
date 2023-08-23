


   
    



@extends('layouts.officermin1')

@section('content')
@yield('content') 




        <div class="col-md-12 mb-12">
 
   
      
     
         
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลตรวจสอบเอกสาร</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div> 
              
                  
                <div class="modal-body">
                 
                 
                  <form method="POST" action="{{url('/officer/updateacceptance/'.$acceptances->acceptance_id)}}" enctype="multipart/form-data">
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
                        <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label>
                      
                        <select class="form-select " aria-label=".form-select-sm example" name="Status_acceptance">
                          <option selected>กรุณาเลือก</option>
                          <option value="ตรวจสอบเอกสารแล้ว"@if($acceptances->Status_acceptance=="ตรวจสอบเอกสารแล้ว") selected @endif required>ตรวจสอบเอกสารแล้ว</option>
                          <option value="ไม่ผ่านตรวจสอบเอกสาร"@if($acceptances->Status_acceptance=="ไม่ผ่านตรวจสอบเอกสาร") selected @endif required>ไม่ผ่านตรวจสอบเอกสาร</option>
                          <option value="รอตรวจสอบเอกสาร"@if($acceptances->Status_acceptance=="รอตรวจสอบเอกสาร") selected @endif required >รอตรวจสอบเอกสาร</option>
                        
                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                      
                        <select class="form-select " aria-label=".form-select-sm example" name="Status_acceptance">
                          <option selected>กรุณาเลือก</option>
                          <option value="ตรวจสอบเอกสารแล้ว"@if($acceptances->Status_acceptance=="ตรวจสอบเอกสารแล้ว") selected @endif required>ตรวจสอบเอกสารแล้ว</option>
                          <option value="ไม่ผ่านตรวจสอบเอกสาร"@if($acceptances->Status_acceptance=="ไม่ผ่านตรวจสอบเอกสาร") selected @endif required>ไม่ผ่านตรวจสอบเอกสาร</option>
                          <option value="รอตรวจสอบเอกสาร"@if($acceptances->Status_acceptance=="รอตรวจสอบเอกสาร") selected @endif required >รอตรวจสอบเอกสาร</option>
                        
                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                      </div>
                      <div class="col-md-2">
                        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
                        <select class="form-control "  name="term" required>
                          <option value="">กรุณาเลือกภาคเรียน</option>
                      
                       
                          <option value="ภาคเรียนที่1"@if($acceptances->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:1 </option>
                          <option value="ภาคเรียนที่2"@if($acceptances->term=="ภาคเรียนที่2") selected @endif>ภาคเรียนที่:2 </option>
                          
                       
                        
                        </select>
                        
                    </div>
                    <div class="col-md-2">
                      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
                      <select class="form-control "  name="year" required>
                        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach --}}
                    <option value="">กรุณาเลือกปีการศึกษา</option>
                    @php
                    $currentYear = date('Y') + 543; // ปีปัจจุบัน
                    $startYear = 2500; // ปีเริ่มต้น
                    $endYear = $currentYear + 100; // ปีสิ้นสุด
                @endphp
                
                @for ($i = $endYear; $i >= $startYear; $i--)
                    @for ($j = 1; $j <= 1; $j++)
                        <option value="{{ $i }}-{{ $j }}@if($acceptances->year==$acceptances->year) selected @endif">{{ $i }}</option>
                    @endfor
                @endfor
                </select>
                        
                     
                      
                      </select>
                  </div>
                         <div class="row">
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารตอบรับ (สก.02)</label>
                <div class="custom-file mb-6">
                
                 
                  
                  <input class="form-control" type="file" name="filess"value="{{$acceptances->filess}} "id="formFile"> 
          </div>
          
        </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                         <input type="text" class="form-control" name="annotation" value="{{$acceptances->annotation}}" > 
                        
                        @error('annotation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                   
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>
                      
                        <select class="form-select " aria-label=".form-select-sm example" name="Status_acceptance">
                          <option selected>กรุณาเลือก</option>
                         
                          <option value="ตอบรับนักศึกษาแล้ว"@if($acceptances->Status_acceptance=="ตอบรับนักศึกษาแล้ว") selected @endif required>ตอบรับนักศึกษาแล้ว</option>
                          <option value="ยังไม่ได้ตอบรับนักศึกษาแล้ว"@if($acceptances->Status_acceptance=="ยังไม่ได้ตอบรับนักศึกษาแล้ว") selected @endif required>ยังไม่ได้ตอบรับนักศึกษา</option>
                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                      </div>
                     
                      
                
                    
                    </div>
              </div> <br>
                <div class="modal-footer">
             
                  <a href="/officer/acceptancedocument1"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
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