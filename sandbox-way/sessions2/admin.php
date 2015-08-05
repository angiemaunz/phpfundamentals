<?php

session_start();
if ( !isset($_SESSION['username']) )  {
	header("Location: login.php");
	die();
}


?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
		<a href="logout.php">Logout</a>

	</body>
</html>