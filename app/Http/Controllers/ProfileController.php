<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function __invoke()

    
    {

        $title=null; 
        $description=null;

        $user=Auth::user();
        return view('profile', compact('user', 'title', 'description'));
    }

    // public function create();
}
