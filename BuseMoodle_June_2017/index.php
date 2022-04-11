<html>

<head>
	<title>Frames Demo</title>
</head>

<frameset rows="5%, 95%" border="25" border-color="gray" framespacing="10px">
	<frame src="nav.html" name="navBar">
		<frameset cols="30%, 70%" border="30" framespacing="10px">
			<frameset rows="30%,30%,40%" border="32" framespacing="10px">
				<frame src="top.html" name="top" frameborder="1" frameborder-color="gray">
					<frame src="middle.php" name="middle">
						<frame src="bottom.php" name="bottom">
			</frameset>
			<frame src="info.html" name="main">
		</frameset>

</frameset>

</html>