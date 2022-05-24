<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <base href="{{ asset('/') }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link rel="icon" href="front/img/favicon.ico">

	<!--=============================================
    =            CSS  files       =
    =============================================-->
    
    <!-- Vendor CSS -->
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

    <link href="front/css/vendors.css" rel="stylesheet">
	<!-- Main CSS -->
	<link href="front/css/style.css" rel="stylesheet">
    

</head>

<body style="background-image: none; background-color: white">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css" >
    <script>
	    var botmanWidget = {
	        aboutText: 'ssdsd',
	        introMessage: "✋Say Hi! Tôi sẽ tư vấn giúp bạn và những từ khóa chúng tôi hỗ trợ: Mua hàng, Thông tin cửa hàng, Thanh toán"
	    };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    
    <!--====================  Header area ====================-->
    
    <div class="header-area header-sticky">
        <!--====================  Navigation top ====================-->

        <div class="navigation-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--====================  navigation section ====================-->
                                            
                        <div class="navigation-top-topbar pt-10 pb-10"> 
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 text-center text-md-left">
                                    <!--=======  header top social links  =======-->

                                    <div class="header-top-social-links">
                                        <span class="follow-text mr-15">Follow Us:</span>
                                        <!--=======  social link small  =======-->
                                        
                                        <ul class="social-link-small">
                                            <li><a href="//www.facebook.com"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="//www.twitter.com"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="//plus.google.com"><i class="ion-social-googleplus-outline"></i></a></li>
                                            <li><a href="//www.instagram.com"><i class="ion-social-instagram-outline"></i></a></li>
                                            <li><a href="//www.youtube.com"><i class="ion-social-youtube"></i></a></li>
                                        </ul>
                                        
                                        <!--=======  End of social link small  =======-->
                                    </div>
                                    
                                    
                                    <!--=======  End of header top social links  =======-->
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-6">
                                    
                                    <!--=======  header top dropdown container  =======-->
                                    
                                    <div class="headertop-dropdown-container justify-content-center justify-content-md-end">
                                        <div class="header-top-single-dropdown">
                                        
                                                <a href="javascript:void(0)" class="active-dropdown-trigger" id="user-options">
                                                @guest
                                                        <span>Welcome</span>
                                                        <i class="ion-ios-arrow-down"></i></a>
                                                <!--=======  dropdown menu items  =======-->
                                                
                                                        <div class="header-top-single-dropdown__dropdown-menu-items deactive-dropdown-menu extra-small-mobile-fix">
                                                            <ul>
                                                            @if (Route::has('login'))
                                                                <li><a href="login">Login</a></li>
                                                            @endif

                                                            @if(Route::has('register'))
                                                                <li><a href="register">Register</a></li>
                                                            @endif
                                                            </ul>
                                                        </div>
                                                    @else
                                                        <span>
                                                                {{ Auth::user()->name }}
                                                                <i class="ion-ios-arrow-down"></i></a>
                                                <!--=======  dropdown menu items  =======-->
                                                
                                                                <div class="header-top-single-dropdown__dropdown-menu-items deactive-dropdown-menu extra-small-mobile-fix">
                                                                    <ul>
                                                                        <li><a href="{{'user/myaccount'}}">My Account</a></li>
                                                                            
                                                                        <li>
                                                                            <form action="/logout-user" method="POST" >
                                                                                @csrf

                                                                                    <button type="submit" name="" style="font-family: 'IBM Plex Sans', sans-serif;font-size: 13px;font-weight: 300;line-height: 2.2;display: block;padding: 10px 0;color: #666;">Log Out</button>

                                                                            </form>
                                                                        </li>

                                                                    </ul>
                                                            
                                                                </div>
                                                        </span>
                                                @endguest
                                                
                                            
                                            <!--=======  End of dropdown menu items  =======-->
                                        </div>
                                        
                                        <span class="separator">|</span>
                                        <div class="header-top-single-dropdown">
                                            <a href="/user/kygui" >Ký gửi sản phẩm</a>
                                            <!--=======  dropdown menu items  =======-->
                                            
                                            
                                            
                                            <!--=======  End of dropdown menu items  =======-->
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of header top dropdown container  =======-->
                                </div>
                            </div>
                        </div>

                        <!--====================  End of navigation section  ====================-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--====================  navigation top search ====================-->


                        <div class="navigation-top-search-area pt-25 pb-25">
                            <div class="row align-items-center">
                                <div class="col-6 col-xl-2 col-lg-3 order-1 col-md-6 col-sm-5">
                                    <!--=======  logo  =======-->
                                    
                                    <div class="logo">
                                        <a href="{{'/'}}">
                                            <img src="front/img/logo.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    
                                    <!--=======  End of logo  =======-->
                                </div>

                                <div class="col-xl-5 offset-xl-1 col-lg-4 order-4 order-lg-2 mt-md-25 mt-sm-25">
                                    <!--=======  search bar  =======-->
                                    
                                    <div class="search-bar">
                                        <form action="shop/listproduct">
                                            <input type="search" name="search" placeholder="Bạn cần tìm kiếm gì ?" value="{{request('search')}}">
                                            <button type="submit"> <i class="icon-search"></i></button>
                                        </form>
                                    </div>
                                    
                                    <!--=======  End of search bar  =======-->
                                </div>

                                <div class="col-xl-3 col-lg-3 order-3 order-sm-2 order-lg-3 order-xs-3 col-md-4 col-sm-5 text-center text-sm-left mt-xs-25">
                                    <!--=======  customer support text  =======-->
                                    
                                    <div class="customer-support-text">
                                        <div class="icon">
                                            <img src="front/img/icons/icon-header-phone.png" class="img-fluid" alt="">
                                        </div>

                                        <div class="text">
                                            <span>Customer Support</span>
                                            <p>(08) 12 345 789</p>
                                        </div>
                                    </div>
                                    
                                    <!--=======  End of customer support text  =======-->
                                </div>

                                <div class="col-6 col-xl-1 col-lg-2 text-right order-2 order-sm-3 order-lg-4 order-xs-2 col-md-2 col-sm-2">
                                    <!--=======  cart icon  =======-->
                                    
                                    <div class="header-cart-icon">
                                        <a href="javascript:void(0)" id="small-cart-trigger" class="small-cart-trigger">
                                            <i class="icon-shopping-cart"></i>
                                            <span class="cart-counter">{{Cart::count()}}</span>
                                        </a>

                                        <!--=======  small cart  =======-->
                                        
                                        <div class="small-cart deactive-dropdown-menu">
                                            <div class="small-cart-item-wrapper">
                                                @foreach (Cart::content() as $cart)
                                                    <div class="single-item">
                                                        <div class="image">
                                                            <a href="/shop/Product/{{$cart->id}}">
                                                                <img src="{{asset('/storage/Linkimageproduct/'.$cart->options->images[0]->img)}}" class="img-fluid" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="cart-name"><a href="/shop/Product/{{$cart->id}}">{{$cart->name}}</a></p>
                                                            <p class="cart-quantity"><span class="quantity-mes">{{$cart->qty}} x </span> {{number_format($cart->price)}} VNĐ</p>
                                                        </div>
                                                        <a href="./cart/delete/{{$cart->rowId}}" class="remove-icon"><i class="ion-close-round"></i></a>
                                                    </div>
                                                @endforeach
                                                
                                                
                                            </div>

                                            <div class="cart-calculation-table">
                                                <table class="table mb-25">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">Sub-Total :</td>
                                                            <td class="text-right">{{Cart::subtotal()}} VNĐ</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Shipping Cost :</td>
                                                            <td class="text-right">00.00 VNĐ</td>
                                                        </tr>
                                                        <tr>
                                                        

                                                           
                                                            <td class="text-left">Discount Code :</td>
                                                            <td class="text-right">00.00 VNĐ</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Total :</td>
                                                            <td class="text-right">{{Cart::total()}} VNĐ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="cart-buttons">
                                                    <a href="./cart" class="theme-button">View Cart</a>
                                                    <a href="/checkout" class="theme-button">Checkout</a>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <!--=======  End of small cart  =======-->
                                    </div>
                                    
                                    <!--=======  End of cart icon  =======-->
                                    
                                </div>
                            </div>
                        </div>

                        <!--====================  End of navigation top search  ====================-->
                    </div>
                </div>
            </div>
        </div>
            
        <!--====================  End of Navigation top  ====================-->

        <!--====================  navigation menu ====================-->

        <div class="navigation-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- navigation section -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class=" {{(request()->segment(1) == '') ? 'active' : ''}}"><a href="{{''}}">HOME</a>
                                        
                                    </li>
                                    
                                    <li class=" {{(request()->segment(1) == 'pages') ? 'active' : ''}}"><a href="#">PAGES</a>
                                        
                                    </li>

                                    <li class=" {{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="{{'shop/listproduct'}}">SHOP</a>
                                        
                                    </li>

                                    <li class=" {{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="{{'user/livestream'}}">LIVE</a>
                                        
                                    </li>

                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        
                        </div>
                        <!-- end of navigation section -->

                        <!-- Mobile Menu -->
                        <div class="mobile-menu-wrapper d-block d-lg-none pt-15">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====================  End of navigation menu  ====================-->
    </div>
    
    <!--====================  End of Header area  ====================-->
    
    <!--====================  hero slider area ====================-->
   
    <div style="background-image: none; background-color: white">
        @yield('body')
    </div>

    <div class="footer-area" style="background-image: none; background-color: white">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="footer-content-wrapper border-top pt-40">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single footer widget  =======-->
                                
                                <div class="single-footer-widget">
                                    <div class="footer-logo mb-25">
                                        <img src="front/img/logo-alula2.png" class="img-fluid" alt="">
                                    </div>
            
                                    <div class="footer-text-block mb-10">
                                        <h5 class="footer-text-block__title">Address</h5>
                                        <p class="footer-text-block__content">4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                                    </div>
            
                                    <div class="footer-text-block mb-10">
                                        <h5 class="footer-text-block__title">Need Help?</h5>
                                        <p class="footer-text-block__content">Call: 1-800-345-6789</p>
                                    </div>
            
                                    <div class="footer-social-icon-block">
                                        <ul>
                                            <li><a class="facebook-icon" href="//www.facebook.com"><i class="ion-social-facebook"></i></a></li>
                                            <li><a class="twitter-icon" href="//www.twitter.com"><i class="ion-social-twitter"></i></a></li>
                                            <li><a class="googleplus-icon" href="//plus.google.com"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a class="instagram-icon" href="//www.instagram.com"><i class="ion-social-instagram-outline"></i></a></li>
                                            <li><a class="youtube-icon" href="//www.youtube.com"><i class="ion-social-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!--=======  End of single footer widget  =======-->
                            </div>
            
                            <div class="col-lg-4 col-md-6 mt-sm-30">
                                <!--=======  single footer widget  =======-->
                                
                                <div class="single-footer-widget">
                                    <h4 class="footer-widget-title"><a href="#">Follow on instagram</a></h4>
            
                                    <div class="instagram-image-slider-wrapper">
                                        <div class="ht-slick-slider"
                                        data-slick-setting='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "autoplay": false,
                                            "autoplaySpeed": 5000,
                                            "speed": 1000,
                                            "arrows": false,
                                            "rows": 2
                                        }'
                                        data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                            {"breakpoint":767, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false} }
                                        ]'
                                        >
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a1.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a2.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a3.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a4.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a5.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a6.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a7.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="/storage/Linkimageproduct/a8.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="front/img/instagram/a1.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="front/img/instagram/a2.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="front/img/instagram/a3.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->
                                            
                                            <div class="single-instagram-image">
                                                <a href="#"><img src="front/img/instagram/a4.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            
                                            <!--=======  End of single instagram image  =======-->
                                        </div>
                                    </div>  
                                </div>
                                
                                <!--=======  End of single footer widget  =======-->
                            </div>
            
                            <div class="col-lg-4 col-md-6 mt-md-30 mt-sm-30">
                                <!--=======  single footer widget  =======-->
                                
                                <div class="single-footer-widget">
                                    <h5 class="montserrat-footer-widget-title">Information</h5>
            
                                    <div class="footer-navigation">
                                        <nav>
                                            <ul>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Gift Certificates</a></li>
                                                <li><a href="#">Specials</a></li>
                                                <li><a href="#">Delivery Information</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Brands</a></li>
                                                <li><a href="#">Affiliate</a></li>
                                                <li><a href="#">Site Map</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                
                                <!--=======  End of single footer widget  =======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text-area">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left mb-sm-15">
                                <div class="copyright-text">
                                    <p>Copyright © 2019 <a href="#">Alula</a>. All Right Reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
                                <div class="payment-logo">
                                    <img src="front/img/icons/payment.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of footer area  ====================-->
    <!-- scroll to top  -->
    <button class="scroll-top"></button>
    <!-- end of scroll to top -->


    <!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                <!--=======  big image slider  =======-->
                                
                                <div class="big-image-slider-wrapper">
                                    <div class="ht-slick-slider big-image-slider"
                                    data-slick-setting='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000
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
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-1.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-4.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-5.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    <!--=======  big image slider single item  =======-->
                                                
                                    <div class="big-image-slider-single-item">
                                        <img src="front/img/products/big1-6.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of big image slider single item  =======-->
    
                                    </div>
                                </div>
                                
                                <!--=======  End of big image slider  =======-->

                                <!--=======  small image slider  =======-->
                                
                                <div class="small-image-slider-wrapper small-image-slider-wrapper--quickview">
                                    <div class="ht-slick-slider small-image-slider"
                                    data-slick-setting='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000,
                                        "asNavFor": ".big-image-slider",
                                        "focusOnSelect": true,
                                        "arrows": true,
                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                    }'
                                    data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 2} }
                                    ]'
                                    >
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-1.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-4.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-5.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    <!--=======  small image slider single item  =======-->
                                                
                                    <div class="small-image-slider-single-item">
                                        <img src="front/img/products/small1-6.jpg" class="img-fluid" alt="">
                                    </div>
                                    
                                    <!--=======  End of small image slider single item  =======-->
    
                                    </div>
                                </div>
                                
                                <!--=======  End of small image slider  =======-->
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <!--=======  product detail content  =======-->
                                
                                <div class="product-detail-content">
                                    <div class="tags mb-5">
                                        <span class="tag-title">Tags:</span>
                                        <ul class="tag-list">
                                            <li><a href="#">Plant</a>,</li>
                                            <li><a href="#">Garden</a></li>
                                        </ul>
                                    </div>

                                    <h3 class="product-details-title mb-15">Lorem ipsum indoor plants</h3>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price product-price--big mb-10"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                    <div class="product-info-block mb-30">
                                        <div class="single-info">
                                            <span class="title">Ex Tax:</span>
                                            <span class="value">$95.00</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Brand:</span>
                                            <span class="value"><a href="#">Brac</a></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Product Code:</span>
                                            <span class="value">abcd1234</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Availability:</span>
                                            <span class="value stock-red">In stock</span>
                                        </div>
                                    </div>

                                    <div class="product-short-desc mb-25">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas consectetur inventore voluptatem dignissimos nemo repellendus est, harum maiores veritatis quidem.</p>
                                    </div>

                                    <div class="quantity mb-20">
                                        <span class="quantity-title mr-20">Qty</span> 
                                        <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                            <input type="text" value="1">
                                        </div>
                                        <button class="theme-button product-cart-button">+ Add to Cart</button>
                                    </div>

                                    <div class="compare-button mb-15">
                                        <a href="#"><i class="icon-sliders"></i> Compare This Product</a>
                                    </div>

                                    <div class="wishlist-button">
                                        <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                                    </div>
                                </div>
                                
                                <!--=======  End of product detail content  =======-->
                            </div>
                        </div>
                    </div>
				</div>
			</div>

		</div>
    </div>
    
	<!--=====  End of Quick view modal  ======-->
    <!--====================  newsletter popup ====================-->
    
    
    
    <!--====================  End of newsletter popup  ====================-->
	<!--=============================================
    =            JS files        =
    =============================================-->
    
	<!-- Vendor JS -->
    <script src="front/js/vendors.js"></script>
    
	<!-- Active JS -->
	<script src="front/js/active.js"></script>
    
    <!--=====  End of JS files ======-->
    <script>
       
        $(document).on('click','#deletebtn_avatar',function(){
            var avatar_id = $(this).data('id');
           var url = "{{route('delete_avatar')}}";
           if(confirm('Are you sure you want to delete avatar!')){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
               $.ajax({
                
                   url: url,
                   method:"POST",
                   data:{avatar_id:avatar_id},
                   dataType:'json',
                   success:function(data){
                        alert(data);
                        console.log(data);
                    },
                    
                });
           }
        });
    </script>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
        alert(msg);
        }
    </script>
     <script>
        var proQty = $('.pro-qty');
       /* proQty.prepend('<a class="inc qty-btn">+</a>');
        proQty.append('<a class="dec qty-btn">-</a>');
*/
        
        proQty.on('click','.qty-btn',function(){
            var $button = $(this);
            console.log($button);
            var oldValue = $button.parent().find('input').val();
            console.log(oldValue);
            if($button.hasClass('inc')){
                var newVal = parseFloat(oldValue) ;
            }else{
                if(oldValue > 0){
                    var newVal = parseFloat(oldValue) ;
                }else{
                    newVal = 0;
                    //console.log(newVal);

                }
            }
            $button.parent().find('input').val(newVal);

            const rowId = $button.parent().find('input').data('rowid');
            updatecart(rowId,newVal);
        });
        



        function updatecart(rowId,qty){
            $.ajax({
                method: "GET",
                url: "cart/update",
                data:{rowId:rowId,qty:qty},
                success: function(response){
                    //alert('ok');
                    console.log(response);
                    location.reload();
                },
                error: function(error){
                   // alert('error');
                    console.log(error);
                }

            })
        }

        

    </script>
   
    

</body>

</html> 