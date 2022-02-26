<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => college
		$conn = mysqli_connect("localhost", "root", "", "details");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$first_name = $_REQUEST['first_name']; 
		$last_name = $_REQUEST['last_name']; 
		$email = $_REQUEST['email']; 
		$mobile_number = $_REQUEST['mobile_number']; 
		$password = $_REQUEST['password']; 
		$confirm_password = $_REQUEST['confirm_password']; 
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$first_name',
			'$last_name','$email','$mobile_number','$password','$confirm_password' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>You Have Successfully Signed Up, Please Go To Login Page .</h3>";
             echo "<p>Click here to go to login page<a href='Log_in.php'>Login</a></p>";  
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
