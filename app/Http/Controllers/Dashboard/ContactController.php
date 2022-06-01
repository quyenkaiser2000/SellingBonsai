<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('dashboard.contact',compact('contacts'));
    }
    public function detail($id){ 
        $contact = Contact::findOrFail($id);
        return view('dashboard.detailcontact',compact('contact'));

    }
}
