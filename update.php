<?php
	
	require_once "database.php";
	$title = "Kundiman";
	$length = 270;

	$sql_query = "UPDATE songs SET length = $length WHERE title = '$title'";

	$result = mysqli_query($conn, $sql_query);

	$test_query = "SELECT * FROM songs WHERE title = '$title'";
	$test_result = mysqli_query($conn, $test_query);

	while($row = mysqli_fetch_assoc($test_result)){
		echo $row['title'] . " is " . $row['length'] . " seconds long. <br>";
	}

	mysql_close($conn);
?>