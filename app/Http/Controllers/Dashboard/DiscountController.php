<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiscountCode;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class DiscountController extends Controller
{
    public function index(){
        $discounts = DiscountCode::all();
        return view('dashboard/discount',compact('discounts'));
    }


    public function show($id){
        $discount = DiscountCode::findOrFail($id);

        return view('dashboard/cruddiscount/detaildiscount',compact('discount'));
    }
    public function edit($id){
        $discount = DiscountCode::findOrFail($id);

        return view('dashboard/cruddiscount/detaildiscount',compact('discount'));
    }
    public function update(Request $request,$id){
        
        $errorstartday  = session('errorstartday');
        $errorendday  = session('errorendday');
        $discount = DiscountCode::findOrFail($id);


        $coded = DiscountCode::all();
        
        foreach ($coded as $code){
            
            if($code->code == $request->code) {
                return redirect()->back()->with('errorcode', 'Mã code đã tồn tại');
                break;

            }
        }
        $discount->name = $request->name;
        $discount->description = $request->description;
        $discount->discount = $request->discount;
        $discount->code = $request->code;

        $request['start_day'] = Carbon::createFromFormat('d/m/Y', $request->start_day)->format('Y-m-d');
        $request['end_day'] = Carbon::createFromFormat('d/m/Y', $request->end_day)->format('Y-m-d');

        $timenow = Carbon::now();
        $timenow = Carbon::createFromFormat('Y-m-d H:i:s', $timenow)->format('Y-m-d');
        

        if($request['start_day'] < $timenow)
        {
            return redirect()->back()->with('errorstartday', 'Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại');
            
        }
        if($request['start_day'] >= $timenow)
        {
            if($request['start_day'] > $request['end_day'])
            {
                return redirect()->back()->with('errorendday', 'Ngày kết thúc phải lớn hơn ngày bắt đầu');
                
            }
        }

        
        
        $discount->start_day = $request['start_day'];
        $discount->end_day = $request['end_day'];

        $discount->save();
        return redirect()->back();

    }
    public function create(){
        return view('dashboard/cruddiscount/creatediscount');
    }
    public function store(Request $request){
        
        $request['start_day'] = Carbon::createFromFormat('d/m/Y', $request->start_day)->format('Y-m-d');
        $request['end_day'] = Carbon::createFromFormat('d/m/Y', $request->end_day)->format('Y-m-d');

        $timenow = Carbon::now();
        $timenow = Carbon::createFromFormat('Y-m-d H:i:s', $timenow)->format('Y-m-d');
        

        if($request['start_day'] < $timenow)
        {
            return redirect()->back()->with('errorstartday', 'Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại');
            
        }
        if($request['start_day'] >= $timenow)
        {
            if($request['start_day'] > $request['end_day'])
            {
                return redirect()->back()->with('errorendday', 'Ngày kết thúc phải lớn hơn ngày bắt đầu');
                
            }
        }

        $coded = DiscountCode::all();
        
        foreach ($coded as $code){
            
            if($code->code == $request->code) {
                return redirect()->back()->with('errorcode', 'Mã code đã tồn tại');
                break;

            }
        }


        $discount = new DiscountCode([
            'name' => $request->name,
            'description' => $request->description,
            'discount' => $request->discount,
            'code' => $request->code,
            'start_day' => $request['start_day'],
            'end_day' =>$request['end_day'],
           
        ]);
        $discount->save();
        return redirect('/admin/dashboard/discount');
    }
}
