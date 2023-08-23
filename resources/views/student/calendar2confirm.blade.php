@extends('layouts.appstudent')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../../student/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../student/css/app-light.css" id="lightTheme">
     <link rel="stylesheet" href="../student/css/app-dark.css" id="darkTheme" disabled>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <h5 class="card-title">ตารางการนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษา</h5>


        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
                <div class="col">
                  {{-- <a href="/studenthome/calendar2" class="btn btn-success" ><span class="fe fe-filter fe-16 text-muted"></span>ย้อมกลับ</a> --}}
                </div>
              </div>
              <i class=""></i>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</button> --}}
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
              <th>อาจารย์นิเทศ</th>
             
              <th>รับทราบและยืนยันเวลานัดนิเทศ</th>
              <th>ขอเปลี่ยนเวลานัดนิเทศ</th>
             
              <th>ยืนยันข้อมูล</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $row)
            <tr>
              <td>{{$events->firstItem()+$loop->index}}</td>
              <td>{{$row->title}}</td>
              <td></td>
              <td></td>
              <td class="text-danger">{{$row->Status}}</td>
              <td>{{$row->name2}}</td>
            
              <td><a href="/studenthome/calendar2confirmedit/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-solid fa-pen-to-square fe-16"></a></td>
              {{-- <td><a  href="/studenthome/deleteinformdetails/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
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
