@extends('dashboard.master')
@section('body')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
                    <div class="col-12">
                        
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quản lý sản phẩm</h5>
                                <button type="submit" class="btn btn-primary"><a href="{{route('createProduct')}}" style="color:white";>Create New</a></button>
                               
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Tên thương hiệu</th>
                                                <th>Loại sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($products as $product)
                                                @if($product->user_id == null)
                                                    <tr>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->Brand->name}}</td>
                                                        <td>{{$product->ProductCategory->name}}</td>
                                                        <td>{{$product->qty}}</td>
                                                        <td>{{$product->price}}</td>
                                                        <td>
                                                                <button type="submit" class="btn btn-success"> <a href="Product/{{ $product->id }}" style="color:white;">Detail</a></button>
                                                                <button type="submit" class="btn btn-success"> <a href="Product/Update/{{ $product->id }}" style="color:white;">Edit</a></button>
                                                                <button type="submit" class="btn btn-danger"> <a href="Product/Delete/{{ $product->id }}" style="color:white;">Delete</a></button>
                                                                
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Tên thương hiệu</th>
                                                <th>Loại sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Change</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
    </div>
@endsection