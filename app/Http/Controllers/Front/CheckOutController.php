<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\DiscountCode;
use Illuminate\Support\Facades\Mail;
class CheckOutController extends Controller
{
    //
    public function index(){
        
        $carts = Cart::content();
        $cart = $carts->first();
        $total = Cart::totalFloat();
        $subtotal = Cart::subtotalFloat();
        if($cart != null){
            $discount = DiscountCode::all()->where('code', $cart->options->discountcode)->first();
           
            if($discount != null){
            
                $discountcode = (($discount->discount / 100) * $total);
                $total = $total - $discountcode;
                return view('front.checkout',compact('carts','total','subtotal','discountcode'));
    
            }
            else{
                $discountcode = 0;
                return view('front.checkout',compact('carts','total','subtotal','discountcode'));
    
            }
        }
        else{
            $discountcode = 0;
            return view('front.checkout',compact('carts','total','subtotal','discountcode'));

        }
        
       
        

    }
    public function addOder(Request $request){
        $carts_discount = Cart::content();
        $cart_discount = $carts_discount->first();
        $discount_id = DiscountCode::all()->where('code',$cart_discount->options->discountcode)->first();
        if( $cart_discount->options->discountcode != null)
        {
            if($request->payment_method == 'pay_later'){
            $order = new Order([
                'name' =>$request->name,
                'address' =>$request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'payment_method' => $request->payment_method,
                'status'=> 'Pending',
                'discount_code_id' =>$discount_id->id ,
               
            ]);
            $order->save();
            }
            else{
                $order = new Order([
                    'name' =>$request->name,
                    'address' =>$request->address,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'payment_method' => $request->payment_method,
                    'status'=> 'Approved',
                    'discount_code_id' =>$discount_id->id ,
                ]);
                $order->save();
            }
        }
        else{
            if($request->payment_method == 'pay_later'){
                $order = new Order([
                    'name' =>$request->name,
                    'address' =>$request->address,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'payment_method' => $request->payment_method,
                    'status'=> 'Pending',
                    'discount_code_id' =>null,
                   
                ]);
                $order->save();
                }
                else{
                    $order = new Order([
                        'name' =>$request->name,
                        'address' =>$request->address,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'payment_method' => $request->payment_method,
                        'status'=> 'Approved',
                        'discount_code_id' =>null ,
                    ]);
                    $order->save();
                }
        }
        

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
        $cart = $carts->first();
        $discount = DiscountCode::all()->where('code', $cart->options->discountcode)->first();
        if($discount != null){
            $discountcode = (($discount->discount / 100) * $total);
            $total = $total - $discountcode;
        }
        else{
            $discountcode = 0;
        }
        
        
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
