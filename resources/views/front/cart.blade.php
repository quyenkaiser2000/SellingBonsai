
@extends('front.layout.master')
@section('title','Cart Shop')
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
                            <li>Cart</li>
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
                    <form action="#">				
                        <!--=======  cart table  =======-->
                        
                        <div class="cart-table table-responsive mb-40">
                            @if(Cart::count() > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Hình ảnh</th>
                                            <th class="pro-title">Sản phẩm</th>
                                            <th class="pro-price">Giá</th>
                                            <th class="pro-quantity">Số lượng</th>
                                            <th class="pro-subtotal">Tổng cộng</th>
                                            <th class="pro-remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                            
                                            <tr>
                                                <td class="pro-thumbnail"><a href="single-product.html"><img src="{{asset('/storage/Linkimageproduct/'.$cart->options->images[0]->img)}}" class="img-fluid" alt="Product"></a></td>
                                                <td class="pro-title"><a href="single-product.html">{{$cart->name}}</a></td>
                                                <td class="pro-price"><span>{{number_format($cart->price)}} VNĐ</span></td>
                                                <td class="pro-quantity"><div  class="pro-qty " ><input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}"></div></td> 
                                                <td class="pro-subtotal"><span>{{number_format($cart->price * $cart->qty)}} VNĐ</span></td> 
                                                <td class="pro-remove"><a href="./cart/delete/{{$cart->rowId}}"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            @else
                                <div>
                                    <h4>Giõ hàng trống !!!</h4>
                                </div>
                            @endif
                           
                        </div>
                        
                        <!--=======  End of cart table  =======-->
                        
                        
                    </form>	
                        
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <!--=======  Calculate Shipping  =======-->
                            
                            
                            
                            <!--=======  End of Calculate Shipping  =======-->
                            
                            <!--=======  Discount Coupon  =======-->
                            
                            <div class="discount-coupon">
                                <h4>Mã phiếu giảm giá</h4>
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" name="code" placeholder="Coupon Code" value="{{request('code')}}" style="text-transform: uppercase;">
                                            @if(session()->has('errorcode'))
                                                <div class="alert alert-primary">
                                                    {{ session()->get('errorcode') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Apply Code">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <!--=======  End of Discount Coupon  =======-->
                            
                        </div>

                        
                        <div class="col-lg-6 col-12 d-flex">
                            <!--=======  Cart summery  =======-->
                        
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Chi tiết giỏ hàng</h4>
                                    
                                    <p>Tổng phụ <span>{{number_format($subtotal)}} VNĐ</span></p>
                                    <p>Giá vận chuyển <span>$00.00</span></p>
                                    <p>Mã giảm giá <span>{{number_format($discountcode)}} VNĐ</span></p>
                                    <h2>Tổng cộng <span>{{number_format($total)}} VNĐ</span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <button class="checkout-btn" onclick="window.location='./checkout'">Thanh toán</button>
                                </div>
                            </div>
                        
                            <!--=======  End of Cart summery  =======-->
                            
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->
@endsection