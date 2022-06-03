@extends('front.layout.master')
@section('title','Home')
@section('body')
    <div class="hero-slider-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  hero slider wrapper  =======-->
                    
                    <div class="hero-slider-wrapper">
                        <div class="ht-slick-slider"
                        data-slick-setting='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": false,
                            "dots": true,
                            "autoplay": true,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "fade": true
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                            {"breakpoint":991, "settings": {"slidesToShow": 1} },
                            {"breakpoint":767, "settings": {"slidesToShow": 1} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1} }
                        ]'
                        >

                            <!--=======  single slider item  =======-->
                            
                            <div class="single-slider-item">
                            <div class="hero-slider-item-wrapper hero-slider-bg-1" style="background-image: url('storage/Linkimageproduct/banner-index2.jpg');">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">Những Loại Cây</p>
                                        <p class="slider-title slider-title--big-bold">Sự Tươi Mát</p>
                                        <p class="slider-title slider-title--big-light">Cho Ngôi Nhà</p>
                                        <a class="theme-button hero-slider-button" href="{{'shop/listproduct'}}">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!--=======  End of single slider item  =======-->

                            <!--=======  single slider item  =======-->
                            
                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper hero-slider-bg-2" style="background-image: url('storage/Linkimageproduct/banner-index.jpg');">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">Shop Alula</p>
                                        <p class="slider-title slider-title--big-bold">Chợ Thực Vật</p>
                                        <p class="slider-title slider-title--big-light">Ngôi Nhà Xanh</p>
                                        <a class="theme-button hero-slider-button" href="{{'shop/listproduct'}}">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!--=======  End of single slider item  =======-->

                            <!--=======  single slider item  =======-->
                            
                            <div class="single-slider-item">
                                <div class="hero-slider-item-wrapper hero-slider-bg-3" style="background-image: url('storage/Linkimageproduct/banner-index1.jpg');">
                                    <div class="hero-slider-content pl-60 pl-sm-30">
                                        <p class="slider-title slider-title--small">Mọi Ngày</p>
                                        <p class="slider-title slider-title--big-bold">Giảm Giá Lớn</p>
                                        <p class="slider-title slider-title--big-light">Trên 10%</p>
                                        <a class="theme-button hero-slider-button" href="{{'shop/listproduct'}}">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!--=======  End of single slider item  =======-->

                        </div>
                    </div>
                    
                    <!--=======  End of hero slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of hero slider area  ====================-->

    <!--====================  split banner area ====================-->
    
    <div class="split-banner-area mb-40 mb-sm-30">
        <div class="container">
            <div class="row row-5">
                @foreach($products as $product)
                    <div class="col-md-6 mb-sm-10">
                        <!--=======  single split banner  =======-->
                        
                        <div class="single-split-banner">
                            <div class="single-split-banner__image">
                                <a href="{{'shop/Product/'.$product->id}}">
                                    <img src="{{asset('/storage/Linkimageproduct/'.$product->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 100%;height:600px">
                                    <div class="single-split-banner__image__content">
                                        <p class="split-banner-title split-banner-title--light" style="color:red">New</p>
                                        <p class="split-banner-title split-banner-title--bold" style="color: #333333ed;">{{$product->name}}</p>
                                        <p class="split-banner-title split-banner-title--price">from <span class="amount">{{number_format($product->price)}} VNĐ</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <!--=======  End of single split banner  =======-->
                    </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    
    <!--====================  End of split banner area  ====================-->
    <!--====================  product single row counter slider area ====================-->

    <div class="product-single-row-slider-area mb-40">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title mb-20">
                        <h2>KHUYẾN MÃI MỖI NGÀY</h2>
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>

                <div class="col-lg-5">
                   
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  product single row slider wrapper  =======-->
                    
                    <div class="product-single-row-slider-wrapper">
                        <div class="ht-slick-slider"
                        data-slick-setting='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "infinite": false,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >
                        
                            <!--=======  single slider product  =======-->
                            @foreach($newproducts as $newproduct)
                                @if($newproduct->discount != null)
                                
                                    <div class="single-slider-product-wrapper">
                                        <div class="single-slider-product">
                                            <div class="single-slider-product__image">
                                                <a href="{{'shop/Product/'.$newproduct->id}}">
                                                    <img src="{{asset('/storage/Linkimageproduct/'.$newproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width:263px;height:263px;">
                                                    <img src="{{asset('/storage/Linkimageproduct/'.$newproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width:263px;height:263px;">
                                                </a>

                                                <span class="discount-label discount-label--green">-{{$newproduct->discount}}%</span>

                                                <div class="hover-icons">
                                                    <ul>
                                                        <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="single-slider-product__content">
                                                <p class="product-title"><a href="single-product.html">{{$newproduct->name}}</a></p>
                                                <div class="rating">
                                                @if(count($newproduct->productcomments) == 0)
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>

                                                @else
                                                    @for($i=1;$i<=5;$i++) 
                                                        @if($i <= (($newproduct->productcomments->sum('rating'))/(count($newproduct->productcomments))) )
                                                            <i class="ion-android-star active"></i>

                                                        @else

                                                            <i class="ion-android-star"></i>

                                                        @endif
                                                    @endfor
                                                @endif
                                                </div>
                                                <p class="product-price"><span class="discounted-price">{{number_format($newproduct->price - (($newproduct->discount * $newproduct->price)/100))}} VNĐ</span><span class="main-price discounted">{{number_format($newproduct->price)}}</span></p>
            
                                                <span class="cart-icon"><a href="./cart/add/{{$newproduct->id}}"><i class="icon-shopping-cart"></i></a></span>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                                
                            @endforeach
                            
                            
                            <!--=======  End of single slider product  =======-->

                            <!--=======  single slider product  =======-->
                            
                            
                            
                            <!--=======  End of single slider product  =======-->


                        </div>
                    </div>
                    
                    <!--=======  End of product single row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of product single row counter slider area  ====================-->
    <!--====================  full banner area ====================-->
    
    <div class="full-banner-area mb-40 mb-md-10 mb-sm-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 mb-md-30 mb-sm-30">
                    <!--=======  full banner content  =======-->
                    
                    <div class="full-banner__content">
                        <h5>special offer</h5>
                        <h3>SUCCULENT GARDEN</h3>

                        <p>Từ vật liệu trồng cây đến các lựa chọn kiểu dáng, hãy khám phá chậu cây nào phù hợp nhất với không gian của bạn.</p>

                        <a href="/shop/listproduct" class="theme-button theme-button--outline banner-button">Explore The Shop</a>
                    </div>
                    <!--=======  End of full banner content  =======-->
                </div>
                <div class="col-xl-8 col-lg-7 text-center text-lg-right mb-md-30 mb-sm-30">
                    <!--=======  full banner image  =======-->
                    <div class="full-banner__image">
                        <a href="shop-left-sidebar.html">
                            <img src="storage/Linkimageproduct/banner-big1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    
                    <!--=======  End of full banner image  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of full banner area  ====================-->
    <!--====================  banner with double row slider ====================-->

    <div class="banner-double-row-slider-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title mb-20">
                        <h2>SẢN PHẨM MỚI</h2>
                    </div>
                    
                    <!--=======  End of section title  =======-->
                </div>
            </div>

            <div class="row row-10">
                <div class="col-custom-5 mb-sm-30">
                    <!--=======  slider banner area  =======-->
                    
                    <div class="slider-banner">
                        <a href="{{'shop/Product/'.$bannernewproducts->id}}">
                            <img src="{{asset('/storage/Linkimageproduct/'.$bannernewproducts->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 432px;height:694px">
                     
                        </a>
                    </div>
                    
                    <!--=======  End of slider banner area  =======-->
                </div>
                <div class="col-custom-7">
                    <!--=======  product double row slider wrapper  =======-->
                    
                    <div class="product-double-row-slider-wrapper">
                        <div class="ht-slick-slider"
                        data-slick-setting='{
                            "slidesToShow": 3,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": true,
                            "rows": 2,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >
                        
                        @foreach($newproducts as $newproduct)
                            <div class="single-slider-product-wrapper">
                                <div class="single-slider-product">
                                    <div class="single-slider-product__image">
                                        <a href="{{'shop/Product/'.$newproduct->id}}">
                                            <img src="{{asset('/storage/Linkimageproduct/'.$newproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 600px;height:225px">
                                            <img src="{{asset('/storage/Linkimageproduct/'.$newproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 600px;height:225px">
                                        </a>
                                        @if($newproduct->discount != null)
                                            <span class="discount-label discount-label--green">-{{$newproduct->discount}}%</span>
                                        @endif
                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="single-slider-product__content">
                                        <p class="product-title"><a href="single-product.html">{{$newproduct->name}}</a></p>
                                        <div class="rating">
                                        @if(count($newproduct->productcomments) == 0)
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>

                                                @else
                                                    @for($i=1;$i<=5;$i++) 
                                                        @if($i <= (($newproduct->productcomments->sum('rating'))/(count($newproduct->productcomments))) )
                                                            <i class="ion-android-star active"></i>

                                                        @else

                                                            <i class="ion-android-star"></i>

                                                        @endif
                                                    @endfor
                                                @endif
                                        </div>
                                        <p class="product-price">
                                            <span class="discounted-price">{{number_format($newproduct->price - (($newproduct->discount * $newproduct->price)/100))}} VNĐ</span>
                                            <span class="main-price discounted" style="display:block;">{{number_format($newproduct->price)}}</span>
                                        </p>

    
                                        <span class="cart-icon"><a href="./cart/add/{{$newproduct->id}}"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>

                            </div>
                        @endforeach  
                            
                        </div>
                    </div>
                    
                    <!--=======  End of product double row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of banner with double row slider  ====================-->
    <!--====================  icon feature area ====================-->

    <div class="icon-feature-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  icon feature wrapper  =======-->
                    
                    <div class="icon-feature-wrapper">
                        <div class="row row-5">
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->
                                
                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="front/img/icons/free_shipping.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Free Shipping</p>
                                        <p class="feature-text">Free shipping on order</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->
                                
                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="front/img/icons/support247.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Support 24/7</p>
                                        <p class="feature-text">Contact us 24 hrs a day</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->
                                
                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="front/img/icons/moneyback.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">100% Money Back</p>
                                        <p class="feature-text">You’ve 30 days to Return</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single icon feature  =======-->
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6">
                                <!--=======  single icon feature  =======-->
                                
                                <div class="single-icon-feature">
                                    <div class="single-icon-feature__icon">
                                        <img src="front/img/icons/payment_secure.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="single-icon-feature__content">
                                        <p class="feature-title">Payment Secure</p>
                                        <p class="feature-text">100% secure payment</p>
                                    </div>
                                </div>
                                
                                <!--=======  End of single icon feature  =======-->
                            </div>
                        </div>
                    </div>
                    
                    <!--=======  End of icon feature wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of icon feature area  ====================-->
    <!--====================  category area ====================-->
    
    <div class="category-area mb-40">
        <div class="container">
            <!--=======  section title  =======-->
                    
            <div class="section-title mb-20">
                <h2>LOẠI SẢN PHẨM ĐẶC TRƯNG</h2>
            </div>
            
            <!--=======  End of section title  =======-->

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  category slider wrapper  =======-->
                    
                    <div class="category-slider-wrapper-one">
                            <div class="ht-slick-slider"
                            data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "dots": false,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000
                            }'
                            data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'
                            >

                            <!--=======  single category item  =======-->
                            @foreach($productcategory as $productcategory)
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="/shop/Category/{{$productcategory->name}}">
                                            <img src="{{asset('/storage/Linkimageproduct/'.$productcategory->img)}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="single-category-item__image__content">
                                            <h5 class="category-title"><a href="shop-left-sidebar.html">{{$productcategory->name}}</a></h5>
                                            
                                                    <p class="quantity">{{count($productcategory->products)}} Sản phẩm</p>
                                                
                                        </div>
                                    </div>
                                </div>
                            @endforeach 

                            </div>

                    </div>
                    
                    <!--=======  End of category slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of category area  ====================-->
    <!--====================  blog post slider area ====================-->
    
    
    
    <!--====================  End of blog post slider area  ====================-->
    <!--====================  brand logo slider area ====================-->
    
    <div class="brand-logo-slider-area mb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!--=======  brand logo slider wrapper  =======-->
                    
                    <div class="brand-logo-slider-wrapper brand-logo-slider-wrapper--double-border">
                        <div class="ht-slick-slider"
                        data-slick-setting='{
                            "slidesToShow": 5,
                            "slidesToScroll": 1,
                            "dots": false,
                            "autoplay": false,
                            "autoplaySpeed": 5000,
                            "speed": 1000,
                            "arrows": false,
                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1501, "settings": {"slidesToShow": 5} },
                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                        ]'
                        >

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand1.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand4.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand5.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                            <!--=======  single brand logo  =======-->
                            
                            <div class="single-brand-logo">
                                <a href="#">
                                    <img src="front/img/brands/brand1.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            
                            <!--=======  End of single brand logo  =======-->

                        </div>
                    </div>
                    
                    <!--=======  End of brand logo slider wrapper  =======-->

                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of brand logo slider area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  newsletter wrapper  =======-->
                    
                    <div class="newsletter-wrapper newsletter-bg-1" style="background-image: url('/storage/Linkimageproduct/newsletter1.jpg');">
                        <div class="newsletter-wrapper__text">
                            <h5>TẠO TÀI KHOẢN NHANH THÔI NÀO !</h5>
                            <p>...Nhận Ngay VOUCHER từ chúng tôi.</p>
                        </div>
                        <div class="newsletter-wrapper__form">
                            <form id="mc-form" class="mc-form">
                                    <button type="button" onclick="window.location='/login'">ĐĂNG KÝ</button>
                            </form>

                            <!-- mailchimp-alerts Start -->

							<div class="mailchimp-alerts mt-5 mb-5">
								<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
								<div class="mailchimp-success"></div><!-- mailchimp-success end -->
								<div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                            
                        </div>
                    </div>
                    
                    <!--=======  End of newsletter wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of newsletter area  ====================-->
    <!--====================  footer area ====================-->x
 @endsection