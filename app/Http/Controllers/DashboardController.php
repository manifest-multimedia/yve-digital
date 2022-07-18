<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Royalties; 
use App\Models\Release; 
use App\Models\Song; 
use DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public $user;  
    public $revenue;
    public function __invoke(Request $request)

    {
        $user=Auth::user(); 

        $username=$user->username;
       
        $royalties =""; 
        

        $totalStreams=Royalties::where('username', $username)->sum('total_streams');
        $revenue=Royalties::where('username', $username)->sum('revenue');
        $downloads=Royalties::where('username', $username)->sum('downloads');
        
        $youtubeStreams=getTotalStreams($username, 'YouTube');
        
        $spotifyStreams=getTotalStreams($username, 'Spotify'); 

        $appleStreams=getTotalStreams($username, 'Apple Music'); 
        
        $otherStreams=  getTotalStreams($username, 'Deezer') + 
                        getTotalStreams($username, 'Vimeo') +
                        getTotalStreams($username, 'Vevo') +
                        getTotalStreams($username, 'Tidal')+
                        getTotalStreams($username, 'Amazon');

        $releases=Release::where('username', $username)->get()->unique()->count();
        $songs=Song::where('username', $username)->get()->unique()->count(); 
        $data=[
        [

            "name"=>"Manage",
            "icon"=>"settings", 
            "url"=>"royalties", 
            "type"=>"warning"

        ], 
        [

            "name"=>"Release",
            "icon"=>"library_add", 
            "url"=>"new-release", 
            "type"=>"success"

        ], 
        
        [

            "name"=>"Upload",
            "icon"=>"upload", 
            "url"=>"upload-songs", 
            "type"=>"success"

        ], 
        
        [

            "name"=>"Support",
            "icon"=>"help", 
            "url"=>"https://support.yvedigital.com", 
            "type"=>"primary"

        ], 
       
    
    ]; 

        return view('dashboard', compact('user', 
        'royalties', 
        'releases',
        'totalStreams', 
        'youtubeStreams',
        'spotifyStreams', 
        'appleStreams', 
        'otherStreams',
        'downloads', 
        'data', 
        'songs',
        'revenue'
    ));

    }


    public function Royalties(){
       
        $revenue=Royalties::sum('revenue');
        return view('royalties',compact('revenue')); 
    }

}
