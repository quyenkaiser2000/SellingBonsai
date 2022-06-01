<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\ProductComment;
use Illuminate\Support\Arr;
class ShopController extends Controller
{
    //
    

    public function show($id){
        $productids = Product::findOrFail($id);

        $price = $productids->price - (($productids->discount * $productids->price)/100);
        
        $relatedproducts = Product::where('product_category_id',$productids->product_category_id)->where('status', '=', 1)->where('status_delete', '=', 1)->limit(10)->get();
      
        $productcomments = ProductComment::where('product_id',$id)->paginate(5);
        $agvRating = 0;
        //luu tong xep hang
        $sumRating = array_sum(array_column($productids->productcomments->toArray(),'rating'));
        //luu so luong xep hang
        $countRating = count($productids->productcomments);
        if($countRating != 0)
        {
          $agvRating = $sumRating/$countRating;
        }

        $rating5 = ProductComment::all()->where('product_id',$id)->where('rating',5);
        $rating4 = ProductComment::all()->where('product_id',$id)->where('rating',4);
        $rating3 = ProductComment::all()->where('product_id',$id)->where('rating',3);
        $rating2 = ProductComment::all()->where('product_id',$id)->where('rating',2);
        $rating1 = ProductComment::all()->where('product_id',$id)->where('rating',1);
        return view('front.detailproduct',compact('productids','price','relatedproducts','agvRating','productcomments','rating5','rating4','rating3','rating2','rating1'));
    }

    public function comment(Request $request){
      ProductComment::create($request->all());
      return redirect()->back();
    }



    public function shopnow(Request $request){

      $perpage = $request->show ?? 6;
      $sortby = $request->sort_by ?? 1;
      $search = $request->search ?? '';

      $products = Product::where('name','like','%'. $search .'%')->where('status_delete', '=', 1);
      
     

      $productcategory = ProductCategory::all()->where('status_delete', '=', 1);
      $productbrands = Brand::all()->where('status_delete', '=', 1);
      //  dd($productcategory);

      $products = $this->filter($products,$request);
      $products = $this->sortPagination($products,$sortby,$perpage);
      

      return view('front.shopnow',compact('products','productcategory','productbrands'));
    }


    public function category($categoryname, Request $request){
      $perpage = $request->show ?? 6;
      $sortby = $request->sort_by ?? 1;


      $productcategory = ProductCategory::all()->where('status_delete', '=', 1);
      $productbrands = Brand::all()->where('status_delete', '=', 1);

      $category = ProductCategory::where('name',$categoryname)->where('status_delete', '=', 1)->first();
      if(count($category->products)){
        $products = $category->products->toquery();
        $products = $this->filter($products,$request);
        $products = $this->sortPagination($products,$sortby,$perpage);
      }
      else{
        $products = null;
      }
      
      
      return view('front.shopnow',compact('products','productcategory','productbrands'));
      
    }


    public function brand($brandname, Request $request){
      $products = Product::all()->where('status_delete', '=', 1);
      $productcategory = ProductCategory::all()->where('status_delete', '=', 1);
      $productbrands = Brand::all()->where('status_delete', '=', 1);
      
      $products = Brand::where('name',$brandname)->first()->products->toquery();

      $perpage = $request->show ?? 6;
      $sortby = $request->sort_by ?? 1;
      $products = $this->sortPagination($products,$sortby,$perpage);
      return view('front.shopnow',compact('products','productcategory','productbrands'));
      
    }
    public function sortPagination($products,$sortby,$perpage){
      switch ($sortby){
        case 1:
          $products = $products->where('status_delete', '=', 1)->orderBy('id');
          break;
        case 2:
          $products = $products->where('status_delete', '=', 1)->orderBy('name');
          break;
        case 3:
          $products = $products->where('status_delete', '=', 1)->orderBy('price');
          break;
        case 4:
          $products = $products->where('status_delete', '=', 1)->orderByDesc('price');
          break;
        default:
          $products = $products->where('status_delete', '=', 1)->orderBy('id');
      }




      $products = $products->paginate($perpage);

      $products->appends(['sort_by' => $sortby,'show' => $perpage]);

      return $products;
    }




    public function filter($products, Request $request){
      //brand
      $brands = $request->brand ?? [];
      $brand_ids = array_keys($brands);
      $products  =  $brand_ids != null ? $products->whereIn('brand_id',$brand_ids) : $products;
      if($request->money == 'tren-1tr')
      {
        $products = ($request->money != null) ? $products->where('price','>',1000000) : $products;
        
      }
      if($request->money == 'duoi-100-nghin')
      {
        $products = ($request->money != null) ? $products->where('price','<',100000) : $products;
      }
      if($request->money == 'tu-100-den-500')
      {
        $products = ($request->money != null) ? $products->whereBetween('price',[100000,500000]) : $products;
      }
      if($request->money == 'tu-500-den-1tr')
      {
        $products = ($request->money != null) ? $products->whereBetween('price',[500000,1000000]) : $products;
      }
      return $products;


      //price
    }


    
   
}
