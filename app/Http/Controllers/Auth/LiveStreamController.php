<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LiveStreamController extends Controller
{
    public function index(){
        return view('livestream.lobby-user');
    }
    public function joinlive(){
        return view('livestream.room-user');
    }
}
