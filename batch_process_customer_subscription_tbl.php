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


function batchprocess($id, $username, $no, $cust_f_name, $cust_o_name, $cust_phone, $cust_email, $cust_address, $cust_country, $cust_city,$status){
	$artist=""; 

	$id = $id; 
	$username=$username; 
	$no=$no; 
	$cust_f_name=$cust_f_name; 
	$cust_o_name=$cust_o_name; 
	$cust_phone=$cust_phone;
	$cust_email=$cust_email;
	$cust_address=$cust_address; 
	$cust_country=$cust_address; 
	$cust_city=$cust_city; 
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

	
	$updaterecord="UPDATE customer_subscription_tbl SET 
		username = '$username', 
		cust_f_name ='$cust_f_name',  
		cust_o_name ='$cust_o_name', 
		cust_phone ='$cust_phone', 
		cust_email ='$cust_email',
		cust_address ='$cust_address', 
		cust_country ='$cust_country', 
		cust_city ='$cust_city', 
		status ='$status'
	
		WHERE id = '$id'";
	
	
	 if ($mysqli->query($updaterecord))
	{
		echo "<strong> Proccessed Successfully <hr /></strong>";
		
	} else 
	{ echo "<strong> Failed to update </strong>".mysqli_error($mysqli) ;}
	
	
	print "$id<br /> Processing Completed </hr />".$username.' | '.$artist.' | '.$status.' | '.$no; 
	
	var_dump($mysqli); 
	
	}

$sql="SELECT * FROM customer_subscription_tbl";

$result = $conn->query($sql); 

//var_dump($result); 

// mYAIxkm7hg3/tdAY4gll5A==
	if ($result->num_rows > 0) 
		{
			$no=0; 
			
			
			while($row =$result->fetch_assoc())
				{
					$id=$row['id'];
					$username=decrypt($row['username']);
					$no+=1; 	
					$cust_f_name=decrypt($row['cust_f_name']);
					$cust_o_name=decrypt($row['cust_o_name']);
					$cust_phone=decrypt($row['cust_phone']);
					$cust_email=decrypt($row['cust_email']);
					$cust_address=decrypt($row['cust_address']);
					$cust_country=decrypt($row['	cust_country']);
					$cust_city=decrypt($row['cust_city']);
					$status=decrypt($row['status']); 
					
					batchprocess($id, $username, $no, $cust_f_name, $cust_o_name, $cust_phone, $cust_email, $cust_address, $cust_country, $cust_city,$status);
					 
					}

	
			}


?> 