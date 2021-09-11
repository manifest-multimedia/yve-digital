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

        
        $username=$this->user->username;
       
        $royalties =""; 

        $totalStreams=Royalties::where('username', '=', $username)->sum('total_streams');
        
        $youtubeStreams=getTotalStreams($username, 'YouTube');
        
        $spotifyStreams=getTotalStreams($username, 'Spotify'); 

        $appleStreams=getTotalStreams($username, 'Apple'); 
        
        $otherStreams=  getTotalStreams($username, 'Deezer') + 
                        getTotalStreams($username, 'Vimeo') +
                        getTotalStreams($username, 'Vevo') +
                        getTotalStreams($username, 'Tidal');

        return view('dashboard', compact('user', 
        'royalties', 
        'totalStreams', 
        'youtubeStreams',
        'spotifyStreams', 
        'appleStreams', 
        'otherStreams'
    ));

    }
}
