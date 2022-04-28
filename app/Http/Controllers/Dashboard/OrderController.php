<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all();
        
        return view('dashboard.crudorder.order',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $order = Order::findOrFail($id);
        $orderdetails = OrderDetail::all()->where('order_id',$id);
        
        if($order->status == 'Pending' ){
            return view('dashboard.crudorder.detailorderpending',compact('order','orderdetails'));

        }
        else{
            return view('dashboard.crudorder.detailorder',compact('order','orderdetails'));

        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pay($id){
        $order = Order::findOrFail($id);
        
        $orderdetails = OrderDetail::select('order_id','product_id','qty')->where('order_id', $id)->get();
        foreach ($orderdetails as $orderdetail){
            $product = Product::find($orderdetail->product_id);
            $product->qty = $product->qty - $orderdetail->qty;
            $product->save();
        }
        $order->status = 'delivered';
        $order->save();
        return redirect()->back();
    }
    public function orderpending(){
        $orders = Order::all()->where('status','Pending');
        return view('dashboard.crudorder.orderpending',compact('orders'));
    }
    public function showpending($id)
    {
        //
        $order = Order::findOrFail($id);
        $orderdetails = OrderDetail::all()->where('order_id',$id);
        
        return view('dashboard.crudorder.detailorderpending',compact('order','orderdetails'));
    }
    public function delete($id){
        $order = Order::findOrFail($id);
        $orderdetails = OrderDetail::all()->where('order_id',$id);
        foreach($orderdetails as $orderdetail)
        {
            $orderdetail->delete();
        }
        $order->delete();

        return redirect('/admin/dashboard/order/pending');
    }
    public function browse($id){
        $order = Order::findOrFail($id);
        $order->status = 'Approved';
        $order->save();
        return redirect('/admin/dashboard/order/pending');
    }

    
}

