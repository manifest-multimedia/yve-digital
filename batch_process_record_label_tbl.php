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
	$songs, 
	$status 
 

){
	$artist=""; 

	$id = $id; 
	$no=$no; 
	$username=$username;
	$release_name=$release_name; 
	$songs=$songs;
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

	
	$updaterecord="UPDATE record_label_songs_tbl SET 
		username = '$username', 
		release_name ='$release_name',  
		songs ='$songs', 
		status ='$status' 
			
		WHERE id = '$id'";
	
	
	 if ($mysqli->query($updaterecord))
	{
		echo "<strong> Proccessed Successfully <hr /></strong>";
		
	} else 
	{ echo "<strong> Failed to update </strong>".mysqli_error($mysqli) ;}
	
	
	print "$id<br /> Processing Completed </hr />".' | '.$no; 
	
	var_dump($mysqli); 
	
	}

$sql="SELECT * FROM record_label_songs_tbl";

$result = $conn->query($sql); 


	if ($result->num_rows > 0) 
		{
			$no=0; 
			
			
			while($row =$result->fetch_assoc())
				{
					$id=$row['id'];
					$no+=1; 	
					$username=decrypt($row['username']);
					$release_name=decrypt($row['release_name']);
					$songs=decrypt($row['songs']);
					$status=decrypt($row['status']);
					
					batchprocess(
					$id, 
					$no, 
					$username,
					$cust_phone, 
					$songs, 
					$status 
				
									);
					 
					}

	
			}


?> 