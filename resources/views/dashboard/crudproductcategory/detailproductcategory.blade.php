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
                    <div class="col-md-12">
                        <div class="card">
                        <form class="form-horizontal col-md-10" action="Update/{{$productCategory->id}}" method="post">
                                @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Loại sản phẩm</h4>
                                                <div class="form-group row">
                                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên Loại sản phẩm </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="First Name Here" value="{{$productCategory->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    @if($productCategory->img == null)
                                                        <img  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                                
                                                    @else
                                                        <img src="{{asset('/storage/Linkimageproduct/'.$productCategory->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                    @endif
                                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary"><a href="{{route('productcategory')}}" style="color:white;">Back</a></button>
                                            <button type="submit" class="btn btn-primary">Edit</button>
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