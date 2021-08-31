<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Royalties; 

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     

    public function __invoke(Request $request)

    // Pull Details from DB for Display in the User Dashboard

    {
        $user=Auth::user(); 
        
        return view('dashboard', compact('user'));
    }
}
