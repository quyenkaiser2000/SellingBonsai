<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
class SocicalController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback(){
        $googleUser = Socialite::driver('google')->stateless()->user();
        //dd($googleUser);
        if(!$googleUser){
            return redirect('/login');
        }
        $dtuser = User::where('google_id',$googleUser->id)->first();
        if(!$dtuser){
            $dtuser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
            ]);
        }
       Auth::login($dtuser);
       return redirect('/');
    }


    public function redirectFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback(){
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
          //  dd($facebookUser);
        if(!$facebookUser){
            return redirect('/login');
        }
        
        $SystemUsers = User::firstOrCreate(
            ['facebook_id'=>$facebookUser->id],
            [
                'name' => $facebookUser->name,
                'facebook_id' => $facebookUser->id,
            ]
        );
       Auth::loginUsingId($SystemUsers->id);
       return redirect('/');
    }

}
