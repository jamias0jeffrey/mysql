<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "spotify";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	// if(!$conn){
	// 	die("Connection failed: " . mysqli_error($conn));
	// }

	// echo "Connected successfully";
	// $result = mysqli_query($conn, "SELECT * FROM users");
	// mysqli_close($conn);

	// $input_name = "User3";
	// $input_password = "1234";
	// $sql_query = "INSERT INTO users(username, password) VALUES('$input_name', '$input_password')";
	// $result = mysqli_query($conn, $sql_query);

	// if ($result == TRUE) {
	// 	echo "New user added";
	// } else {
	// 	echo "Error" . $sql_query . "<br>" . mysqli_error($conn);
	// }

?>