<?php
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











?>