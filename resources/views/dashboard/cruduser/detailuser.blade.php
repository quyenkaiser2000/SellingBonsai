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
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/dashboard/User">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                            <form class="form-horizontal col-md-10">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Họ Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here" value="{{$user->name}}">
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
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control">{{$user->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" value="{{$user->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày sinh </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Date" value="{{\Carbon\Carbon::Parse($user->birthday)->format('d/m/Y')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                        <div class="col-md-9" style="display:flex;">
                                            <div class="custom-control custom-radio "style="margin-right: 20px;">
                                                <input type="radio" class="custom-control-input" value="Name" id="customControlValidation1" name="radio-stacked" required {{ ($user->gender=="Nam")? "checked" : "" }}>
                                                <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" value="Nữ" id="customControlValidation2" name="radio-stacked" required {{ ($user->gender=="Nữ")? "checked" : "" }}>
                                                <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" value="{{$user->role->name}}">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary"><a href="{{route('user')}}" style="color:white;">Back</a></button>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        

                    </div>
                    <div class="col-md-6">
                        @if($user->avatar==null)
                                <img src="{{asset('storage/Linkimageproduct/avataradmin.jpg')}}" class="img-fluid" alt="" style="width: 400px;height:400px">
                        @else
                                <img src="{{asset('/storage/Linkimageproduct/'.$user->avatar)}}" class="img-fluid" alt="" style="width: 450px;height:450px">

                        @endif
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