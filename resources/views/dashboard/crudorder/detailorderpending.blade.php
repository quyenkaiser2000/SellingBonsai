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
                        <h4 class="page-title">Invoice</h4>
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
                        <div class="card card-body printableArea">
                            <h3>Thông tin đặt hàng</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                            <h3><b class="text-danger">Thông tin khách hàng</b></h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tên:</lable>
                                                    <span>{{$order->name}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Địa chỉ:</lable>
                                                    <span>{{$order->address}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email:</lable>
                                                    <span>{{$order->email}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>SĐT:</lable>
                                                    <span>{{$order->phone}}</span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th class="text-right">Số lượng</th>
                                                    <th class="text-right">Đơn giá</th>
                                                    <th class="text-right">Tổng tiền</th>
                                                    <th class="text-right">Phương thức</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orderdetails as $orderdetail)
                                                    <tr>
                                                        <td>{{$orderdetail->product->name}}</td>
                                                        <td class="text-right">{{$orderdetail->qty}} </td>
                                                        <td class="text-right">{{number_format($orderdetail->amount)}} VNĐ</td>
                                                        <td class="text-right">{{number_format($orderdetail->total)}} VNĐ</td>
                                                        <td class="text-right">{{$order->payment_method}}</td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: {{number_format($orderdetails->sum('total'))}} VNĐ</p>
                                        <p>Ship Free: 00.0 VNĐ</p>
                                        <p>Discount Code: {{number_format((($order->orderDetails->sum('total') * $order->discountcode->discount)/100))}} VNĐ</p>
                                        <hr>
                                        <h3><b>Total :</b> {{number_format((($order->orderDetails->sum('total')) - (($order->orderDetails->sum('total') * $order->discountcode->discount)/100)))}} VNĐ</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        @if($order->status == 'Approved')
                                            <button class="btn btn-danger" type="submit"> <a href="/admin/dashboard/order/{{$order->id}}/pay" style="color:white;">Thanh toán</a> </button>
                                        @endif
                                        @if($order->status == 'delivered')
                                            <span class="" style="    padding: 10px 13px;background-color: #27a9e3;border-radius: 5px;color:white;">Đã giao</span>
                                        @endif
                                        @if($order->status == 'Pending')
                                            <button class="btn btn-danger" type="submit"> <a href="/admin/dashboard/order/{{$order->id}}/browse" style="color:white;">Duyệt đơn</a> </button>
                                            <button class="btn btn-danger" type="submit"> <a href="/admin/dashboard/order/delete/{{$order->id}}" style="color:white;">Hủy đơn</a> </button>

                                        @endif
                                        <button class="btn btn-primary" type="submit"> <a href="/admin/dashboard/order/pending" style="color:white;">Back</a> </button>
                                        
                                    </div>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
@endsection