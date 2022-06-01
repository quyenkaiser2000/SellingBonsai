<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all()->where('status_delete', '==', '1');
        
        //dd($brands);
        return view('dashboard.brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.crudbrand.createbrand');
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
            'name' => 'required|unique:brands|max:255',
        ]);
        $data = $request->all();
        Brand::create($data);
        
        return redirect()->route('brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        //dd($brand);
        //
        return view('dashboard.crudbrand.detailbrand',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        //dd($brand);
        //
        return view('dashboard.crudbrand.updatebrand',compact('brand'));
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
        
        
            $brand =  Brand::find($id);
            
            if($request->name != $brand->name) {
                $validated = $request->validate([
                    'name' => 'required|unique:brands|max:255',
                ]);
            }
            else{
                $validated = $request->validate([
                    'name' => 'required|max:255',
                ]);
            }
            //dd($request->name);
            //dd($data);
            $brand->name = $request->input('name');
            $brand->save();
            return redirect()->route('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status_delete = '0';
        $brand->save();
        return redirect()->back();
    }
}
