<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class KyguiController extends Controller
{
    public function show(){

        $products = Product::all()->where('user_id','<>',null)->where('status_delete', '=', 1);
        
        return view('dashboard.kygui.index',compact('products'));
    }


    public function active(){
        $products = Product::all()->where('status','1')->where('user_id','<>',null)->where('status_delete', '=', 1);

        
        return view('dashboard.kygui.active',compact('products'));
    }
    public function browse(){
        $products = Product::all()->where('status','0')->where('status_delete', '=', 1);

        
        return view('dashboard.kygui.browse',compact('products'));
    }
    public function showbrowse($id){
        $products = Product::findOrFail($id);
        $product2s = ProductImage::select('product_id','img')->where('product_id', $id)->get();

        $user_id  = $products->user_id;
        if($user_id != null){
            $user = User::findOrFail($user_id);
        }
        else{
            $user == null;
        }

        return view('dashboard.kygui.showbrowse',compact('products','product2s','user'));
    }
    public function browseproduct(Request $request,$id){
        $product = Product::findOrFail($id);
       
        $product->status  = '1';
        $product->save();
        return redirect('/admin/dashboard/kygui');
    }
    public function delete($id){
        $product = Product::findOrFail($id);

        $productimgs = ProductImage::all()->where('product_id',$id);
        
        foreach ($productimgs as $productimg)
        {
            if($productimg->img != null && Storage::disk('public')->exists('Linkimageproduct/'.$productimg->img)){
                Storage::disk('public')->delete('Linkimageproduct/'.$productimg->img);

            }
            $productimg->delete();

        }
        


        $product->delete();
        
        return redirect('/admin/dashboard/kygui');
    }
}
