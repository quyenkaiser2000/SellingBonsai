<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('status','1');
        
        //dd($products);
        return view('dashboard.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        
        //dd($brands);
        return view('dashboard.crudproduct.createproduct',compact('brands','productcategories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $product = Product::all();
       

       // dd($input);
        $brand_id =  $input['brand_id'];
        $brand_id1 = Brand::select('id')->where('name', $brand_id)->get();
        $brand_id2 = ($brand_id1[0]);
        //dd($brand_id2['id']);
        $input['brand_id'] = $brand_id2['id'];
        
        $product_category_id =  $input['product_category_id'];
        $product_category_id1 = ProductCategory::select('id')->where('name', $product_category_id)->get();
        $product_category_id2 = ($product_category_id1[0]);
        //dd($product_category_id2['id']);
        $input['product_category_id'] = $product_category_id2['id'];
        
       /* $product = new Product;
       
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->discount = $request->discount;
        $product->brand_id = $input['brand_id'];
        $product->product_category_id = $input['product_category_id'];

        $product->save();*/ 
        
        $product = new Product([
            'brand_id' => $input['brand_id'],
            'product_category_id' => $input['product_category_id'],
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'qty'=> $request->qty,
            'discount' => $request->discount,
            'status' => '1'
           
        ]);
        $product->save();
        //dd($input['path']);
       
        //$product::create();


        if($request->hasFile('img'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('img')->storeAs( $destination_path,$image_name);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img1'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image1 = $request->file('img1');
            $image_name1 = $image1->getClientOriginalName();
            $path1 = $request->file('img1')->storeAs( $destination_path,$image_name1);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name1,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img2'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image2 = $request->file('img2');
            $image_name2 = $image2->getClientOriginalName();
            $path2 = $request->file('img2')->storeAs( $destination_path,$image_name2);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name2,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img3'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image3 = $request->file('img3');
            $image_name3 = $image3->getClientOriginalName();
            $path3 = $request->file('img3')->storeAs( $destination_path,$image_name3);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name3,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img4'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image4 = $request->file('img4');
            $image_name4 = $image4->getClientOriginalName();
            $path4 = $request->file('img4')->storeAs( $destination_path,$image_name4);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name4,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img5'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image5 = $request->file('img5');
            $image_name5 = $image5->getClientOriginalName();
            $path5 = $request->file('img5')->storeAs( $destination_path,$image_name5);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name5,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        if($request->hasFile('img6'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image6 = $request->file('img6');
            $image_name6 = $image6->getClientOriginalName();
            $path6 = $request->file('img6')->storeAs( $destination_path,$image_name6);
           
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => $image_name6,
            ]);
            $productimage->save();
            
            
        }
        else{
            $productimage = new ProductImage([
                'product_id' => $product->id,
                'img' => null,
            ]);
            $productimage->save();
        }
        
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
       // dd($products);
        //$product1 = $product['id'];
        $product2s = ProductImage::select('product_id','img')->where('product_id', $id)->get();
        
     //   dd($product2s);
        
       // dd($product2);
        //
        return view('dashboard.crudproduct.detailproduct',compact('products','product2s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        $product = Product::findOrFail($id);
       // dd($products);
        //$product1 = $product['id'];
        $product2s = ProductImage::select('id','product_id','img')->where('product_id', $id)->get();
       // dd($product2s);
        $product2s0= $product2s[0];
        $product2s1= $product2s[1];
        $product2s2= $product2s[2];
        $product2s3= $product2s[3];
        $product2s4= $product2s[4];
        $product2s5= $product2s[5];
        $product2s6= $product2s[6];
        
        
       // dd($product2);
        //
        return view('dashboard.crudproduct.updateproduct',compact('product','product2s','brands','productcategories','product2s0','product2s1','product2s2','product2s3','product2s4','product2s5','product2s6'));
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
        
        $input = $request->all();
      // dd($input);
        $product  = Product::find($id);
        
        if($input['brand_id'] != null){
            $brand_id =  $input['brand_id'];
            $brand_id1 = Brand::select('id')->where('name', $brand_id)->get();
            $brand_id2 = ($brand_id1[0]);
            //dd($brand_id2['id']);
            $input['brand_id'] = $brand_id2['id'];
        }
        else{
            $input['brand_id'] = $product->brand_id;
        }
        
        if($input['product_category_id'] != null)
        {
            $product_category_id =  $input['product_category_id'];
            $product_category_id1 = ProductCategory::select('id')->where('name', $product_category_id)->get();
            $product_category_id2 = ($product_category_id1[0]);
            //dd($product_category_id2['id']);
            $input['product_category_id'] = $product_category_id2['id'];
        }
        else{
            $input['product_category_id'] = $product->product_category_id;
        }
        


        $product->name = $request->input('name');
        $product->brand_id =  $input['brand_id'];
        $product->product_category_id = $input['product_category_id'];
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->discount = $request->input('discount');


        $product->save();


        if($request['id-productimg'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg']);
            
            if($request->hasFile('img'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg1'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg1']);
            
            if($request->hasFile('img1'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img1');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img1')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg2'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg2']);
            
            if($request->hasFile('img2'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img2');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img2')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg3'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg3']);
            
            if($request->hasFile('img3'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img3');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img3')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg4'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg4']);
            
            if($request->hasFile('img4'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img4');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img4')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg5'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg5']);
            
            if($request->hasFile('img5'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img5');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img5')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        if($request['id-productimg6'] != null)
        {
            $productimg = ProductImage::findOrFail($request['id-productimg6']);
            
            if($request->hasFile('img6'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img6');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img6')->storeAs( $destination_path,$image_name);
            
                $productimg->img = $image_name;
                $productimg->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /* $productimg = ProductImage::find($id);
        dd($productimg);
        /*

      // dd($id);
        
      // dd($product1);

        $destination_path = '/storage/Linkimageproduct/'.$id;
        if(Storage::exists($destination_path)){
            Storage::delete($destination_path);
        }
        
        //dd($destination_path);
        $product1 = ProductImage::select('product_id')->where('img', $id)->get();
        //dd($product1);
        $product3  = Product::find($product1);
        //dd($product3[0]);
        $product3[0]->delete();
      
        $productimg = ProductImage::select('id','img','img1','img2','img3','img4','img5','img6')->where('img', $id)->get();
        $productimg2 = ($productimg[0]);
        //dd($productimg2);
        $productimg3  = ProductImage::find($productimg2);
        //dd($productimg3[0]->img);
        if($id == $productimg3[0]->img){
            $productimg3[0]->img = null;
           
        }
        $productimg3[0]->save();
        //$productimg3[0]->delete();
        
        //dd($product1);
        $product = Product::find($product2);
        $product3 = ProductImage::findOrFail($product2);
        
        //dd($product3->img);
        
       // dd($product2);
        //
        
        return redirect()->back();*/
    }
    public function deleteimg(Request $request){
        $productimg = ProductImage::find($request->img_id);

       if($productimg->img != null && Storage::disk('public')->exists('Linkimageproduct/'.$productimg->img)){
            Storage::disk('public')->delete('Linkimageproduct/'.$productimg->img);

       }
        $productimg->img = null;
        $productimg->save();
        return redirect()->route('product');
    }
}
