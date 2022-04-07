@extends('dashboard.master')
@section('body')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal col-md-10" action="{{$products->id}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="fname" placeholder="First Name Here" >{{$products->name}} </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên thương hiệu</label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="fname" placeholder="First Name Here" >{{$products->Brand->name}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm </label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="fname" placeholder="First Name Here" >{{$products->ProductCategory->name}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thông tin chi tiết</label>
                                        <div class="col-sm-9">
                                            <span class="form-control">{{$products->description}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="lname" placeholder="" >{{$products->qty}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="lname" placeholder="">{{number_format($products->price)}} VNĐ</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                        <div class="col-sm-9">
                                            <span type="text" class="form-control" id="lname" placeholder="">{{$products->discount}} %</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary"><a href="{{('/admin/dashboard/kygui')}}" style="color:white;">Back</a></button>
                                        @if($products->status != 1)
                                            <button type="submit" class="btn btn-primary">Duyệt</button>
                                            <button type="button" class="btn btn-danger"><a href="/admin/dashboard/kygui/delete/{{ $products->id }}" style="color:white;">Hủy</a></button>

                                        @endif
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        

                    </div>
                    <div class="col-md-6">
                        <div class="card-body row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Họ Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name Here" value="{{$user->name}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row">
                                    <label for="address " class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input  class="form-control" type="text" name="address" id="address"  value="{{$user->address}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{$user->phone}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birthday" class="col-sm-3 text-right control-label col-form-label">Ngày sinh </label>
                                    <div class="col-sm-9">
                                        @if($user->birthday != null)
                                            <input type="text" class="form-control date-inputmask" id="birthday" name="birthday" placeholder="Enter Date" value="{{\Carbon\Carbon::Parse($user->birthday)->format('d/m/Y')}}">
                                        @else
                                            <input type="text" class="form-control date-inputmask" id="birthday" name="birthday" placeholder="Enter Date" value="">
                                    
                                        @endif
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                    <div class="col-md-9" style="display:flex;">
                                        <div class="custom-control custom-radio "style="margin-right: 20px;">
                                            <input type="radio" class="custom-control-input" value="Nam" id="customControlValidation1" name="gender"  {{ ($user->gender=="Nam")? "checked" : "" }}>
                                            <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="Nữ" id="customControlValidation2" name="gender"  {{ ($user->gender=="Nữ")? "checked" : "" }}>
                                            <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-5">
                                @if($user->avatar == null)
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px;max-width: none;margin-left: 33px;">
                                                    

                                        </div>
                                    </div> 
                                @else    
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                                    
                                                    <label >
                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$user->avatar)}}" class="img-fluid" alt="" style="width: 200px;height:200px;max-width: none;margin-left: 33px;">
                                                        
                                                    </label>
                                                    
                                        
                                        </div>
                                    </div>      
                                @endif
                            </div> 
                        </div>
                        </div>
                    <div class="col-md-12">
                        @foreach($product2s as $product2)
                            @if($product2->img == null)
                                <img  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                        
                            @else
                                <img src="{{asset('/storage/Linkimageproduct/'.$product2->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                            @endif
                        @endforeach
                        
                    </div>
                    
                </div>
                <!-- editor -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection