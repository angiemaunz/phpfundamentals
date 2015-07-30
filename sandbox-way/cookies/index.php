<?php

// setcookie('fontSize', 25, time() - 60 * 30, '/');

setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screenWidth]', '1024');

?>

<html>
	<head>
		<title></title>
		<style>
			body {
				font-size: <?= $_COOKIE['fontSize']; ?>
			}

		</style>
	</head>
	<body>

		<?php
		if ( isset($_COOKIE['prefs'] ) ) {
			foreach($_COOKIE['prefs'] as $key => $val) {
				echo '<li>' . htmlspecialchars($key) . ':' . htmlspecialchars($val);
			}
		}
		?>


	</body>
</html>
