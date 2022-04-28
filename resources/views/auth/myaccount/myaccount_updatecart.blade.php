
@extends('auth.myaccount.master')
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
                            <li class="has-child"><a href="">Home</a></li>
                            <li class="has-child"><a href="user/myaccount">My Account</a></li>
                            <li class="has-child"><a href="user/myaccount/order">My Order</a></li>
                            <li>Detail</li>
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
                            @if(count($orderdetails) > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderdetails as $orderdetail)
                                            
                                            <tr>
                                                <td class="pro-thumbnail"><a href="single-product.html"><img src="{{asset('/storage/Linkimageproduct/'.$orderdetail->product->productImage[0]->img)}}" class="img-fluid" alt="Product"></a></td>
                                                <td class="pro-title"><a href="single-product.html">{{$orderdetail->product->name}}</a></td>
                                                <td class="pro-price"><span>{{number_format($orderdetail->amount)}} VNĐ</span></td>
                                                <td class="pro-quantity"><div class="pro-qty"><input type="text" value="{{$orderdetail->qty}}" data-id="{{$orderdetail->id}}"></div></td> 
                                                <td class="pro-subtotal"><span>{{number_format($orderdetail->amount * $orderdetail->qty)}} VNĐ</span></td> 
                                                <td class="pro-remove"><a href="user/myaccount/order/detail/delete/{{$orderdetail->id}}"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            @else
                                <h4>Giỏ hàng trống</h4>
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
                                <h4>Discount Coupon Code</h4>
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            @if($discountcode != null )
                                                <input type="text" name="code" placeholder="Coupon Code" value="{{$orderdetail_firt->order->discountcode->code}}" style="text-transform: uppercase;">
                                             
                                            @else
                                                <input type="text" name="code" placeholder="Coupon Code" value="{{request('code')}}" style="text-transform: uppercase;">
                                                
                                            @endif
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
                                    <h4>Cart Summary</h4>
                                    
                                    <p>Sub Total <span>{{number_format($orderdetails->sum('total'))}} VNĐ</span></p>
                                    <p>Shipping Cost <span>$00.00</span></p>
                                    @if($discountcode != null)
                                        <p>Discount Code <span>{{number_format(($discountcode / 100) * $orderdetails->sum('total'))}} VNĐ</span></p>
                                    @else
                                        <p>Discount Code <span>00 VNĐ</span></p>
                                    @endif
                                    <h2>Grand Total <span>{{number_format(($orderdetails->sum('total')) - ($discountcode / 100) * $orderdetails->sum('total'))}} VNĐ</span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <button class="checkout-btn" onclick="window.location='user/myaccount/order'">Update Cart</button>
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