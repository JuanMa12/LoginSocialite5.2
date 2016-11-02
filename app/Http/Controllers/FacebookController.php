<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function loginFacebook()
    {
        $providerUser = \Socialite::driver('facebook')->user();
        dd($providerUser);
       return view('result',compact('providerUser'));
    }

}