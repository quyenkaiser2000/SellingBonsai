<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiscountCode;
use Carbon\Carbon;
class DiscountController extends Controller
{
    public function index(){
        $discounts = DiscountCode::select('id','name','description','discount','code','start_day','end_day')->where('end_day', '>=', Carbon::now())->where('start_day', '<=', Carbon::now())->get();
        
        return view('front.discount',compact('discounts'));
    }
}
