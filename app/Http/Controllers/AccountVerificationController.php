<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountVerificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('account.account-verification');

    }

    public function CompleteSetup(){
        return view('account.complete-setup');
    }

    public function UpdateAccount(){
        return view('account.account-update'); 
    }

    public function ProcessUpdate(Request $request){
        
        //Get ID
        $username=$request->username; 

        return view('account.account-update', compact('username'));


    }
}
