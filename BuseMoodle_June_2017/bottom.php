<?php

$conn = mysqli_connect("localhost", "munashe", "bryanmunashe", "moodle");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['user']) && isset($_POST['pswd'])) { //if items entered then store to variables
	$user = $_POST['user']; //entered items is being stored inside variable
	$pswd = $_POST['pswd']; //entered items is being stored inside variable

	// protection from hackers getting into mysql powered login systems
	$user = stripslashes($user);
	$pswd = stripslashes($pswd);

	$sql = "SELECT * FROM moodle WHERE username='$user' and password='$pswd' ";

	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) == 1) {

		//header("bottom.php");
		while ($row = mysqli_fetch_array($query)) {
?>
			<?php echo $row['firstname'] . " " . $row['lastname'] ?>
<?php
		}
	} else {
		echo "<span style='color:red'>Incorrect password or username!</span>";
	}
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<head>
	<title>logIn</title>
</head>

<body>
	<form method="POST" action="">
		<big>LOGIN</big>
		<br> <br>
		Username <br>
		<input type="text" name="user" placeholder="enter your Username">
		<br> <br>
		Password <br>
		<input type="password" name="pswd" placeholder="Enter your Password">
		<br> <br>
		<button>Log In</button>
	</form>


</body>

</html>