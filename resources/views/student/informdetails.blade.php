@extends('layouts.appstudent')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          @if(session("success"))
          <div class="alert alert-success col-4">{{session('success')}}
@endif
 @if(session("success1"))
          <div class="alert alert-danger col-4">{{session('success1')}}
@endif
</div>
</div>
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>


        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                <button type="button" class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</button>
              </div>
            </div>

        </div>

<br>



        <table class="table table-hover text-center">
          <thead class="thead-dark ">
            <tr>
              <th>#</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>เอกสารแจ้ง</th>
              <th>สถานะ</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($informdetails as $row)
            <tr>
              <td>{{$informdetails->firstItem()+$loop->index}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->establishment}}</td>
              <td><a href="/fileinformdetails/{{ $row->files }}"download class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
              <td class="text-danger">{{$row->Status}}</td>
              <td><a href="/studenthome/editinformdetails/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td>
              <td><a  href="/studenthome/deleteinformdetails/{{$row->informdetails_id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->



{{-- เพิ่มข้อมูล --}}
<div class="col-md-4 mb-4">
 
   
      
     
  <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header ">
          <h5 class="modal-title text center" id="varyModalLabel">เพิ่มข้อมูล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
      
          
        <div class="modal-body">
          
         
          <form method="POST" action="{{ route('addinformdetails') }}"enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            {{-- <div class="alert alert-danger"> --}}
               
                <ul>
                    @foreach ($errors->all() as $error)
                        {{-- <li>{{ $error }}</li> --}}
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                <input type="text" class="form-control" name="establishment" >
              </div> 
              @error('establishment')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
              {{-- <div class="col-md-4">
                <label for="recipient-name" class="col-form-label"></label>
                <input type="text" class="form-control"	name="" placeholder="Last name" aria-label="Last name">
              </div> --}}
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="files" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
            </div>
            <br>
            {{-- <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div> --}}
             
              {{-- <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">รูปหน่วยงาน</label>
                <input type="file" class="form-control"name="filess" placeholder="First name" aria-label="First name">--}}
              {{-- </div>  --}}
           
            <div class="row">
              <div class="col-md-4">
               
                </div>
              </div>
              {{-- @error('')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror --}}
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
          <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
        </div></form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>



@endsection
