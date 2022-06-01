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
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                        <form class="form-horizontal col-md-10" action="{{ route('createUser') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create User </h4>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Họ Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="First Name Here">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"type="text" name="address" class="form-control" id="address" placeholder="address here"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="birthday" class="col-sm-3 text-right control-label col-form-label">Ngày sinh </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control date-inputmask" id="birthday" name="birthday" placeholder="Enter Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                        <div class="col-md-9" style="display:flex;">
                                            <div class="custom-control custom-radio "style="margin-right: 20px;">
                                                <input type="radio" class="custom-control-input" value="Nam" id="customControlValidation1" name="gender">
                                                <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" value="Nữ" id="customControlValidation2" name="gender" >
                                                <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Select product image</label>
                                            <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary"><a href="{{route('user')}}" style="color:white;">Back</a></button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        

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