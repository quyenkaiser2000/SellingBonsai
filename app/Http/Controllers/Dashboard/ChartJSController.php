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
    public function index(Request $request){
        //$daytime = $request->show ?? day;
        
        
        $querys = DB::select(DB::raw("select DATE_FORMAT(created_at, '%Y-%m-%d') as Day,SUM(total) as Total from order_details GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d')"));
            //dd($querys);
            $stringdate= null;
            $total= null;
            foreach($querys as $query){
                $timenowformat=Carbon::now()->subDays(7);
                $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y-m-d');
                
                $timeformatnew = Carbon::createFromFormat('Y-m-d', $query->Day)->format('Y-m-d');
                
                if($timeformatnew >= $timenowformat)
                {
                    $timeformatnew = '"'.''."$timeformatnew".''.'"'.''.",";
                    $stringdate .= $timeformatnew;
        
                    $stringtotal = $query->Total.''.",";
                    $total .= $stringtotal;
                }
            
            }
        if($request->show == 'day')
        {
            $querys = DB::select(DB::raw("select DATE_FORMAT(created_at, '%Y-%m-%d') as Day,SUM(total) as Total from order_details GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d')"));
            //dd($querys);
            $stringdate= null;
            $total= null;
            foreach($querys as $query){
                $timenowformat=Carbon::now()->subDays(7);
                $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y-m-d');
                
                $timeformatnew = Carbon::createFromFormat('Y-m-d', $query->Day)->format('Y-m-d');
                
                if($timeformatnew >= $timenowformat)
                {
                    $timeformatnew = '"'.''."$timeformatnew".''.'"'.''.",";
                    $stringdate .= $timeformatnew;
        
                    $stringtotal = $query->Total.''.",";
                    $total .= $stringtotal;
                }
            
            }
        }
        if($request->show == 'month'){
            $querys = DB::select(DB::raw("select DATE_FORMAT(created_at, '%Y-%m') as Day,SUM(total) as Total from order_details GROUP BY DATE_FORMAT(created_at, '%Y-%m')"));
            //dd($querys);
            $stringdate= null;
            $total= null;
            foreach($querys as $query){
                $timenowformat=Carbon::now();

                $timenowyearformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y');

                $timeformatnewyear = Carbon::createFromFormat('Y-m', $query->Day)->format('Y');

                $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y-m');

                $timeformatnew = Carbon::createFromFormat('Y-m', $query->Day)->format('Y-m');
                
                if($timeformatnewyear == $timenowyearformat)
                {
                    $timeformatnew = '"'.''."$timeformatnew".''.'"'.''.",";
                    $stringdate .= $timeformatnew;
        
                    $stringtotal = $query->Total.''.",";
                    $total .= $stringtotal;

                    
                }
            
            }
        }
        if($request->show == 'year'){
            $querys = DB::select(DB::raw("select DATE_FORMAT(created_at, '%Y') as Day,SUM(total) as Total from order_details GROUP BY DATE_FORMAT(created_at, '%Y')"));
            //dd($querys);
            $stringdate= null;
            $total= null;
            foreach($querys as $query){
                $timenowformat=Carbon::now()->subYear(4);
                $timenowyearformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y');

                $timeformatnewyear = Carbon::createFromFormat('Y', $query->Day)->format('Y');

                $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y-m');

                $timeformatnew = Carbon::createFromFormat('Y', $query->Day)->format('Y-m');
                
                if($timeformatnewyear >= $timenowyearformat)
                {
                    $timeformatnew = '"'.''."$timeformatnew".''.'"'.''.",";
                    $stringdate .= $timeformatnew;
        
                    $stringtotal = $query->Total.''.",";
                    $total .= $stringtotal;

                    
                }
            
            }
        }

        $newStringdate = rtrim($stringdate, ",");
        //dd($newStringdate);
        $newStringtotal = rtrim($total, ",");

        $timenow = Carbon::now();
        $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenow->toDateTimeString())->format('m/Y');
        $timenowformatyear = Carbon::createFromFormat('Y-m-d H:i:s', $timenow->toDateTimeString())->format('Y');

        $order_details = OrderDetail::all();
        $users = User::all();

        $product_user = DB::table('products')
                 ->select('user_id', DB::raw('count(user_id) as total'))
                 ->where('user_id','!=', null)
                 ->where('status','!=',0)
                 ->where('status_delete','!=',0)
                 ->groupBy('user_id')
                 ->get();
        //dd($product_user);

        
        

        return view('dashboard.chart_js',compact('newStringdate','newStringtotal','timenowformat','timenowformatyear','order_details','users','product_user'));
    }
    
}



       