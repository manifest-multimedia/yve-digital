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

if (! function_exists('SMSnotify')){
    function SMSnotify($destination, $message){
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://l4rr2.api.infobip.com/sms/2/text/advanced',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"messages":[{"from":"ManifestGH",
                "destinations":[{"to":'.$destination.'}],
                "text":'.$message.'}]}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: App f584b3866283b93034ab857f1436cbe0-f281cf22-2662-4e2f-b6eb-56d94fbf99f0',
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
    
        return $response;
    }
    
}



?>