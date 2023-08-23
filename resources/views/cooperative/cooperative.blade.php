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
        
        
         <!-- Bootstrap CSS-->
    {{-- <link rel="stylesheet" href="http://coop.uru.ac.th/vendor/bootstrap/css/bootstrap.min.css"> --}}
    <!-- Font Awesome CSS-->

   
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
    
   
    
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
              <li><a href="/" class="nav-link px-2 text-secondary">หน้าแรก</a></li>
              <li><a href="/establishment" class="nav-link px-2 text-white">สถานประกอบการ</a></li>
              <li><a href="/cooperative" class="nav-link px-2 text-white">แบบฟอร์มสหกิจ</a></li>
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

              <a type="button" href="{{ route('register1') }}" class="btn btn-outline-warning me-2">สมัครสมาชิก</a>
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

      <div class="col-sm-12   ">
                        

        <h3 class="mt-4 " >แบบฟอร์มสหกิจ</h3>
        <ul id="pills-tab" role="tablist" class="nav nav-pills nav-justified ">
            <li class="nav-item"><a id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" class="nav-link active show bg-dark ">สำหรับนักศึกษา</a></li>
            <li class="nav-item"><a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" class="nav-link bg-dark">สำหรับอาจารย์นิเทศ</a></li>
            <li class="nav-item"><a id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" class="nav-link bg-dark">สำหรับสถานประกอบการ</a></li>
        </ul>
        <div id="pills-tabContent" class="tab-content ">
            <div id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" class="tab-pane fade active show">
                <div class="table-responsive ">
                    <table class="table table table-striped table-hover    ">
                        <thead>
                            <tr class="">
                                <th>#</th>
                                <th>ชื่อฟอร์ม</th>
                                <th class="text-center">ดาวน์โหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                                                                                    <tr>
                                    <th scope="row">1</th>
                                        <td>สก. 01 แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/ELxRUjH670.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">2</th>
                                        <td>สก.03 ใบสมัครงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/lp4vXntPVs.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">3</th>
                                        <td>สก 04 แบบคำขอหนักงสือขอความอนุเคราะห์รับนักศึกษา (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/xg8GeaRk9M.rtf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">4</th>
                                        <td>สก 07 แบบแจ้งรายละเอียดการปฏิบัติงาน (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/UOT4Ubir4z.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">5</th>
                                        <td>สก 08 แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/qk20CahIb1.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">6</th>
                                        <td>สก 09 แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/1gWwtd39C6.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                </tbody>
                    </table>
                    
                </div>
            </div>
            <div id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อฟอร์ม</th>
                                <th>ดาวน์โหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                                                                                    <tr>
                                    <th scope="row">1</th>
                                        <td>สก.10 แบบขออนุญาตการออกนิเทศนักศึกษาสหกิจศึกษา (สำหรับอาจารย์นิเทศสหกิจศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/uOibt17LFm.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">2</th>
                                        <td>สก 15 แบบประเมินรายงานนักศึกษาสหกิจศึกษา (สำหรับอาจารย์นิเทศสหกิจศึกษา)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/9HUj9WzjfU.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                </tbody>
                    </table>
                    
                </div>
            </div>
            <div id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ชื่อฟอร์ม</th>
                                <th>ดาวน์โหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                                                                                    <tr>
                                    <th scope="row">1</th>
                                        <td>สก.13 แบบประเมินผลการปฏิบัติงานนักศึกษาสหกิจศึกษา สำหรับผู้นิเทศงาน (พี่เลี้ยง)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/8FNAYHjoTd.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                        <tr>
                                    <th scope="row">2</th>
                                        <td>สก 14 แบบประเมินรายงานนักศึกษาสหกิจศึกษา สำหรับผู้นิเทศงาน (พี่เลี้ยง)</td>
                                        <td class="text-center"> <a href="http://coop.uru.ac.th/attach/document/Ko7lpKXs9C.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    </tr>
                                                                                </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
        </div>

    {{-- <div class="container-fluid">

                   

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">จัดการประวัติ</h6>
            
<br>
             <form 
    class="d-none d-sm-inline-block form-inline  my-md-0 mw-100 navbar-search   " >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
            &nbsp; &nbsp;
        </div>
        <div class="my-2 text-start"></div>
                        <a  class="btn btn-primary btn-icon-split " href="../Admin/Location/add.php">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </span>
                            <span class="text">เพิ่มข้อมูล</span>
                            <!-- <php echo isset($_GET['pasge']) && $_GET['page'] =='add'?'active':''?>"href="?page=add" -->
                            <!-- href="../Admin/user/edit.php?update_id=<php echo $row["id"]; ?>" -->
                        </a>
    </div>

      </div> 
       </form>   


      <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="1000%" cellspacing="0">
                        <thead>
                                            <tr>
                               
                               
                                <th><i class=""></i>รหัสนักศึกษา</th>
                                 <th><i class="" aria-hidden="true"></i>ชื่อนักศึกษา </th>
                                
                                
                                <th ><i class="" aria-hidden="true"></i>ชื่อหน่วยงาน</th>
                                 <th ><i class="" aria-hidden="true"></i>ชื่อหน่วยงาน</th>
                                <th ><i class="" aria-hidden="true"></i>สาขาวิชาเอก</th>
                                <th ><i class="" aria-hidden="true"></i>คณะ</th>
                                <th ><i class="" aria-hidden="true"></i>รายละเอียดปฏิบัติหน่วยงาน</th>
                                
                                <th><i class="" aria-hidden="true"></i>ตำแหน่ง</th>
<th><i class="" aria-hidden="true"></i>จังหวัด</th>

                               
                               
                               
                                <th>แก้ไขข้อมูล</th>
                                <th>ลบข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>
                   
                            <tr>
                                
                                
                               
                                <td>< </td>
                                <td>&</td>
                                
                               
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td> </td>
                                <td> <a href="../Admin/user/edit.php?update_id=" class="fa fa-pencil btn btn-warning text-center <?php echo isset($_GET['pasge']) && $_GET['page'] =='edit'?'active':''?>"href="?page=edit" aria-hidden="true"></a></td>
                                <!-- <php echo isset($_GET['pasge']) && $_GET['page'] =='user'?'active':''?>"href="?page=edit?update_id=" -->
                                <td> <a href="../Admin/user/del.php?delete_id=" class="fa fa-window-close btn btn-danger text-center <?php echo isset($_GET['pasge']) && $_GET['page'] =='del'?'active':''?>"href="?page=del" aria-hidden="true"></a></td>
                            </tr>
                           
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div> --}}








    <script src="http://coop.uru.ac.th/vendor/jquery/jquery.min.js "></script>
    <script src="http://coop.uru.ac.th/vendor/popper.js/umd/popper.min.js "> </script>
    <script src="http://coop.uru.ac.th/vendor/bootstrap/js/bootstrap.min.js "></script>
    <script src="http://coop.uru.ac.th/vendor/jquery.cookie/jquery.cookie.js "> </script>
    <script src="http://coop.uru.ac.th/vendor/waypoints/lib/jquery.waypoints.min.js "> </script>
    <script src="http://coop.uru.ac.th/vendor/jquery.counterup/jquery.counterup.min.js "> </script>
    <script src="http://coop.uru.ac.th/vendor/owl.carousel/owl.carousel.min.js "></script>
    <script src="http://coop.uru.ac.th/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js "></script>
    <script src="http://coop.uru.ac.th/js/jquery.parallax-1.1.3.js "></script>
    <script src="http://coop.uru.ac.th/vendor/bootstrap-select/js/bootstrap-select.min.js "></script>
    <script src="http://coop.uru.ac.th/vendor/jquery.scrollto/jquery.scrollTo.min.js "></script>
    <script src="http://coop.uru.ac.th/js/front.js "></script>
    <script src="http://coop.uru.ac.th/js/lity.min.js"></script>