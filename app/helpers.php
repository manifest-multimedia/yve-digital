<?php

use Carbon\Carbon;

if (! function_exists('releases')) {
    
    function releases($user) {

        $selected_user=$user; 

        DB::table('royalties')->where('username', $selected_user)->get();
        

    
    }
}


if (! function_exists('getUsers')) {
    
    function getUsers() {

     

        $users = DB::table('users')->get();
        return $users; 
    
    }
}



if (! function_exists('getTotalStreams')) {
    
    function getTotalStreams($username, $platform) {
     
     $username=$username;
     $platform=$platform; 
    
     $streams=DB::table('royalties')->where('username', $username)
     ->where('platform', $platform)->sum('total_streams');
     return $streams; 
     }
    
    }

if (! function_exists('getTotalDownloads')) {

    function getTotalDownloads($username, $platform) {
        
        $username=$username;
        $platform=$platform; 
    
        $downloads=DB::table('royalties')->where('username', $username)
        ->where('platform', $platform)->sum('downloads');
        return $downloads; 
        }
    
    }




    if (! function_exists('retrieveMonths')) {

        function retrieveMonths($period) {
                      
        $period=explode(" ",$period); 

        $start=date('F',strtotime($period[0]));
        $start.=' ' . date('Y', strtotime($period[0])); 

       //dd($start);
        
        // $end=$period[2];

        // $format=Carbon::createFromDate('Y-m-d','2021,08,19')->setTimeZone('UTC'); 

        // $month=$format->format('F'); 

        return $start; 

        
        }
        
        }






?>