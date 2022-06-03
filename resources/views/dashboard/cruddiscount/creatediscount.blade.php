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
                                    <li class="breadcrumb-item"><a href="/admin/dashboard/discount">Giảm giá</a></li>
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
                        <form class="form-horizontal col-md-10" action="{{'/admin/dashboard/discount/Create'}}" method="post">
                                @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Discount Info</h4>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên mã giảm</label>
                                            <div class="col-sm-9">
                                                <input id="name" placeholder="Tên mã giảm"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 text-right control-label col-form-label">Chi tiết</label>
                                            <div class="col-sm-9">
                                                <input id="description" placeholder="Chi tiết"  type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="discount" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                            <div class="col-sm-9">
                                                <input id="discount" placeholder="Giảm giá"  type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="" required autocomplete="discount" autofocus>

                                                @error('discount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                            </div>
                                        </div><div class="form-group row">
                                            <label for="discount" class="col-sm-3 text-right control-label col-form-label">Code Discount</label>
                                            <div class="col-sm-9">
                                                <input id="code" placeholder="Code"  type="text" class="form-control @error('discount') is-invalid @enderror" name="code" value="" required autocomplete="code" autofocus>

                                                @error('code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection