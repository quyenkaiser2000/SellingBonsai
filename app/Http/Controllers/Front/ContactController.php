<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        return view('front.contact');
    }
    public function message(Request $request){
        Contact::create($request->all());
        return redirect()->back();
    }
}
