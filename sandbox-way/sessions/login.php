<?php

include 'config.php';
include 'functions.php';

session_start();


// how would you go about logging someone in?
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// 1) get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(validate_user_creds($username, $password)) {
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	} else {
		$status = "incorrect login credentials.";
	}
}


//
//if ( isset($_POST['loginForm'])) {
//	echo 'posted';
//}

?>


<!doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<h1>Login</h1>

		<form action="login.php" method="post">
			<ul>
				<li>
					<label for="name">Username:</label>
					<input type="text" name="username">
				</li>

				<li>
					<label for="password">Password:</label>
					<input type="password" name="password">
				</li>

				<li>
					<input type="submit" value="go" name="loginForm">
				</li>
			</ul>


		</form>

		<?php if ( isset($status) ) : ?>
		<p><?= $status; ?></p>
 		<?php endif; ?>


	</body>
</html>