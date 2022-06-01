<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newproducts = Product::latest()->where('status', '=', 1)->where('status_delete', '=', 1)->limit(10)->get();
        $bannernewproducts = Product::find(7);
       
        $products = Product::latest()->where('status', '=', 1)->where('status_delete', '=', 1)->limit(2)->get();
        
        
       /* $pricediscounts = Product::all();
        foreach ($pricediscounts as $pricediscount){
            $pricediscount = $pricediscount->price - (($pricediscount->discount * $pricediscount->price)/100);
        }*/
        


        $productcategory = ProductCategory::all()->where('status_delete', '=', 1);
        $productbrands = Brand::all()->where('status_delete', '=', 1);



       
        

        return view('front.index',compact('newproducts','bannernewproducts','products','productcategory','productbrands'));
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
}
