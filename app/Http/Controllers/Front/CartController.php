<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\DiscountCode;
use Carbon\Carbon;


class CartController extends Controller
{
    //
    public function add($id){
        $product = Product::findOrFail($id);
        //dd($product);
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'images' => $product->productImage,
                'discountcode' => 0,
                'discount' => $product->discount,
            ],

        ]);
        $carts = Cart::content();
        foreach($carts as $cart){
            $price = ($cart->price - (($cart->options->discount * $cart->price)/100));

            Cart::update(
                $cart->rowId, [ 
                'price' => $price, 
            ]);
            
            
        }

        //dd(Cart::content());
        return back();

    }
    public function addqty(Request $request,$id){
        $product = Product::findOrFail($id);
        $errorqty  = session('errorqty');
        if($request->qty <= 0){
            return redirect()->back()->with('errorqty', 'Số lượng phải lớn hơn 1');
        }
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => $request->qty,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'images' => $product->productImage,
                'discountcode' => 0,
                'discount' => $product->discount,


            ],
            

        ]);
        $carts = Cart::content();
        foreach($carts as $cart){
            $price = ($cart->price - (($cart->options->discount * $cart->price)/100));

            Cart::update(
                $cart->rowId, [ 
                'price' => $price, 
            ]);
            
            
        }

        //dd(Cart::content());
        return back();
    }
    public function index(Request $request){

        
        //dd(Cart::content());
        $carts = Cart::content();
        $total = Cart::totalFloat();
        $subtotal = Cart::subtotalFloat();
        
        $discountcode = 0;



        $discount = $this->discount($request,$discountcode);
        
        $errorcode  = session('errorcode');
        
        if($discount == 2 && $discount != 0 && $discount != null){
            return redirect()->back()->with('errorcode', 'Mã giảm giá không tồn tại');
        }
        if($discount == 3 && $discount != 0 && $discount != null){
            return redirect()->back()->with('errorcode', 'Mã giảm giá chưa đến thời gian áp dụng');

        }
        if($discount == 4 && $discount != 0 && $discount != null){
            return redirect()->back()->with('errorcode', 'Mã giảm giá hết thời gian hiệu lực');

        }

        if($discount != 0 && $discount != null && Cart::count() > 0){

        
            foreach($carts as $cart){

                Cart::update($cart->rowId, array(
                    'options' =>$cart->options->merge(['discountcode' => $discount]), 
                  ));
                
                
            }
            $carts = Cart::content();
            $total = Cart::totalFloat();
            $subtotal = Cart::subtotalFloat();
            $discountcode = (($cart->options->discountcode / 100) * $total);
            $total = $total - $discountcode;

            
        }
        
        //dd(Cart::content());
        return view('front.cart',compact('carts','subtotal','total','discountcode'));
    }

    public function delete($id){
        Cart::remove($id);

        return back();
    }

    public function update(Request $request){
        
        
        Cart::update($request->rowId,$request->qty);
    }

    public function discount(Request $request,$discountcode){
        
        if($request->code != null)
        {
            $coded = DiscountCode::all()->where('code' , $request->code)->first();

            if($coded == null)
            {
                return $discountcode = 2;
            }
            $coded->start_day = Carbon::createFromFormat('Y-m-d H:i:s', $coded->start_day)->format('Y-m-d');
            $coded->end_day = Carbon::createFromFormat('Y-m-d H:i:s', $coded->end_day)->format('Y-m-d');
            

            $timenow = Carbon::now();
            $timenow = Carbon::createFromFormat('Y-m-d H:i:s', $timenow)->format('Y-m-d');
            

            if( $coded->start_day > $timenow)
            {
                return $discountcode = 3;
            }
            if( $coded->end_day < $timenow)
            {
                
               return  $discountcode = 4;
            }


            $discountcode = $coded->discount;
            return $discountcode;

        }
        else{
            return $discountcode;

        }

    }
}
