<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// print_r($_POST); to view
	setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);
	header('Location: font.php');
}

//if ( isset($_POST['font-size']) ) {
//	$font_size = $_POST['font-size'];
//} else if( isset($_COOKIE['fontSize']) ) {
//	$font_size = $_COOKIE['fontSize'];
//} else {
//	$font_size = 16;
//}

$font_size = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px';

?>

<!doctype html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-size: <?= $fontSize . ';'; ?>
		}
		li { list-style: none; }
		ul, li { margin: 0; padding: 0; }
	</style>
</head>
<body>

	<form action="" method="post">
		<ul>
			<li>
				<label for="font-size">Your Preferred Font Size</label><br>
				<select name="font-size" id="font-size">
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
				</select>
			</li>

			<li>
				<input type="submit" name="submit" value="Submit">
			</li>
		</ul>

	</form>

	<h2>My Page</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
	</p>

</body>
</html>
