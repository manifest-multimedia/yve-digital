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
	$release_name, 
	$song_name, 
	$stream, 
	$download, 
	$revenue, 
	$period_gained, 
	$image_file
){
	$artist=""; 

	$id = $id; 
	$no=$no; 
	$release_name=$release_name;
	$song_name=$song_name; 
	$stream=$stream;
	$download=$download;
	$revenue=$revenue; 
	$period_gained=$period_gained; 
	$image_file=$image_file; 
	
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

	
	$updaterecord="UPDATE my_royalties_tbl SET 
		username = '$username', 
		release_name ='$release_name',  
		song_name ='$song_name', 
		stream ='$stream', 
		download ='$download',
		revenue ='$revenue', 
		period_gained ='$period_gained', 
		image_file ='$image_file'
			
		WHERE id = '$id'";
	
	
	 if ($mysqli->query($updaterecord))
	{
		echo "<strong> Proccessed Successfully <hr /></strong>";
		
	} else 
	{ echo "<strong> Failed to update </strong>".mysqli_error($mysqli) ;}
	
	
	print "$id<br /> Processing Completed </hr />".$username.' | '.$no; 
	
	var_dump($mysqli); 
	
	}

$sql="SELECT * FROM my_royalties_tbl";

$result = $conn->query($sql); 

//var_dump($result); 

// mYAIxkm7hg3/tdAY4gll5A==
	if ($result->num_rows > 0) 
		{
			$no=0; 
			
			
			while($row =$result->fetch_assoc())
				{
					$id=$row['id'];
					$no+=1; 	
					$username=decrypt($row['username']);
					$release_name=decrypt($row['release_name']);
					$song_name=decrypt($row['song_name']);
					$stream=decrypt($row['stream']);
					$download=decrypt($row['download']);
					$revenue=decrypt($row['revenue']);
					$period_gained=decrypt($row['period_gained']);
					$image_file=decrypt($row['image_file']);
					//$status=decrypt($row['status']); 
					
					batchprocess(
					
					$id,
					$no, 
					$username, 
					$release_name, 
					$song_name, 
					$stream, 
					$download, 
					$revenue, 
					$period_gained, 
					$image_file

										);
					 
					}

	
			}


?> 