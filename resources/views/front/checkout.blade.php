@extends('front.layout.master')
@section('title','Check Out')
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
                            <li class="has-child"><a href="index.html">Home</a></li>
                            <li>Checkout</li>
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
                    
                    <!-- Checkout Form s-->
                    <form action="" class="checkout-form" method="post">
                        @csrf
                        @if(Cart::count() > 0)

                            <div class="row row-40">
                                
                                <div class="col-lg-7 mb-20">
                                    
                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-40">
                                        <h4 class="checkout-title">Billing Address</h4>
        
                                        <div class="row">
        
                                            <div class=" col-12 mb-20">
                                                <label>First Name*</label>
                                                <input type="text" placeholder="Name" name="name" required>
                                            </div>
        
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Email Address*</label>
                                                <input type="email" placeholder="Email Address" name="email" required>
                                            </div>
        
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Phone no*</label>
                                                <input type="text" placeholder="Phone number" name="phone" required>
                                            </div>
        
                                            <div class="col-12 mb-20">
                                                <label>Address*</label>
                                                <input type="text" placeholder="Address" name="address" required>
                                            </div>
        
                                            
                                            <div class="col-12 mb-20">
                                                <div class="check-box">
                                                    <input type="checkbox" id="create_account">
                                                    <label for="create_account">Create an Acount?</label>
                                                </div>
                                            
                                            </div>
        
                                        </div>
        
                                    </div>
                                    
                                    <!-- Shipping Address -->
                                    
                                    
                                </div>
                                
                                <div class="col-lg-5">
                                    <div class="row">
                                        
                                        <!-- Cart Total -->
                                        <div class="col-12 mb-60">
                                        
                                            <h4 class="checkout-title">Cart Total</h4>
                                    
                                            <div class="checkout-cart-total">
        
                                                <h4>Product <span>Total</span></h4>
                                                
                                                <ul>
                                                    @foreach($carts as $cart)
                                                        <li>{{$cart->name}} X {{$cart->qty}} <span>{{number_format($cart->price * $cart->qty)}} VNĐ</span></li>

                                                    @endforeach
                                                </ul>
                                                
                                                <p>Sub Total <span>{{number_format($subtotal)}} VNĐ</span></p>
                                                <p>Shipping Fee <span>00.00 VNĐ</span></p>
                                                <p>Discount Code <span>{{number_format($discountcode)}} VNĐ</span></p>
                                                
                                                <h4>Grand Total <span>{{number_format($total)}} VNĐ</span></h4>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Payment Method -->
                                        <div class="col-12">
                                        
                                            <h4 class="checkout-title">Payment Method</h4>
                                    
                                            <div class="checkout-payment-method">
                                                
                                                <div class="single-method">
                                                    <input type="radio" id="payment_check" name="payment_method" value="online_payment">
                                                    <label for="payment_check">Thanh toán trực tuyến</label>
                                                    <p data-method="online_payment">Vui lòng kiểm tra lại đầy đủ thông tin nhận hàng của quý khách</p>
                                                </div>
                                                
                                                <div class="single-method">
                                                    <input type="radio" id="payment_bank" name="payment_method" value="pay_later" checked>
                                                    <label for="payment_bank">Thanh toán khi giao hàng</label>
                                                    <p data-method="pay_later">Vui lòng kiểm tra lại đầy đủ thông tin nhận hàng của quý khách</p>
                                                </div>
                                                
                                                
                                                
                                                <div class="single-method">
                                                    <input type="checkbox" id="accept_terms" checked>
                                                    <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                                </div>
                                                
                                            </div>
                                            
                                            <button class="place-order" type=submit>Place order</button>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        @else

                            <div>
                                <h4>Giỏ hàng trống ???</h4>
                                <a type="text" class="btn btn-primary" onclick="window.location='/shop/listproduct'" style="color:white;">Đặt ngay</a>
                            </div>
                        @endif
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->
    
  @endsection