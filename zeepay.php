<?php

$url = "https://business.instntmny.com/oauth/token";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "grant_type=password&client_id=17&client_secret=M1LuU1tJTXNyjZNpJaCuXsWwFkyn4EkxOSXLGesd&username=info%40cocoa360.org&password=3266669";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);
curl_close($curl);
//var_dump($response);


?> 

