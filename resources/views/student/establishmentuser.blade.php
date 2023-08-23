@extends('layouts.appstudent')

@section('content')
@yield('content')



<div class="wrapper">
    
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            
            <div class="row">
              <!-- Striped rows -->
              <div class="col-md-12 my-4">
                <h2 class="h4 mb-1">สถานประกอบการ</h2>
                {{-- <p class="mb-4">Customized table based on Bootstrap with additional elements and more functions</p> --}}
                <div class="card shadow">
                  <div class="card-body">
                    <div class="toolbar row mb-3">
                      <div class="col">
                        <form class="form-inline">
                          <div class="form-row">
                            <div class="form-group col-auto">
                              <label for="search" class="sr-only">Search</label>
                              <input type="text" class="form-control" id="search" value="" placeholder="Search">
                            </div>
                            {{-- <div class="form-group col-auto ml-3">
                              <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Processing</option>
                                <option value="2">Success</option>
                                <option value="3">Pending</option>
                                <option value="3">Hold</option>
                              </select>
                            </div> --}}
                          </div>
                        </form>
                      </div>
                      {{-- <div class="col ml-auto">
                        <div class="dropdown float-right">
                          <button class="btn btn-primary float-right ml-3" type="button">Add more +</button>
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                          <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                            <a class="dropdown-item" href="#">Export</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                    <!-- table -->
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        {{-- <tr role="row">
                          <th colspan="3">Orders</th>
                          <th colspan="4">Billing</th>
                          <th colspan="3">State</th>
                        </tr> --}}
                        <tr role="row">
                          {{-- <th>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="all">
                              <label class="custom-control-label" for="all"></label>
                            </div>
                          </th> --}}
                          <th scope=""style="width:10%">ลำดับ</th>
                          <th scope="">ชื่อสถานประกอบการ</th>
                          <th scope="">จังหวัด</th> 
                          <th style="width:20%">รูปหน่วยงาน</th>
                          <th scope=""style="width:10%">ดูข้อมูล</th>
                         
                          {{-- <th>Total</th>
                          <th>Status</th>
                          <th>Tracking #</th>
                          <th>Action</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @php($i=1) --}}
                        @foreach ($users as $row)
                        <tr>
                          
                          {{-- <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="4574">
                              <label class="custom-control-label" for="4574"></label>
                            </div>
                          </td> --}}
                          {{-- <td>{{$i++}}</td> --}}
                           <td>{{$users->firstItem()+$loop->index}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->address}}</td>
                          <td scope=""><img src="/image/{{ $row->images }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td> 
                           <td><a href="/studenthome/view/{{$row->id}}" class="btn mb btn-outline-success fa-solid fa-eye"></a></td>
                          
                          {{--<td></td>
                          <td></td>
                          <td></td> --}}
                    
                          
                        </tr>
                        
                    
                     
                       
                         
                          @endforeach
                      </tbody>
                    </table>
                   {!!$users->links('pagination::bootstrap-5')!!}
                  </div>
                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                      <ul class="pagination justify-content-end mb-0">
                         
                        {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
                      </ul>
                    </nav>
                  </div>
                </div>
              </div> <!-- simple table -->
            </div> <!-- end section -->
           
            <div class="col-md-4 mb-4">
 
   
      
     
              <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text center" id="varyModalLabel"></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> 
                    <div class="text center ">
                         ss
                      </div>
                      
                    <div class="modal-body">
                     
                     
                      <form method="POST" action="{{ route('register2') }}">
                        @csrf
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">test:</label>
                          <input type="text" name="test" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn mb-2 btn-primary">Send</button>
                    </div></form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

@endsection