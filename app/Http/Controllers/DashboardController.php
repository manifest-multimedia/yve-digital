<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Royalties; 


class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public $user;  

    public function __invoke(Request $request)

    {
        $this->user=Auth::user(); 

        return view('dashboard')->compact('user');
    }
}
