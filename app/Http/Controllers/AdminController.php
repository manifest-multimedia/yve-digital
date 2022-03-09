<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Royalties; 
use App\Models\Release; 
use App\Models\Song; 
use DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;



class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // use LaravelDaily\LaravelCharts\Classes\LaravelChart;

     public function __invoke(Request $request)
    {
        

        $chart_options=[
            'chart_title' => 'Streams', 
            'report_type' => 'group_by_date', 
            'model' => 'App\Models\Royalties',
            'group_by_field' => 'created_at',
            'group_by_period'=> 'month',
            'filter_field'   => 'created_at',

            'conditions' => [
                [
                    'name'=>'user', 
                    'condition'=>"username="."\"".Auth::user()->username."\""."&& platform='spotify'", 
                    'color'=>'orange', 
                    'fill' => true
                ], 
                
            ], 
            'chart_type' => 'line'
        ]; 

        $chart_options2=[
            'chart_title' => 'Downloads', 
            'report_type' => 'group_by_date', 
            'model' => 'App\Models\Royalties',
            'group_by_field' => 'created_at',
            'group_by_period'=> 'month',
            'filter_field'   => 'created_at',

            'conditions' => [
                [
                    'name'=>'user', 
                    'condition'=>"username="."\"".Auth::user()->username."\""."&& platform='spotify'", 
                    'color'=>'blue', 
                    'fill' => true
                ], 
                
            ], 
            'chart_type' => 'line'
        ]; 

        $chart1 = new LaravelChart($chart_options, $chart_options2); 


        $user=Auth::user(); 

        $username=$user->username;
       
        $royalties =""; 

        $totalStreams=Royalties::where('username', $username)->sum('total_streams');
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
            "url"=>"manage", 
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

    $data=json_decode(json_encode($data));

        return view('admin', compact(
        'user', 
        'royalties', 
        'releases',
        'totalStreams', 
        'youtubeStreams',
        'spotifyStreams', 
        'appleStreams', 
        'otherStreams',
        'downloads', 
        'chart1', 
        'data', 
        'songs'
       
    ));

    }
}
