@extends('dashboard.master')
@section('body')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                    <h5 class="card-title">Quản lý đặt hàng</h5>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order</li>
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tất cả</span></a> </li>
                                <li class="nav-item"> <a class="nav-link"  href="{{'/admin/dashboard/order/pending'}}" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Chờ duyệt</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <button type="submit" class="btn btn-primary"><a href="{{route('createProduct')}}" style="color:white";>Create New</a></button>
                                        
                                                <div class="table-responsive">
                                                    <table id="zero_config" class="table table-striped table-bordered">
                                                
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Phương thức</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Trạng thái</th>
                                                            <th>Change</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach($orders as $order)
                                                                <tr>
                                                                    <td>{{$order->id}}</td>
                                                                    <td>{{$order->name}}</td>
                                                                    <td>{{$order->payment_method}}</td>
                                                                    @if($order->discount_code_id != null)
                                                                        <td>{{number_format((($order->orderDetails->sum('total')) - (($order->orderDetails->sum('total') * $order->discountcode->discount)/100)))}} VNĐ</td>
                                                                    @else
                                                                        <td>{{number_format($order->orderDetails->sum('total'))}} VNĐ</td>
                                                                    @endif
                                                           
                                                                    @if($order->status == 'delivered')
                                                                        <td>Đã Giao</td>
                                                                    @endif

                                                                    @if($order->status == 'Approved')
                                                                        <td>Chưa Giao</td>
                                                                    @endif

                                                                    @if($order->status == 'Pending')
                                                                        <td>Chưa duyệt</td>
                                                                    @endif
                                                                    <td>
                                                                            <button type="submit" class="btn btn-success"> <a href="order/{{ $order->id }}" style="color:white;">Detail</a></button>
                                                                            
                                                                    </td>
                                                                </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Phương thức</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Trạng thái</th>
                                                            <th>Change</th>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            </div>
                                        </div>
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
@endsection