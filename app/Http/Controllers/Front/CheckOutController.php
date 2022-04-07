<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Mail;
class CheckOutController extends Controller
{
    //
    public function index(){
        
        $carts = Cart::content();

        foreach($carts as $cart){
            break;
        }
        
        
        $total = Cart::totalFloat();
        $subtotal = Cart::subtotalFloat();
        $discountcode = (($cart->options->discountcode / 100) * $total);
        $total = $total - $discountcode;
        return view('front.checkout',compact('carts','total','subtotal','discountcode'));
    }
    public function addOder(Request $request){
        //dd($request->all());
        $order  = Order::create($request->all());

        $carts = Cart::content();
        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,
            ];
            OrderDetail::create($data);
        }
        //send email
        $carts = Cart::content();

        foreach($carts as $cart){
            break;
        }
        $total = Cart::totalFloat();
        $subtotal = Cart::subtotalFloat();
        $discountcode = (($cart->options->discountcode / 100) * $total);
        $total = $total - $discountcode;
        
        $this->sendEmail($order, $total,$subtotal , $discountcode);

        Cart::destroy();
        return redirect('checkout/result')->with('notification', 'Đặt hàng thành công! Chúc quý khách hài lòng với sản phẩm bên chúng tôi!');
    }
    public function  sendEmail($order , $total,$subtotal,$discountcode){
        $email_to = 'nguyentanquyen2000@gmail.com';
        
        Mail::send('Front.sendemail',compact('order', 'total', 'subtotal','discountcode'),function($message) use ($email_to){
            $message->from('nguyentanquyen2000@gmail.com','Oder Cây Cảnh');
            $message->to($email_to, $email_to);
            $message->subject('Đơn đặt hàng');

        });
    }

    public function result(){
        $notification  = session('notification');
        return view('front.checkout_result',compact('notification'));
    }
}
