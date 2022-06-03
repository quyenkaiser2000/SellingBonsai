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
                    <div class="col-md-12">
                        <div class="card ">
                            <form class="form-horizontal row " action="{{$product->id}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-5">
                                        <div class="card-body">
                                            <h4 class="card-title">Sản phẩm</h4>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                                <div class="col-sm-9">
                                                    <input id="name" placeholder="tên sản phẩm" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <label for="product_category_id" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                            <div class="col-sm-9">
                                                <select  class="custom-select" name="product_category_id" id="product_category_id"  >
                                                    <option selected  value="">{{$product->ProductCategory->name}}</option>
                                                    @foreach($productcategories as $productcategory)
                                                        <option>{{$productcategory->name}}</option>
                                                        
                                                    @endforeach
                                                    
                                                </select>
                                                
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label for="brand_id" class="col-sm-3 text-right control-label col-form-label">Tên thương hiệu</label>
                                        <div class="col-sm-9">
                                            <select   class="custom-select" name="brand_id" id="brand_id"  >
                                                <option selected  value="">{{$product->Brand->name}}</option>
                                                @foreach($brands as $brand)
                                                    <option>{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thông tin chi tiết</label>
                                            <div class="col-sm-9">
                                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description" autofocus>{{$product->description}}</textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                            <div class="col-sm-9">
                                                <input id="qty" placeholder="Số lượng" type="text" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{$product->qty}}" required autocomplete="qty" autofocus>
                                                @error('qty')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                            <div class="col-sm-9">
                                                <input id="price" placeholder="Price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$product->price}}" required autocomplete="price" autofocus>

                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giảm giá</label>
                                            <div class="col-sm-9">
                                                <input id="discount" placeholder="giảm giá" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{$product->discount}}" required autocomplete="discount" autofocus>

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
                                            @if($product2s0->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" required>


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg" placeholder="First Name Here" value="{{$product2s0->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s0->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s0->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s1->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg1" placeholder="First Name Here" value="{{$product2s1->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s1->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s1->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s2->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img2" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg2" placeholder="First Name Here" value="{{$product2s2->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s2->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s2->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s3->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img3" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg3" placeholder="First Name Here" value="{{$product2s3->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s3->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s3->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s4->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img4" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg4" placeholder="First Name Here" value="{{$product2s4->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s4->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s4->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s5->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img5" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg5" placeholder="First Name Here" value="{{$product2s5->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s5->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s5->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif
                                            @if($product2s6->img == null)
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                    <input type="file" name="img6" class="form-control-file" id="exampleFormControlFile1">


                                                                    <input style="opacity:0;height: 0px; width: 0px; position: absolute; top: 20%; left: 15%;" type="text" class="form-control "  name="id-productimg6" placeholder="First Name Here" value="{{$product2s6->id}}">
                                           
                                                                   
                                                        
                                                        </div>
                                                    </div> 
                                            @else    
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                                    <button data-id="{{$product2s6->id}}" id="deletebtn" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:1;">Delete</button>               
                                                                    
                                                                    <label >
                                                                        <img  src="{{asset('/storage/Linkimageproduct/'.$product2s6->img)}}" class="img-fluid" alt="" style="width: 200px;height:200px">
                                                                        
                                                                    </label>
                                                                    
                                                        
                                                        </div>
                                                    </div>  
                                            @endif

                                        </div>
                                    </div>
                                    
                       
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary"><a href="{{'/user/kygui'}}" style="color:white;">Back</a></button>
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
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection