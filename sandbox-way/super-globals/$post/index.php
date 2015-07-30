<?php

//if ( !empty($_POST) ) {
//	print_r($_POST);
//}

// echo $_SERVER['REQUEST_METHOD'];

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if ( mail('me@example.com', 'Message is: this is a website', htmlspecialchars($_POST['message']) )) {
		$status = "Thank you for your message.";
	}
}

?>


<!doctype html>
<html>
	<head>
		<style>
			form ul { margin: 0; padding: 0;}
			form li { list-style: none; margin-bottom: 1em;}
		</style>
	</head>

	<body>

		<h1>Contact Form</h1>
		<form action="" method="post">
			<ul>
				<li>
					<label for="name">Name: </label>
					<input type="text" name="name" id="name"><br>
				</li>

				<li>
					<label for="email">Email: </label>
					<input type="email" name="email" id="email"><br>
				</li>

				<li>
					<label for="message">Message: </label>
					<textarea name="message" id="message"></textarea><br><br>
				</li>

				<li>
					<input type="submit">"Go"
				</li>
			</ul>
		</form>

		<?php if(isset($status)) echo $status; ?>

	</body>
</html>