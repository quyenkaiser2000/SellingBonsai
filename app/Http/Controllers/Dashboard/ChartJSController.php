<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Redirect,Response;
class ChartJSController extends Controller
{
    //
    public function index(){
        

        $query = DB::select(DB::raw("select (MONTHNAME(created_at)) as Month,SUM(total) as Total from order_details GROUP BY (MONTHNAME(created_at)) ORDER BY created_at ASC"));

        //dd($query);
        $data ="";
        foreach ($query as $row) {
            
            $data.="['".$row->Month."',     ".$row->Total."],";
        }  
//dd($data);
        return view('dashboard.chart_js',compact('data'));
    }
    
}
