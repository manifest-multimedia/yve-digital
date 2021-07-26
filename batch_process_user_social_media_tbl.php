<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="yvedigital"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "<strong> Batch Processing Data <hr /></strong>";

// No Connection Issues 

function decrypt($value){
    
	$pass = 'i4seeSIC!';
    $method = 'AES-128-ECB';
    $value=$value;
	$error=""; 
	
	$process=openssl_decrypt($value, $method, $pass);

    return $process;
	
	
	
}


function batchprocess(
	$id,
	$no, 
	$username, 
	$cust_phone, 
	$facebook_url, 
	$twitter_url, 
	$ig_url, 
	$status

){
	$artist=""; 

	$id = $id; 
	$no=$no; 
	$username=$username;
	$cust_phone=$cust_phone; 
	$facebook_url=$facebook_url;
	$twitter_url=$twitter_url;
	$ig_url=$ig_url; 
	$status=$status; 
	 
	
	$host = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname="yvedigital"; 

	// Create connection
	$mysqli = new mysqli($host, $dbuser, $dbpassword, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}

	
	$updaterecord="UPDATE user_social_media_tbl SET 
		username = '$username', 
		cust_phone ='$cust_phone',  
		facebook_url ='$facebook_url', 
		twitter_url ='$twitter_url', 
		ig_url ='$ig_url', 
		status ='$status'
			
		WHERE id = '$id'";
	
	
	 if ($mysqli->query($updaterecord))
	{
		echo "<strong> Proccessed Successfully <hr /></strong>";
		
	} else 
	{ echo "<strong> Failed to update </strong>".mysqli_error($mysqli) ;}
	
	
	print "$id<br /> Processing Completed </hr />".$username.' | '.$no; 
	
	var_dump($mysqli); 
	
	}

$sql="SELECT * FROM user_social_media_tbl";

$result = $conn->query($sql); 


	if ($result->num_rows > 0) 
		{
			$no=0; 
			
			
			while($row =$result->fetch_assoc())
				{
					$id=$row['id'];
					$no+=1; 	
					$username=decrypt($row['username']);
					$cust_phone=decrypt($row['cust_phone']);
					$facebook_url=decrypt($row['facebook_url']);
					$twitter_url=decrypt($row['twitter_url']);
					$ig_url=decrypt($row['ig_url']);
					$status=decrypt($row['status']); 
					
					batchprocess(
					
					$id,
					$no, 
					$username, 
					$cust_phone, 
					$facebook_url, 
					$twitter_url, 
					$ig_url, 
					$status
										);
					 
					}

	
			}


?> 