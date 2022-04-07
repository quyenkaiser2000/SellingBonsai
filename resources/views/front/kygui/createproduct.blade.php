@extends('front.kygui..master')
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
                        <h4 class="page-title">Create Product </h4>
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
                        <form class="form-horizontal row" action="{{ route('createkygui') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-5">

                                    <div class="card-body">
                                        <h4 class="card-title">Product Info</h4>

                                            <div class="form-group row">
                                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                                <div class="col-sm-9">
                                                    <input id="name" placeholder="tên sản phẩm" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @if(session()->has('errorname'))
                                                        <div class="alert alert-primary">
                                                            {{ session()->get('errorname') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Chi tiết </label>
                                                <div class="col-sm-9">
                                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                    
                                            <div class="form-group row">
                                                <label for="product_category_id" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select" name="product_category_id" aria-describedby="validationServer04Feedback" required>
                                                        <option selected disabled value=""></option>
                                                        @foreach($productcategories as $productcategory)
                                                            <option>{{$productcategory->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="brand_id" class="col-sm-3 text-right control-label col-form-label">Tên thương hiệu</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select" name="brand_id" id="brand_id" aria-describedby="validationServer05Feedback" required>
                                                        <option selected disabled value=""></option>
                                                        @foreach($brands as $brand)
                                                            <option>{{$brand->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="price" class="col-sm-3 text-right control-label col-form-label">Giá  </label>
                                                <div class="col-sm-9">
                                                <input id="price" placeholder="Price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="qty" class="col-sm-3 text-right control-label col-form-label">Số lượng  </label>
                                                <div class="col-sm-9">
                                                <input id="qty" placeholder="Số lượng" type="text" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ old('qty') }}" required autocomplete="qty" autofocus>

                                                    @error('qty')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="discount" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                                <div class="col-sm-9">
                                                <input id="discount" placeholder="giảm giá" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" required autocomplete="discount" autofocus>

                                                    @error('discount')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                        <div class="col-md-7">

                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 1</label>
                                                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 2</label>
                                                    <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 3</label>
                                                    <input type="file" name="img2" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 4</label>
                                                    <input type="file" name="img3" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 5</label>
                                                    <input type="file" name="img4" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 6</label>
                                                    <input type="file" name="img5" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Nhấn chọn hình 7</label>
                                                    <input type="file" name="img6" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    
                                <div class="border-top">
                                    <div class="card-body">
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