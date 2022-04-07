<?php

namespace App\Http\Controllers\Auth\MyAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class ChangePasswordController extends Controller
{
    //
    public function show($id){
            $user = User::findOrFail($id);

            return view('auth.myaccount.myaccount_changepassword',compact('user'));
    
    }
    public function changepas(Request $request,$id){
       

        $erroremail  = session('erroremail');
        $errorpas  = session('errorpas');
        $errorconfirmpas  = session('errorconfirmpas');
        $success = session('success');
            $changepas = User::findOrFail($id);
            if($request->email != $changepas->email )
            {
                return redirect()->back()->with('erroremail', 'Email không chính xác');
            }
            else{
                if (Hash::check($request->current_password, $changepas->password)) {
                    if($request->new_password != $request->confirm_password)
                    {
                        return redirect()->back()->with('errorconfirmpas', 'Mật khẩu nhập lại không chính xác');

                    }
                    else{
                        $changepas->password = Hash::make($request->new_password);
                        $changepas->save();
                        return redirect()->back()->with('success',"Đổi mật khẩu thành công");

                    }
                }
                else{
                    return redirect()->back()->with('errorpas', 'Mật khẩu không chính xác');

                }
            }
            
           

        
    }
    
}
