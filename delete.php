<?php
	
	require_once "database.php";
	$title = 'Gangnam Style';

	$sql_query = "DELETE FROM songs WHERE title = '$title'";

	$result = mysqli_query($conn, $sql_query);

	$test_query = "SELECT songs.*, albums.name from songs JOIN albums on songs.album_id = albums.id";
	$test_result = mysqli_query($conn, $test_query);

	echo "<table>";
	while($row = mysqli_fetch_assoc($test_result)){
		echo "<tr>";
		echo "<td>" . $row['title'] . "</td> <td>" . $row['name'] . "</td> <td>" . $row['genre'] . "</td>" ;
		echo "</tr>";
	}

	echo "</table>";

	mysql_close($conn);
?>