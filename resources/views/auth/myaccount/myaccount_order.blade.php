@extends('front.layout.master')
@section('title','My Account')
@section('body')
    
    <!--====================  End of Header area  ====================-->
    

    <!--====================  breadcrumb area ====================-->
    
    <div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb content  =======-->
                    
                    <div class="breadcrumb-content">
                        <ul>
                            <li class="has-child"><a href="{{'/'}}">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                    
                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of breadcrumb area  ====================-->

    <!--==================== page content ====================-->
    
    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class=" " data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"  class="active"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                                <a href="user/myaccount/update" ><i class="fa fa-map-marker "></i> Account Details</a>

                                <a href="user/myaccount/changepas" ><i class="fa fa-user"></i>Change Password</a>

                                
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade  " id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        
                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade active show" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $i=0 ?>
                                                     @foreach($orders as $order)
                                                     <?php $i++ ?>
                                                         <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$order->name}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td>{{$order->status}}</td>
                                                            @if($order->discount_code_id != null)
                                                                <td>{{number_format((($order->orderDetails->sum('total')) - (($order->orderDetails->sum('total') * $order->discountcode->discount)/100)))}} VNĐ</td>
                                                            @else
                                                                <td>{{number_format($order->orderDetails->sum('total'))}} VNĐ</td>
                                                            @endif
                                                            <td><a href="user/myaccount/order/detail/{{$order->id}}" class="btn">View</a></td>
                                                        </tr>
                                                    @endforeach
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                
                                
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                               
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->
    
@endsection