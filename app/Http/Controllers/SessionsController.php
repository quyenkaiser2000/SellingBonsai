<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        Cart::destroy();
        return redirect('/login');
    }
}
