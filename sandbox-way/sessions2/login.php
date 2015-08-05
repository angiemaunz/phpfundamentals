<?php

session_start();
// used to mimic db.
define('USERNAME', 'angie');
define('PASSWORD', '1234');

// has a form been posted?
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	// validate that against the records (in db or has an acct.?)
	if($username === USERNAME && $password === PASSWORD) {

		// login + set session
		$_SESSION['username'] = $username;  // set the key
		// that's all we need in this case to redirect them to maybe some private page (admin.php) using headers.
		header("location: admin.php");
	} else {
		$status = "wrong cred dickhead";
	}
}


?>

<!doctype html>
<html>
<head>
	<title></title>
	<style>
		form li { list-style: none; margin-bottom: 1em; }
		form ul { margin 0; padding: 0}
	</style>
</head>
<body>
	<h1>Login</h1>

	<form action="login.php" method="post">
		<ul>
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<input type="submit" value="Login!" name="loginForm">
			</li>
		</ul>
		<?php if ( isset($status) ) : ?>
		<p><?php echo $status; ?></p>
		<?php endif; ?>
</form>
</body>
</html>