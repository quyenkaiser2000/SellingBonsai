@extends('front.layout.master')
@section('title','Shop Now')
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
                            <li>Shop</li>
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
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  page sidebar  =======-->
                    
                    <div class="page-sidebar">

                        <!--=======  widget wrapper  =======-->
                        <div class="sidebar-widget-wrapper mb-30">
                            <!--=======  sidebar widget  =======-->
                            
                            <form action="">
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget-title">LOẠI SẢN PHẨM</h3>
                                    <ul class="category-list">
                                        @foreach ($productcategory as $productcategory)
                                            <li><a href="{{'shop/Category/'.$productcategory->name}}" {{(request()->segment(1) == '') ? 'active' : ''}}">{{$productcategory->name}}</a></li>
                                        @endforeach
                                    
                                        
                                    </ul>
                                </div>
                                <!--=======  End of sidebar widget  =======-->

                                <!--=======  sidebar widget  =======-->
                                
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget-title">GIÁ SẢN PHẨM</h3>
                                    <ul class="category-list">
                                        
                                        <li>
                                            <div>
                                                <input type="checkbox" name="money" value="duoi-100-nghin">
                                                <label>Dưới 100 nghìn</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="money" value="tu-100-den-500">
                                                <label>Từ 100 Đến 500 Nghìn</label>
                                            </div><div>
                                                <input type="checkbox" name="money" value="tu-500-den-1tr">
                                                <label>Từ 500 Đến 1 Triệu</label>
                                            </div><div>
                                                <input type="checkbox" name="money" value="tren-1tr">
                                                <label>Trên 1 triệu</label>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                        </li>
                                       
                                        
                                        
                                    
                                        
                                    </ul>
                                </div>
                                <!--=======  End of sidebar widget  =======-->

                                <!--=======  sidebar widget  =======-->
                                
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget-title mt-0">THƯƠNG HIỆU</h3>
                                    
                                    <div class="sidebar-filter-group">
                                        @foreach($productbrands as $productbrand)
                                            <div class="bc-item">
                                                <label for="bc-{{$productbrand->id}}">{{$productbrand->name}}
                                                    
                                                    <input type="checkbox"
                                                        {{ (request("brand")[$productbrand->id] ?? '') == 'on' ? 'checked' : ''}}
                                                        id =" bc-{{$productbrand->id}}"
                                                        name = "brand[{{$productbrand->id}}]"
                                                        onchange = "this.form.submit();">
                                                    <span class="checkmark"></span>
                                                </label>    
                                            </div>
                                        @endforeach
                                        
                                    
                                    </div>
                                </div>
                            </form>
                            <!--=======  End of sidebar widget  =======-->

                            <!--=======  sidebar widget  =======-->
                            
                            
                            <!--=======  End of sidebar widget  =======-->
                        </div>
                        <!--=======  End of widget wrapper  =======-->

                        <!--=======  page sidebar banner  =======-->
                        
                        <div class="page-sidebar-banner">
                            <a href="{{'shop/listproduct'}}">
                                <img src="storage/Linkimageproduct/banner-index2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        
                        <!--=======  End of page sidebar banner  =======-->

                    </div>
                    
                    <!--=======  End of page sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  shop banner  =======-->
                    
                    <div class="shop-banner mb-30">
                    <img src="storage/Linkimageproduct/banner-index.jpg" class="img-fluid" alt="">
                    </div>
                    
                    <!--=======  End of shop banner  =======-->
                
                    <!--=======  shop header  =======-->
                    
                    <div class="shop-header mb-30">
                        <div class="shop-header__left">
                            <div class="grid-icons mr-20">
                                <button data-target="grid three-column" data-tippy="3" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder" class="active three-column"></button>
                                <button data-target="grid four-column" data-tippy="4" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder"  class="four-column d-none d-lg-block"></button>
                                <button data-target="list" data-tippy="List" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme = "sharpborder"  class="list-view"></button>
                            </div>

                            
                        </div>

                        <form action="">
                            <div class="shop-header__right">

                                <div class="single-select-block d-inline-block mr-50 mr-lg-10 mr-md-10 mr-sm-10">
                                    <span class="select-title">Show:</span>
                                    <select name="show" onchange="this.form.submit();">
                                        <option  value="6" {{ request('show') == '6' ? 'selected' : ''}}>6</option>
                                        <option value="9" {{ request('show') == '9' ? 'selected' : ''}}>9</option>
                                        <option value="12" {{ request('show') == '12' ? 'selected' : ''}}>12</option>
                                    </select>
                                </div>

                                <div class="single-select-block d-inline-block">
                                    <span class="select-title">Sort By:</span>
                                    <select name="sort_by" onchange="this.form.submit();">
                                        <option value="1" {{ request('sort_by') == '1' ? 'selected' : ''}}>Default</option>
                                        <option value="2" {{ request('sort_by') == '2' ? 'selected' : ''}}>Name (A-Z)</option>
                                        <option value="3" {{ request('sort_by') == '3' ? 'selected' : ''}}>Price (min - max)</option>
                                        <option value="4" {{ request('sort_by') == '4' ? 'selected' : ''}}>Price (max - min)</option>
                                    </select>
                                </div>
                                </div>
                        </form>
                    </div>
                    
                    <!--=======  End of shop header  =======-->

                    <!--=======  shop page content  =======-->
                    
                    <div class="row shop-product-wrap grid three-column mb-10">
                        @if($products != null)

                        @foreach($products as $product)
                            <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20">
                                <!--=======  grid view product  =======-->
                                
                                <div class="single-slider-product grid-view-product">
                                    <div class="single-slider-product__image">
                                        <a href="{{'shop/Product/'.$product->id}}">
                                            <img src="{{asset('/storage/Linkimageproduct/'.$product->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 255px;height:255px">
                                        </a>
                                        @if($product->discount > 0)
                                            <span class="discount-label discount-label--green">-{{$product->discount}}%</span>
                                        @else
                                            <span class="discount-label discount-label--green"></span>
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
                                        <p class="product-title"><a href="single-product.html">{{$product->name}}</a></p>
                                        <div class="rating">
                                        @if(count($product->productcomments) == 0)
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>

                                            @else
                                                    @for($i=1;$i<=5;$i++) 
                                                        @if($i <= (($product->productcomments->sum('rating'))/(count($product->productcomments))) )
                                                            <i class="ion-android-star active"></i>

                                                        @else

                                                            <i class="ion-android-star"></i>

                                                        @endif
                                                    @endfor
                                        @endif
                                        </div>
                                        <p class="product-price"><span class="discounted-price">{{number_format($product->price - (($product->discount * $product->price)/100))}} VNĐ</span><span class="main-price discounted">{{number_format($product->price)}}</span></p>

                                        <span class="cart-icon"><a href="./cart/add/{{$product->id}}"><i class="icon-shopping-cart"></i></a></span>
                                    </div>
                                </div>
                                
                                <!--=======  End of grid view product  =======-->

                                <!--=======  grid view product  =======-->
                                
                                <div class="single-slider-product single-slider-product--list-view list-view-product">
                                    <div class="single-slider-product__image single-slider-product--list-view__image">
                                        <a href="single-product.html">
                                            <img src="{{asset('/storage/Linkimageproduct/'.$product->ProductImage[0]->img)}}" class="img-fluid" alt="" style="width: 255px;height:255px">
                                       
                                        </a>

                                        @if($product->discount > 0)
                                            <span class="discount-label discount-label--green">-{{$product->discount}}%</span>
                                        @else
                                            <span class="discount-label discount-label--green"></span>
                                        @endif
                                    </div>

                                    <div class="single-slider-product__content  single-slider-product--list-view__content">
                                        <div class="single-slider-product--list-view__content__details">
                                            <p class="product-title"><a href="single-product.html">{{$product->name}}</a></p>
                                            <div class="rating">
                                            @if(count($product->productcomments) == 0)
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>

                                            @else
                                                    @for($i=1;$i<=5;$i++) 
                                                        @if($i <= (($product->productcomments->sum('rating'))/(count($product->productcomments))) )
                                                            <i class="ion-android-star active"></i>

                                                        @else

                                                            <i class="ion-android-star"></i>

                                                        @endif
                                                    @endfor
                                            @endif
                                            </div>
                                            
                                            <p class="short-desc">{{$product->description}}.</p>
                                        </div>

                                        <div class="single-slider-product--list-view__content__actions">
                                            <div class="availability mb-10">
                                                <span class="availability-title">Availabe:</span>
                                                <span class="availability-value">Out of stock</span>
                                            </div>

                                            <p class="product-price"><span class="discounted-price" style="font-size:20px;">{{number_format($product->price - (($product->discount * $product->price)/100))}} VNĐ</span><span class="main-price discounted" style="display:block;">{{number_format($product->price)}}</span></p>

                                            <a href="./cart/add/{{$product->id}}" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                            <div class="hover-icons">
                                                <ul>
                                                    <li><a data-toggle = "modal" data-target="#quick-view-modal-container" href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                
                                <!--=======  End of grid view product  =======-->

                            </div>
                        @endforeach
                        
                        
                    </div>
                    
                    <!--=======  End of shop page content  =======-->

                    <!--=======  pagination  =======-->
                    
                    <div class="pagination-section mb-md-30 mb-sm-30">
                        {{$products->links()}}
                    </div>
                    @else
                        <h4>Không tìm thấy sản phẩm </h4>
                    @endif
                    
                    <!--=======  End of pagination  =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->
    
   @endsection