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
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/dashboard/Product">Order</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                            <h3>Th??ng tin ?????t h??ng</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                            <h3><b class="text-danger">Th??ng tin kh??ch h??ng</b></h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>T??n:</lable>
                                                    <span>{{$order->name}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>?????a ch???:</lable>
                                                    <span>{{$order->address}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email:</lable>
                                                    <span>{{$order->email}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>S??T:</lable>
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
                                                    <th>S???n ph???m</th>
                                                    <th>Ng?????i ????ng</th>
                                                    <th class="text-right">S??? l?????ng</th>
                                                    <th class="text-right">????n gi??</th>
                                                    <th class="text-right">T???ng ti???n</th>
                                                    <th class="text-right">Ph????ng th???c</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orderdetails as $orderdetail)
                                                    <tr>
                                                        <td>{{$orderdetail->product->name}}</td>
                                                        @if($orderdetail->product->user_id == null)
                                                            <td>Admin</td>
                                                        @else
                                                            <td>{{$orderdetail->product->user->name}}</td>
                                                        @endif
                                                        <td class="text-right">{{$orderdetail->qty}} </td>
                                                        <td class="text-right">{{number_format($orderdetail->amount)}} VN??</td>
                                                        <td class="text-right">{{number_format($orderdetail->total)}} VN??</td>
                                                        <td class="text-right">{{$order->payment_method}}</td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: {{number_format($orderdetails->sum('total'))}} VN??</p>
                                        <p>Ship Free: 00.0 VN??</p>
                                        @if($order->discount_code_id != null)
                                            <p>Discount Code: {{number_format((($order->orderDetails->sum('total') * $order->discountcode->discount)/100))}} VN??</p>
                                            <hr>
                                            <h3><b>Total :</b> {{number_format((($order->orderDetails->sum('total')) - (($order->orderDetails->sum('total') * $order->discountcode->discount)/100)))}} VN??</h3>
                                        @else
                                            <p>Discount Code: 00.00 VN??</p>
                                            <hr>
                                            <h3><b>Total :</b> {{number_format($order->orderDetails->sum('total'))}} VN??</h3>
                                            
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        @if($order->status == 'Approved')
                                            <button class="btn btn-danger" type="submit"> <a href="/admin/dashboard/order/{{$order->id}}/pay" style="color:white;">Thanh to??n</a> </button>
                                        @endif
                                        @if($order->status == 'delivered')
                                            <span class="" style="    padding: 10px 13px;background-color: #27a9e3;border-radius: 5px;color:white;">???? giao</span>

                                            

                                        @endif
                                        <button class="btn btn-danger" type="submit"> <a href="/admin/dashboard/order" style="color:white;">Back</a> </button>
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