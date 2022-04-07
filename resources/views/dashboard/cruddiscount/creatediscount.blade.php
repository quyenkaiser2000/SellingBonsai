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
                        <form class="form-horizontal col-md-10" action="{{'/admin/dashboard/discount/Create'}}" method="post">
                                @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Discount Info</h4>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên mã giảm</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 text-right control-label col-form-label">Chi tiết</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="discount" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" value="" required>
                                            </div>
                                        </div><div class="form-group row">
                                            <label for="discount" class="col-sm-3 text-right control-label col-form-label">Code Discount</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="" required>
                                                @if(session()->has('errorcode'))
                                                    <div class="alert alert-primary">
                                                        {{ session()->get('errorcode') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="start_day" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control mydatepicker" id="" name="start_day" placeholder="mm/dd/yyyy" value="" required>
                                                @if(session()->has('errorstartday'))
                                                    <div class="alert alert-primary">
                                                        {{ session()->get('errorstartday') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="end_day" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control mydatepicker" id="" name="end_day" placeholder="mm/dd/yyyy" value="" required>
                                                @if(session()->has('errorendday'))
                                                    <div class="alert alert-primary">
                                                        {{ session()->get('errorendday') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary"><a href="{{'/admin/dashboard/discount'}}" style="color:white;">Back</a></button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                            </form>
                            
                        </div>
                            
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