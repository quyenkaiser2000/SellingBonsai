<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<base href="{{ asset('/') }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body style="margin: 0;
padding: 0;
box-sizing: border-box;background-color: bisque;">
    <div class="header">
        <div class="container">
            <h1 style="    display: flex;
    color: currentcolor;
    font-size: 50px;
    width: 400px;
    margin: 0px auto;
    padding-top: 35px;">Cây Cảnh Alula</h1>

        </div>
    </div>
    <div style="width: 100%; height:300px;background-color:floralwhite">
        <div  class="container">
            <h2 style="margin-top:50px;padding-top:50px;font-size: 30px;padding-left: 50px;">Thông Tin Người Đặt Hàng</h2>
            <div class="row" style="    display: flex;
    justify-content: space-around;font-size: 18px;">
                <div class="col-6 col-sm-6" style="display:block;">
                    <span style="display:block;margin: 20px 20px;">Tên : {{$order->name}}</span>
                    <a href="mailto:{{$order->email}}" style="display:block;margin: 20px 20px; color:var(--bs-body-color);">Email : {{$order->email}}</a>
                    <span style="display:block;margin: 20px 20px;">SĐT : {{$order->phone}}</span>
                </div>
                <div class="col-6 col-sm-6">
                    <span style="display:block;margin: 20px 20px;">Ngày đặt : {{date('d/m/yy H:i',strtotime($order->created_at))}}</span>
                    <span style="display:block;margin: 20px 20px;">Địa chỉ: {{$order->address}}</span>
                </div>

            </div>

        </div>


    </div>
    <div class="container" style="margin-top: 20px;
    margin-bottom: 20px;">
        <h4 style="margin-top:50px;font-size: 30px;padding-left: 50px;">Thông tin hóa đơn</h4>
        <table class="table table-light" style="font-size:18px;">
            <thead>
              <tr style="    display: flex;justify-content: space-around;width: 950px;">
                <th scope="col" style="    margin-right: 700px;
    margin-left: 100px;">Product</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach($order->orderDetails as $orderDetail)
                    <tr class="table-warning" style="display: flex;justify-content: space-around;">
                        <td style="    margin-right: 570px;
    margin-left: 100px;">{{$orderDetail->product->name}} (x{{$orderDetail->qty}})</td>
                        <td>{{$orderDetail->total}} VNĐ</td>
                    </tr>
              @endforeach
              
            </tbody>
        </table>
    </div>
    <div style="background-color: floralwhite;">
        <div class="container" >
            <h4 style="    padding-top: 20px;
    margin-top: 50px;
    font-size: 30px;
    padding-left: 50px;">Chi tiết thanh toán </h4>
            <table class="table table-light" style="font-size:18px;">
                <thead>
                  <tr style="display: flex;
    justify-content: space-around;
    width: 950px;">
                    <th scope="col" style="margin-right: 700px;    margin-left: 100px;"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr class="table-warning" style="display: flex;
    justify-content: space-around;">
                        <th style="    margin-right: 570px;
    margin-left: 100px;">Subtotal</th>
                        <td>{{number_format($subtotal)}}</> VNĐ</td>
                    </tr>
                    <tr class="table-warning" style="display: flex;
    justify-content: space-around;">
                        <th style="    margin-right: 580px;
    margin-left: 100px;">Shipping Free</th>
                        <td>00.00 VNĐ</td>
                    </tr>
                    <tr class="table-warning" style="display: flex;
    justify-content: space-around;">
                        <th style="    margin-right: 580px;
    margin-left: 100px;">Discount Code</th>
                        <td>{{number_format($discountcode)}} VNĐ</td>
                    </tr>
                    <tr class="table-warning" style="display: flex;
    justify-content: space-around;">
                        <th style="    margin-right: 600px;
    margin-left: 100px;">Total</th>
                        <td>{{number_format($total)}}    VNĐ</td>

                    </tr>
                    @if($order->payment_method == "online_payment")
                        <tr class="table-warning" style="display: flex;
        justify-content: space-around;">
                            <th style="    margin-right: 600px;
        margin-left: 100px;">Thanh toán</th>
                            <td>Đã thanh toán</td>

                        </tr>
                    @endif
                  
                </tbody>
              </table>
        </div>
    </div>
    

</body>

</html> 