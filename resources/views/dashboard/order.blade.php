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
                    <div class="col-12">
                        
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quản lý đặt hàng</h5>
                                <button type="submit" class="btn btn-primary"><a href="{{route('createProduct')}}" style="color:white";>Create New</a></button>
                               
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên khách hàng</th>
                                                <th>Phương thức</th>
                                                <th>Tổng tiền</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->name}}</td>
                                                        <td>{{$order->payment_method}}</td>
                                                        <td>{{number_format($order->orderDetails->sum('total'))}} VNĐ</td>
                                                        <td>
                                                                <button type="submit" class="btn btn-success"> <a href="order/{{ $order->id }}" style="color:white;">Detail</a></button>
                                                                <button type="submit" class="btn btn-success"> <a href="order/{{ $order->id }}" style="color:white;">Edit</a></button>
                                                                
                                                        </td>
                                                    </tr>
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
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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