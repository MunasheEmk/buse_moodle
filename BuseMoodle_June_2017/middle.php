<!DOCTYPE html>
<html>

<head>
	<title>OnlineUsers</title>
</head>

<body>
	<big>
		<b>ONLINE USERS</b>
	</big>
	<center>
		<small>(last 5 minutes) </small>
	</center>

	<?php

	require_once "login_success.php";
	session_start();


	header('location:login_success.php');

	?>

</body>

</html>