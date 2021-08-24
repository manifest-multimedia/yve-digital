<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="yveusers"; 

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
	$pass, 
	$privilege, 
	$online_stat, 
	$active_stat 
 

){
	$artist=""; 

	$id = $id; 
	$no=$no; 
	$username=$username;
	$cust_phone=$cust_phone; 
	$pass=$pass;
	$privilege=$privilege; 
	$online_stat=$online_stat; 
	$active_stat=$active_stat; 
	
	$host = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname="yveusers"; 

	// Create connection
	$mysqli = new mysqli($host, $dbuser, $dbpassword, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}

	
	$updaterecord="UPDATE user_login_tbl SET 
		username = '$username', 
		cust_phone ='$cust_phone',  
		pass ='$pass', 
		privilege ='$privilege', 
		online_stat='$online_stat',
		active_stat='$active_stat'  
			
		WHERE id = '$id'";
	
	
	 if ($mysqli->query($updaterecord))
	{
		echo "<strong> Proccessed Successfully <hr /></strong>";
		
	} else 
	{ echo "<strong> Failed to update </strong>".mysqli_error($mysqli) ;}
	
	
	print "$id<br /> Processing Completed </hr />".' | '.$no; 
	
	var_dump($mysqli); 
	
	}

$sql="SELECT * FROM user_login_tbl";

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
					$pass=decrypt($row['pass']);
					$privilege=decrypt($row['privilege']);
					$online_stat=decrypt($row['online_stat']);
					$active_stat=decrypt($row['active_stat']);

					batchprocess(
					$id, 
					$no, 
					$username,
					$cust_phone, 
					$pass, 
					$privilege, 
					$online_stat, 
					$active_stat 
				
									);
					 
					}

	
			}


?> 