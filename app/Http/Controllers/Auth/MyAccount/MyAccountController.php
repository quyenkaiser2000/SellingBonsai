<?php

namespace App\Http\Controllers\Auth\MyAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MyAccountController extends Controller
{
    
    public function show(){
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        return view('auth.myaccount.index',compact('user'));
    }

    
    
    
}
