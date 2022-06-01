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
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="user/myaccount/order"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                                <a href="user/myaccount/update" ><i class="fa fa-map-marker"></i>Account Details</a>

                                <a href="user/myaccount/changepas" ><i class="fa fa-user"></i>Change Password</a>

                               
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Hello, <strong>{{Auth::user()->name}}</strong></p>
                                        </div>

                                        <p class="mb-0">Từ trang tổng quan tài khoản của bạn. bạn có thể dễ dàng kiểm tra; xem lịch sử
                                            đơn đặt hàng gần đây của bạn, quản lý địa chỉ giao hàng và chỉnh sửa
                                            mật khẩu và chi tiết tài khoản.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
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
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2019</td>
                                                    <td>Pending</td>
                                                    <td>$45</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Katopeno Altuni</td>
                                                    <td>July 22, 2019</td>
                                                    <td>Approved</td>
                                                    <td>$100</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Murikhete Paris</td>
                                                    <td>June 12, 2017</td>
                                                    <td>On Hold</td>
                                                    <td>$99</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
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
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                        <form class="form-horizontal col-md-10"  enctype="multipart/form-data" >
                                            
                                            <div class="card-body row">
                                                <div class="col-md-9">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Họ Tên</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Name Here" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="address " class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                                        <div class="col-sm-9">
                                                            <input  class="form-control" type="text" name="address" id="address"  value="{{$user->address}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{$user->phone}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="birthday" class="col-sm-3 text-right control-label col-form-label">Ngày sinh </label>
                                                        <div class="col-sm-9">
                                                            @if($user->birthday != null)
                                                                <input type="text" class="form-control date-inputmask" id="birthday" name="birthday" placeholder="Enter Date" value="{{\Carbon\Carbon::Parse($user->birthday)->format('d/m/Y')}}">
                                                            @else
                                                                <input type="text" class="form-control date-inputmask" id="birthday" name="birthday" placeholder="Enter Date" value="">
                                                           
                                                            @endif
                                                            </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                                        <div class="col-md-9" style="display:flex;">
                                                            <div class="custom-control custom-radio "style="margin-right: 20px;">
                                                                <input type="radio" class="custom-control-input" value="Nam" id="customControlValidation1" name="gender"  {{ ($user->gender=="Nam")? "checked" : "" }}>
                                                                <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" value="Nữ" id="customControlValidation2" name="gender"  {{ ($user->gender=="Nữ")? "checked" : "" }}>
                                                                <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-3">
                                                    @if($user->avatar == null)
                                                        <div class="form-group col-md-4">
                                                            <div class="form-group">
                                                                        <img  for="exampleFormControlFile1"  src="{{asset('/storage/Linkimageproduct/addimg.png')}}" class="img-fluid" alt="" style="width: 200px;height:200px;max-width: none;margin-left: 33px;">
                                                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1" style="width: 270px;font-size: 11px;" required>


                                            
                                                                    
                                                            
                                                            </div>
                                                        </div> 
                                                    @else    
                                                        <div class="form-group col-md-4">
                                                            <div class="form-group">
                                                                        <button data-id="{{$user->id}}" id="deletebtn_avatar" class="btn btn-danger "style="position: absolute;top: 33%;left: 33%;opacity:0.6;margin-left: 99px;margin-top: 90px;">Delete</button>               
                                                                        
                                                                        <label >
                                                                            <img  src="{{asset('/storage/Linkimageproduct/'.$user->avatar)}}" class="img-fluid" alt="" style="width: 200px;height:200px;max-width: none;margin-left: 33px;">
                                                                            
                                                                        </label>
                                                                        
                                                            
                                                            </div>
                                                        </div>      
                                                    @endif
                                                </div>
                                                
                                                
                                               
                                                
                                                
                                            </div>
                                            <div class="border-top">
                                                <div class="card-body">
                                                   
                                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form  enctype="multipart/form-data" >
                                            
                                                <div class="form-group row">
                                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Họ Tên</label>
                                                    <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$user->name}}">
                                                        
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input id="email"  type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required  autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                        

                                                <div class="col-12 mb-30"><h4>Password change</h4></div>
                                                    <div class="form-group row">
                                                        <label for="Current" class="col-sm-3 text-right control-label col-form-label">Current Password</label>
                                                    <div class="col-sm-9">
                                                            <input id="current_password" type="password" placeholder="Current Password" class="form-control @error('password') is-invalid @enderror" name="current_password" required autocomplete="current_password">

                                                            @error('current_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="New" class="col-sm-3 text-right control-label col-form-label">New Password</label>
                                                    <div class="col-sm-9">
                                                            <input id="new_password" type="password" placeholder="New Password" class="form-control @error('password') is-invalid @enderror" name="new_password" required autocomplete="new_password">

                                                            @error('new_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                    </div>
                                                    </div>

                                                    
                                                    <div class="form-group row">
                                                        <label for="Confirm_Password" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                            <input id="confirm_password" type="password" placeholder="Confirm Password" class="form-control @error('password') is-invalid @enderror" name="confirm_password" required autocomplete="confirm_password">

                                                            @error('confirm_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                    </div>
                                                    </div>
                                                        

                                                    
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="save-change-btn">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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