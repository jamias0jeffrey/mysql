<?php
	
	require_once "database.php";
	$genre = 'OPM';

	$sql_query = "SELECT title, length FROM songs WHERE genre = '$genre'";

	$result = mysqli_query($conn, $sql_query);

	while($row = mysqli_fetch_assoc($result)){
		echo $row['title'] . " is " . $row['length'] . " seconds long. <br>";
	}

	mysql_close($conn);
?>