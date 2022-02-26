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
		$conn = mysqli_connect("localhost", "root", "", "college");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$name = $_REQUEST['name']; 
		$class = $_REQUEST['class']; 
		$section = $_REQUEST['section']; 
		$aadhar = $_REQUEST['aadhar']; 
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$name',
			'$class','$section','$aadhar' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $class\n "
				. "$section\n $aadhar\n  ");
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
