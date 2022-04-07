@extends('front.layout.master')
@section('title','Chi tiết sản phẩm')
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
                            <li class="has-child"><a href="{{'/shop/listproduct'}}">Shop</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                    
                    <!--=======  End of breadcrumb content  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of breadcrumb area  ====================-->

    <!--====================  product details area ====================-->
    
    <div class="product-details-area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-30 mb-sm-25">
                    <!--=======  product details slider  =======-->
                                        
                        <!--=======  big image slider  =======-->
                                    
                        <div class="big-image-slider-wrapper big-image-slider-wrapper--change-cursor">
                            <div class="ht-slick-slider big-image-slider99"
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
                            @foreach($productids->productImage as $productimg)       
                                @if($productimg->img != null)

                                    <div class="big-image-slider-single-item">
                                        <img src="{{asset('/storage/Linkimageproduct/'.$productimg->img)}}" class="img-fluid" alt="" style="width:100%;height:540px;">
                                    </div>
                                @endif
                            @endforeach
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
                                "asNavFor": ".big-image-slider99",
                                "focusOnSelect": true,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                            }'
                            data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                {"breakpoint":991, "settings": {"slidesToShow": 4} },
                                {"breakpoint":767, "settings": {"slidesToShow": 4} },
                                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                                {"breakpoint":479, "settings": {"slidesToShow": 2} }
                            ]'
                            >

                            <!--=======  small image slider single item  =======-->
                                        
                            @foreach($productids->productImage as $productimg) 
                                @if($productimg->img != null)          
                                    <div class="big-image-slider-single-item">
                                        <img src="{{asset('/storage/Linkimageproduct/'.$productimg->img)}}" class="img-fluid" alt="" style="width: 101px;height:101px;">
                                    </div>
                                @endif
                            @endforeach
                            
                            <!--=======  End of small image slider single item  =======-->

                            <!--=======  small image slider single item  =======-->
                                        
                           
                            
                            <!--=======  End of small image slider single item  =======-->

                            </div>
                        </div>
                        
                        <!--=======  End of small image slider  =======-->
                        
                    <!--=======  End of product details slider  =======-->
                </div>

                <div class="col-lg-6">
                    <!--=======  product details content  =======-->
                                        
                    <div class="product-detail-content">
                    <form  action="./cart/add/{{$productids->id}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="tags mb-5">
                            <span class="tag-title">Tags:</span>
                            <a href="#">{{$productids->brand->name}}</a>
                        </div>

                        <h3 class="product-details-title mb-15">{{$productids->name}}</h3>
                        <div class="rating d-inline-block mr-15">
                            @for($i=1;$i<=5;$i++) 
                                @if($i <= $agvRating )
                                    <i class="ion-android-star active"></i>

                                @else

                                    <i class="ion-android-star"></i>

                                @endif
                            @endfor
                        </div>
                        <div class="review-links d-inline-block">
                            <span href="#" style="cursor: pointer;">({{count($productids->productcomments)}} Review)</span>
                        </div>
                        <p class="product-price product-price--big mb-10"><span class="discounted-price">{{number_format($productids->price - (($productids->discount * $productids->price)/100))}} VNĐ</span> <span class="main-price discounted">{{number_format($productids->price)}} VNĐ</span></p>
                        

                        

                        <div class="product-short-desc mb-25">
                            <p>{{$productids->content}}</p>
                        </div>

                        <div class="quantity mb-20">
                            <span class="quantity-title mr-20">Số lượng</span> 
                            <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                <input type="text" name="qty" value="1">
                                
                            </div>
                            <button class="theme-button product-cart-button" type="submit" >+ Add to Cart</button>
                        </div>
                        @if(session()->has('errorqty'))
                                    <div class="alert alert-primary">
                                        {{ session()->get('errorqty') }}
                                    </div>
                                @endif
                        <div class="compare-button d-inline-block mr-40">
                            <a href="#"><i class="icon-sliders"></i> Compare This Product</a>
                        </div>

                        <div class="wishlist-button d-inline-block">
                            <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                        </div>

                        <div class="product-details-feature-wrapper d-flex justify-content-start mt-20">
                            <!--=======  single icon feature  =======-->
                                
                            <div class="single-icon-feature single-icon-feature--product-details">
                                <div class="single-icon-feature__icon">
                                    <img src="front/img/icons/free-shipping.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Free Shipping</p>
                                    <p class="feature-text">Ships Today</p>
                                </div>
                            </div>
                            
                            <!--=======  End of single icon feature  =======-->

                            <!--=======  single icon feature  =======-->
                                
                            <div class="single-icon-feature single-icon-feature--product-details ml-30 ml-xs-0 ml-xxs-0">
                                <div class="single-icon-feature__icon">
                                    <img src="front/img/icons/return.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Easy</p>
                                    <p class="feature-text">Returns</p>
                                </div>
                            </div>
                            
                            <!--=======  End of single icon feature  =======-->

                            <!--=======  single icon feature  =======-->
                                
                            <div class="single-icon-feature single-icon-feature--product-details ml-30 ml-xs-0 ml-xxs-0">
                                <div class="single-icon-feature__icon">
                                    <img src="front/img/icons/guarantee.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-icon-feature__content">
                                    <p class="feature-text">Lowest Price</p>
                                    <p class="feature-text">Guarantee</p>
                                </div>
                            </div>

                    </form>
                        
                            
                            <!--=======  End of single icon feature  =======-->
                        </div>

                        <div class="social-share-buttons mt-20">
                            <h3>share this product</h3>
                            <ul>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <!--=======  End of product details content  =======-->                    
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of product details area  ====================-->


    <!--=======  product description review   =======-->
    
    <div class="product-description-review-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  product description review container  =======-->
                    
                    <div class="tab-slider-wrapper product-description-review-container">
                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link " id="description-tab" data-toggle="tab" href="#product-description" role="tab"
                                    aria-selected="true">Description</a>
                                <a class="nav-item nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                    aria-selected="false">Review</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade  " id="product-description" role="tabpanel" aria-labelledby="description-tab">
                                <!--=======  product description  =======-->
                                
                                <div class="product-description">
                                    {{$productids->description}}
                                </div>
                                
                                <!--=======  End of product description  =======-->
                            </div>
                            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <!--=======  review content  =======-->
                                
                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <h4>{{number_format($agvRating,2)}} <span>(Overall)</span></h4>
                                        <span>Dựa trên {{count($productcomments)}} bình luận</span>
                                    </div>
                                    <div class="ratting-list">
                                        <div class="sin-list float-left rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>({{count($rating5)}})</span>
                                        </div>
                                        <div class="sin-list float-left rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>({{count($rating4)}})</span>
                                        </div>
                                        <div class="sin-list float-left rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>({{count($rating3)}})</span>
                                        </div>
                                        <div class="sin-list float-left rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>({{count($rating2)}})</span>
                                        </div>
                                        <div class="sin-list float-left rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>({{count($rating1)}})</span>
                                        </div>
                                    </div>
                                    <div class="rattings-wrapper">
                                        @foreach ($productcomments as $productcomment)
                                        <div class="sin-rattings">
                                            <div class="ratting-author rating ">
                                                <h3>{{$productcomment->name}}</h3>
                                                <div class="rating ">
                                                @for($i=1;$i<=5;$i++) 
                                                    @if($i <= $productcomment->rating )
                                                        <i class="ion-android-star active"></i>

                                                    @else

                                                        <i class="ion-android-star"></i>

                                                    @endif
                                                @endfor
                                                    <span>({{$productcomment->rating}})</span>
                                                </div>
                                            </div>
                                            <p>{{$productcomment->message}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="pagination-section mb-md-30 mb-sm-30" style="width: 450px; margin: 0px auto;border: none;">
                                        {{$productcomments->links()}}
                                    </div>
                                    <div class="ratting-form-wrapper fix">
                                        <h3>Add your Comments</h3>
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$productids->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id ?? null}}">
                                            <div class="ratting-form row">
                                                <div class="col-12 mb-15">
                                                    <h5>Rating:</h5>
                                                    <section id="rate_comment" class="rating_comment">
                                                        <input type="radio" id="star_5" name="rating" value="5" />
                                                        <label for="star_5" title="Five">&#9733;</label>
                                                        <input type="radio" id="star_4" name="rating" value="4" />
                                                        <label for="star_4" title="Four">&#9733;</label>
                                                        <input type="radio" id="star_3" name="rating" value="3" />
                                                        <label for="star_3" title="Three">&#9733;</label>
                                                        <input type="radio" id="star_2" name="rating" value="2" />
                                                        <label for="star_2" title="Two">&#9733;</label>
                                                        <input type="radio" id="star_1" name="rating" value="1" />
                                                        <label for="star_1" title="One">&#9733;</label>
                                                    </section>
                                                    
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="name">Name:</label>
                                                    @if(Auth::user()->id ?? null)
                                                        <input id="name" name="name" placeholder="Name" type="text" value="{{Auth::user()->name}}" required>
                                                    @else
                                                        <input id="name" name="name" placeholder="Name" type="text"  required>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="email">Email:</label>
                                                    @if(Auth::user()->id ?? null)
                                                        <input id="email" name="email" placeholder="Email" type="text" value="{{Auth::user()->email}}" required>
                                                    @else
                                                        <input id="email" name="email" placeholder="Email" type="text" required>

                                                    @endif
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <label for="your-review">Your Review:</label>
                                                    <textarea name="message" id="your-review"
                                                    placeholder="Write a review" required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Bình luận</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!--=======  End of review content  =======-->
                            </div>
                        </div>
                    </div>
                    
                    <!--=======  End of product description review container  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--=======  End of product description review   =======-->
    <!--====================  product single row slider area ====================-->

    <div class="product-single-row-slider-area mb-40">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    
                    <div class="section-title mb-20">
                        <h2>Related Products</h2>
                    </div>
                    
                    <!--=======  End of section title  =======-->
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
                            @foreach($relatedproducts as $relatedproduct)
                                <div class="single-slider-product-wrapper">
                                    <div class="single-slider-product">
                                        <div class="single-slider-product__image">
                                            <a href="{{'shop/Product/'.$relatedproduct->id}}">
                                                <img src="{{asset('/storage/Linkimageproduct/'.$relatedproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 263px;height:263px">
                                                <img src="{{asset('/storage/Linkimageproduct/'.$relatedproduct->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 263px;height:263px">
                                            </a>
                                            @if($relatedproduct->discount != null)
                                                <span class="discount-label discount-label--green">-{{$relatedproduct->discount}}%</span>
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
                                                <p class="product-title"><a href="single-product.html">{{$relatedproduct->name}} </a></p>
                                            <div class="rating">
                                            @if(count($relatedproduct->productcomments) == 0)
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>

                                            @else
                                                @for($i=1;$i<=5;$i++) 
                                                    @if($i <= (($relatedproduct->productcomments->sum('rating'))/(count($relatedproduct->productcomments))) )
                                                        <i class="ion-android-star active"></i>

                                                    @else

                                                        <i class="ion-android-star"></i>

                                                    @endif
                                                @endfor
                                            @endif

                                            </div>
                                            <p class="product-price"><span class="discounted-price">{{number_format($relatedproduct->price - (($relatedproduct->discount * $relatedproduct->price)/100))}} VNĐ</span><span class="main-price discounted">{{number_format($relatedproduct->price)}} VNĐ</span></p>

        
                                            <span class="cart-icon"><a href="./cart/add/{{$relatedproduct->id}}"><i class="icon-shopping-cart"></i></a></span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            
                            
                           


                        </div>
                    </div>
                    
                    <!--=======  End of product single row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of product single row slider area  ====================-->
    <!--====================  footer area ====================-->
    
    @endsection