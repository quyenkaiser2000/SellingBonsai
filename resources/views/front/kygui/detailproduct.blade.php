@extends('front.kygui.master')
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
                            <form class="form-horizontal col-md-10">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here" value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên thương hiệu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here" value="{{$product->Brand->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here" value="{{$product->ProductCategory->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thông tin chi tiết</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" value="{{$product->qty}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" value="{{$product->discount}}">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary"><a href="{{'/user/kygui'}}" style="color:white;">Back</a></button>
                                        <button type="button" class="btn btn-primary"><a href="/user/kygui/update/{{ $product->id }}" style="color:white;">Edit</a></button>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        

                    </div>
                    <div class="col-md-6">
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