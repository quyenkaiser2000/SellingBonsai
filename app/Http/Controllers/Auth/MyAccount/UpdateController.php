<?php

namespace App\Http\Controllers\Auth\MyAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
class UpdateController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);
        return view('auth.myaccount.myaccount_update',compact('user'));
    }

    
    public function update(Request $request, $id)
    {   
        $upUser = User::findOrFail($id);
        
      
      if($request->name != null && $request->email != null && $request->address != null && $request->phone != null )
        {
            $upUser->name = $request->name;
            $upUser->email =  $request->email;
            $upUser->address = $request->address;
            $upUser->phone = $request->phone;
            //dd( $upUser->address);
            if($request->birthday != null){
                $request['birthday'] = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');
            
                $upUser->birthday = $request['birthday'];
            }
            else{
                $upUser->birthday = $request['birthday'];
            }

            $upUser->gender = $request->gender;


            $upUser->save();
            if($request->avatar != null)
            {
                if($request->hasFile('avatar'))
                {
                    $destination_path = 'public/Linkimageproduct';
                    $avatar = $request->file('avatar');
                    $avatar_name = $avatar->getClientOriginalName();
                    $path = $request->file('avatar')->storeAs( $destination_path,$avatar_name);
                
                    $upUser->avatar = $avatar_name;
                    $upUser->save();
                }
            }
        }
        return redirect()->back();
        
    }

    public function deleteavatar(Request $request){
        $useravatar = User::find($request->avatar_id);
        
       if($useravatar->avatar != null && Storage::disk('public')->exists('Linkimageproduct/'.$useravatar->avatar)){
            Storage::disk('public')->delete('Linkimageproduct/'.$useravatar->avatar);

        }
        if($useravatar->avatar != null)
        {
            $useravatar->avatar = null;
            $useravatar->save();
        }
      
        
    }


    
}
