<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Royalties;

if(!function_exists("getFirstName")){
    function getFirstName($name){
        $firstname=explode(' ', trim($name))[0];
        return $firstname; 
    }
}


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
    
    //  $streams=DB::table('royalties')->where('username', $username)
    //  ->where('platform', $platform)->sum('total_streams');

    $streams=Royalties::where('platform', $platform)->get()->sum('total_streams');
    
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
                "destinations":[{"to":"'.$destination.'"}],
                "text":"'.$message.'"}]}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: App f584b3866283b93034ab857f1436cbe0-f281cf22-2662-4e2f-b6eb-56d94fbf99f0',
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));

        /*

        #!/bin/bash

curl -X POST https://l4rr2.api.infobip.com/sms/2/text/advanced -H "Authorization: App f584b3866283b93034ab857f1436cbe0-f281cf22-2662-4e2f-b6eb-56d94fbf99f0" -H "Content-Type: application/json" --data-binary @- <<DATA
{"messages":
 [{
   "from":"ManifestGH",
  "destinations":[{"to":"0549539417"}],
  "text":"Test"
  
}
]}


DATA


        */
        
        $response = curl_exec($curl);
        
        curl_close($curl);
    
        return $response;
    }   
}


if (! function_exists('storePerformance')){

function storePerformance($username, $platform){

    // Itunes
    // Spotify 
    // Tidal
    // Amazon
    // Boomplay 

    $youtube=getTotalDownloads($username,'youtube'); 
    $spotify=getTotalDownloads($username, 'spotify'); 
    $applemusic=getTotalDownloads($username, 'Apple Music');
    // Others 
    $vimeo=getTotalDownloads($username,'vimeo');
    $deezer=getTotalDownloads($username,'deezer'); 
    $tidal=getTotalDownloads($username, 'tidal');
    $vevo=getTotalDownloads($username, 'vevo'); 
    $amazon=getTotalDownloads($username, 'amazon'); 

    $total=collect([
        $youtube,
        $spotify,
        $vimeo, 
        $deezer,
        $tidal, 
        $applemusic, 
        $vevo, 
        $amazon, 
        ])->sum(); 

        switch ($platform) {
            case 'youtube':
                # code...
                if ($youtube>0) {

                    $percentage= round($youtube/$total*100);
                } else {
                    $percentage=0; 
                }
                
                return $percentage;
                break;

            case 'spotify': 

                if ($spotify>0) {
                    # code...
                    $percentage= round($spotify/$total*100);
                } else {
                    # code...
                    $percentage=0; 
                }
                

                return $percentage;
                break; 

            case 'applemusic': 
                if ($applemusic>0) {
                    $percentage= round($applemusic/$total*100);
                    # code...
                } else {
                    # code...
                    $percentage=0; 
                }
                
                return $percentage;
                    break; 

            case 'vimeo': 
                if ($vimeo>0) {
                    # code...
                    $percentage= round($vimeo/$total*100);
                } else {
                    # code...
                    $percentage=0; 
                }
                
                return $percentage;
                    break; 

            case 'deezer': 
                if ($deezer>0) {
                    # code...
                    $percentage= round($deezer/$total*100);
                } else {
                    # code...
                    $percentage=0;
                }
                
                return $percentage;
                    break; 

            case 'other': 
                if ($vimeo>0 || $deezer>0 || $tidal>0 || $vevo>0 || $amazon>0)  {
                    $percentage=collect([$vimeo, $deezer, $tidal, $vevo, $amazon])->sum()/$total*100;
                    # code...
                } else {
                    # code...
                    $percentage=0;
                }
                
                return round($percentage);  
                    break; 

            case '': 
                #code...
                    break; 

            case '': 
                #code...
                    break; 

            default:
                return $total; 
                break;
        }

}
}

?>