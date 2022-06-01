@extends('front.layout.master')
@section('title','Contact')
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
                            <li>Contact</li>
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
		
		<div class="google-map-container mb-45" style="margin-bottom:100px !important;">
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.125120709842!2d106.71230301744384!3d10.801727900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVFAuSENNIC0gSFVURUNI!5e0!3m2!1svi!2s!4v1653925687724!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
            
        <!--=====  End of google map container  ======-->

        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45">
                    <!--=======  contact page side content  =======-->
                    
                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Thông tin liên hệ</h3>
                        <p class="contact-page-message mb-30">Liên hệ với chúng tôi bạn sẽ được hỗ trợ đầy đủ thông tin cần thiết.</p>
                        <!--=======  single contact block  =======-->
                        
                        <div class="single-contact-block">
                            <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                            <p>475A Điện Biên Phủ, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh</p>
                        </div>
                        
                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->
                        
                        <div class="single-contact-block">
                            <h4><i class="fa fa-phone"></i> Điện thoại</h4>
                            <p>Mobile: (+84) 383 109 155</p>
                            <p>Hotline: 1009 123 456</p>
                        </div>
                        
                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->
                        
                        <div class="single-contact-block">
                            <h4><i class="fa fa-envelope-o"></i> Email</h4>
                            <p>nguyentanquyen2000@gmail.com</p>
                            <p>tanquyenhutech2000@gmail.com</p>
                        </div>
                        
                        <!--=======  End of single contact block  =======-->
                    </div>
                    
                    <!--=======  End of contact page side content  =======-->

                </div>
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <!--=======  contact form content  =======-->
                    
                    <div class="contact-form-content">
                        <h3 class="contact-page-title">Tell Us Your Message</h3>

                        <div class="contact-form">
                            <form  id="contact-form" action="/contact" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" name="name" id="customername" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" name="email" id="customerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" id="contactMessage" ></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit"  id="submit" class="theme-button contact-button" >Send</button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                    </div>
                    
                    <!--=======  End of contact form content =======-->
                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->
    
  @endsection