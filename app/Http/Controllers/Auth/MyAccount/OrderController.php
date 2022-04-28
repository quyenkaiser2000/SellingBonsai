<?php

namespace App\Http\Controllers\Auth\MyAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\DiscountCode;
use Carbon\Carbon;
use Auth;
class OrderController extends Controller
{
    public function show(){
        $orders = Order::all()->where('email', Auth::user()->email);
        
       
        //dd($orders);
        return view('auth.myaccount.myaccount_order',compact('orders'));
    }

    //update cart 
    public function edit(Request $request, $id){
        $orderdetails = OrderDetail::all()->where('order_id', $id);
        $orderdetail_firt = OrderDetail::all()->where('order_id', $id)->first();
        
        $discountOrder = Order::find($id);
        
        //dd($discountOrder->discount_code_id);
        if($discountOrder->discount_code_id != null && $discountOrder->discount_code_id != '0'){
        
            $discount = DiscountCode::find( $discountOrder->discount_code_id);
           
            $discountcode = $discount->code;
           
        }
        else{

            $discountcode = null;
           
        }
        

        $discount = $this->discount($request,$discountcode);
       // dd($discount);
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

        if( $discount != null ){
            $discount = DiscountCode::all()->where('code', $discount)->first();
            $discountcode = $discount->discount;
            
            $discount_id = DiscountCode::all()->where('code', $discount->code)->first();
            $discountOrder->discount_code_id = $discount_id->id;
            $discountOrder->save();
        }
        
        
        
        return view('auth.myaccount.myaccount_updatecart',compact( 'orderdetails','discountcode','orderdetail_firt'));
    }
    public function updateqty(Request $request){
        $orderdetail = OrderDetail::find($request->id);
        $orderdetails = OrderDetail::all()->where('order_id', $orderdetail->order_id);
        $order = Order::findOrFail($orderdetail->order_id);
        
        
        if($request->qty > 0){
            $orderdetail->qty = $request->qty;
            $orderdetail->total = $request->qty * $orderdetail->amount;
            $orderdetail->save();

        }
        if($request->qty == 0){
            if(count($orderdetails) <= 1){
                $orderdetail->delete();
                $order->delete();

            }
        }

        
    }
    public function delete($id){
        $orderdetail = OrderDetail::find($id);
        $orderdetails = OrderDetail::all()->where('order_id', $orderdetail->order_id);
        $order = Order::findOrFail($orderdetail->order_id);
        
        if(count($orderdetails) <= 1){
            $orderdetail->delete();
            $order->delete();
            return back();

        }
        else{
            $orderdetail->delete();
            return back();

        }
        
    }

    public function discount(Request $request,$discountcode){
        
        if($request->code != null)
        {
            $coded = DiscountCode::all()->where('code' , $request->code)->first();
            //dd($code);
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


            $discountcode = $coded->code;
            
            return $discountcode;

        }
        else{
            return $discountcode;

        }

    }
}
