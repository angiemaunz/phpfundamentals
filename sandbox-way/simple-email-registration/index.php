<?php

// 1) Has the form been posted?
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// grab the name and email
	$name = trim($_POST['name']); // trim off any white space
	$email = trim($_POST['email']);
	// echo $name; die(); // used to test above.  then delete.

	// is everything filled out?
	if ( empty($name) || empty($email) ) {
		$status = 'Please provide a name and valid email'; // go to form >
	}
}

require 'index.tmpl.php';







?>

