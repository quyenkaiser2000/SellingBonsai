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
                        <h4 class="page-title">Dashboard</h4>
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
            
            <div class="card">
                            <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tất cả</span></a> </li>
                    <li class="nav-item"> <a class="nav-link"  href="{{'/user/kygui/active'}}" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đang hoạt động</span></a> </li>
                    <li class="nav-item"> <a class="nav-link"  href="{{'/user/kygui/browser'}}" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đang duyệt</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="p-20">
                            <div class="card">
                                <div class="card-body">
                                    
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
                                                        <tr>
                                                            <td>{{$product->name}}</td>
                                                            <td>{{$product->Brand->name}}</td>
                                                            <td>{{$product->ProductCategory->name}}</td>
                                                            <td>{{$product->qty}}</td>
                                                            <td>{{$product->price}}</td>
                                                            <td>
                                                                    <button type="submit" class="btn btn-success"> <a href="kygui/detail/{{ $product->id }}" style="color:white;">Detail</a></button>
                                                                    <button type="submit" class="btn btn-success"> <a href="/user/kygui/update/{{ $product->id }}" style="color:white;">Edit</a></button>
                                                                    <button type="submit" class="btn btn-danger"> <a href="/user/kygui/delete/{{ $product->id }}" style="color:white;">Delete</a></button>
                                                                    
                                                            </td>
                                                        </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                    </div>

                                </div>
                            </div>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @endsection