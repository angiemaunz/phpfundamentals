<!doctype html>
<html>
<head>
	<title></title>
	<style>
		ul {
			list-style: none;
			.notice {
				color: red; font-style: italic;
			}
		}
	</style>
</head>
<body>
	<h1>Join the Mailing List</h1>

	<form action="" method="post">
		<?php if (isset($status) ) : ?>
		<p class="notice"><?php echo $status; ?></p>
		<?php endif; ?>

		<ul>
			<li>
				<label for="name">Your Name:</label>
				<input type="text" name="name">
			</li>

			<li>
				<label for="email">Your Email Address:</label>
				<input type="text" name="email">
			</li>

			<li>
				<input type="submit" value="Sign Up!">
			</li>

		</ul>

	</form>


</body>
</html>