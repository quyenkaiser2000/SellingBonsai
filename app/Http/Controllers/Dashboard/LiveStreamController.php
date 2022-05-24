<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LiveStreamController extends Controller
{
    public function index(){
        return view('livestream.lobby');
    }
    public function joinlive(){
        return view('livestream.room');
    }
}
