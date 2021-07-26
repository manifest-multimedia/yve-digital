<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterAuthController extends Controller
{
 
    // Redirect 
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    // Handle Callback
    public function handleTwitterCallback(){
        try {
        
            $user = Socialite::driver('twitter')->user();
         
            $finduser = User::where('twitter_id', $user->id)->first();
        
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->intended('dashboard');
         
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
        
                Auth::login($newUser);
        
                return redirect()->intended('dashboard');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    
}
