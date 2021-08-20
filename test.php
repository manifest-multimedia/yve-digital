<?php 

#user oD5drjykFr7AWr5BAMGFEg==
#admin fxzycxCs6TLpDKb4QDK82Q==

function decrypt($value){
    
	$pass = 'i4seeSIC!';
    $method = 'AES-128-ECB';
    $value=$value;
	$error=""; 
	
	$process=openssl_decrypt($value, $method, $pass);

    return $process;
	
	
	
}

$value="fxzycxCs6TLpDKb4QDK82Q=="; 

$output=decrypt($value); 

print $output; 