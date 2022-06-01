<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategorys = productCategory::all()->where('status_delete','==','1');
        
        //dd($products);
        return view('dashboard.productcategory',compact('productCategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.crudproductcategory.createproductcategory');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:product_categories|max:255',
        ]);

        if($request->hasFile('img'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('img')->storeAs( $destination_path,$image_name);
           
            $productCategory = new ProductCategory([
                'name' => $request->name,
                'img' => $image_name,
            ]);
            $productCategory->save();
            
            
        }
        else{
            $productCategory = new ProductCategory([
                'name' => $request->name,
                'img' => null,
            ]);
            $productCategory->save();
        }
        
        return redirect()->route('productcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $productCategory = ProductCategory::findOrFail($id);
        //dd($productCategory);
        //
        return view('dashboard.crudproductcategory.detailproductcategory',compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $productCategory = ProductCategory::findOrFail($id);
        //dd($brand);
        //
        return view('dashboard.crudproductcategory.updateproductcategory',compact('productCategory'));
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
        
        $productCategory =  ProductCategory::find($id);

        if($request->name != $productCategory->name){
            $validated = $request->validate([
                'name' => 'required|unique:product_categories|max:255',
            ]);
        }
        else{
            $validated = $request->validate([
                'name' => 'required|max:255',
            ]);
        }
        //dd($request->name);
        //dd($productCategory);
        $productCategory->name = $request->input('name');
        if($request->hasFile('img'))
            {
                $destination_path = 'public/Linkimageproduct';
                $image = $request->file('img');
                $image_name = $image->getClientOriginalName();
                $path = $request->file('img')->storeAs( $destination_path,$image_name);
            
                $productCategory->img = $image_name;
                $productCategory->save();
            }
        
        $productCategory->save();
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
        //
    }
    public function deleteimg(Request $request){
        $productCategory = ProductCategory::find($request->img_id);

       if($productCategory->img != null && Storage::disk('public')->exists('Linkimageproduct/'.$productCategory->img)){
            Storage::disk('public')->delete('Linkimageproduct/'.$productCategory->img);

       }
        $productCategory->img = null;
        $productCategory->save();
        return redirect()->back();
    }
    public function delete($id){
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->status_delete = '0';
        $productCategory->save();

        return redirect()->back();
    }
}
