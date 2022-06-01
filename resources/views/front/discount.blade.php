@extends('front.layout.master')
@section('title','Discount')
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
                            <li class="has-child"><a href="/">Home</a></li>
                            <li>Discount</li>
                        </ul>
                    </div>
                    
                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div> 
    </div>
    
    <!--====================  End of breadcrumb area  ====================-->

    <!--==================== page content ====================-->
    
    <div class="page-section">
        <!--=============================================
		=            google map container         =
		=============================================-->
		
		
            
        <!--=====  End of google map container  ======-->

        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45 discounts">
                    @foreach($discounts as $discount)
                        <div class="row form-discount">
                            <div class="col-md-6 col-lg-6 col-sm-6 left">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('storage/Linkimageproduct/logo_discount.png')}}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">{{$discount->discount}}%</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 right">
                                <ul>
                                    <li>
                                        <h4>Alula-{{$discount->name}}</h4>
                                    </li>
                                    <li>
                                        <span class="discount_code">Mã: {{$discount->code}}</span>
                                    </li>
                                    <li>
                                        <span>HSD: {{\Carbon\Carbon::Parse($discount->end_day)->format('d/m/Y')}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    

                </div>
                
            </div>
        </div>
    </div>
    
  @endsection