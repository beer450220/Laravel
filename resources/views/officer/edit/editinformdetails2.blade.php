







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


                  <form method="POST" action="{{url('/officer/updateinformdetails2/'.$informdetails->informdetails_id)}}" enctype="multipart/form-data">
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
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                         <input type="text" class="form-control" name="annotation" value="{{$informdetails->annotation}}"required >

                        @error('annotation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>

                        <select class="form-select " aria-label=".form-select-sm example" name="Status_informdetails">
                          <option selected>กรุณาเลือก</option>
                          <option value="ตรวจสอบเอกสารแล้ว"@if($informdetails->Status_informdetails=="ตรวจสอบ") selected @endif required>ตรวจสอบเอกสารแล้ว</option>
                          <option value="ไม่ผ่าน"@if($informdetails->Status_informdetails=="ไม่ผ่าน") selected @endif required>ไม่ผ่าน</option>
                          <option value="รอตรวจสอบ"@if($informdetails->Status_informdetails=="รอตรวจสอบ") selected @endif required >รอตรวจสอบ</option>

                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>




                    </div>
              </div>
                <div class="modal-footer">

                  <a href="/officer/informdetails2"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
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
