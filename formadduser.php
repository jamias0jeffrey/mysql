<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title></title>


</head>
<body>

	<form action="" method="POST">	
		<label>Username: </label>
		<input type="text" name="userName" id="userName">
		<label>Password: </label>
		<input type="password" name="userPass" id="userPass">
		<input type="submit" name="form" value="Submit">
	</form>

	<?php 

		if (isset($_POST['form'])) {

			$host = "localhost";
			$username = "root";
			$password = "";
			$dbname = "spotify";

			$conn = mysqli_connect($host, $username, $password, $dbname);

			$input_name = $_POST['userName'];
			$input_password = $_POST['userPass'];

				

			$sql_query = "INSERT INTO users(username, password) VALUES('$input_name', '$input_password')";
			$result = mysqli_query($conn, $sql_query);

			if ($result == TRUE) {
				header('Location: menu.php');
			} else {
				echo "Error " . $sql_query . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
			
		}



	?>



</body>
</html>