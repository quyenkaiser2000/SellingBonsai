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
                                    <li class="breadcrumb-item"><a href="/admin/dashboard/ProductCategory">Loại sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update</li>
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
                            <form class="form-horizontal col-md-10" action="{{$productCategory->id}}" enctype="multipart/form-data" method="post">
                                @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Loại sản phẩm</h4>
                                                <div class="form-group row">
                                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên Loại sản phẩm </label>
                                                    <div class="col-sm-9">
                                                        <input id="name" placeholder="Tên loại sản phẩm" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$productCategory->name}}" required autocomplete="name" autofocus>

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    @if($productCategory->img == null)
                                                            <div class="form-group col-md-6">
                                                                <div class="form-group">
                                                                            <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">


                                                                            <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg" placeholder="First Name Here" value="{{$productCategory ->id}}">
                                                
                                                                        
                                                                
                                                                </div>
                                                            </div> 
                                                    @else    
                                                            <div class="form-group col-md-6">
                                                                <div class="form-group">
                                                                            <button data-id="{{$productCategory->id}}" id="deletebtn_category" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                            
                                                                            <label >
                                                                                <img  src="{{asset('/storage/Linkimageproduct/'.$productCategory->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                                
                                                                            </label>
                                                                            
                                                                
                                                                </div>
                                                            </div>  
                                                    @endif
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