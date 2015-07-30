<?php

require 'functions.php';

// 1) Has the form been posted?
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// grab the name and email
	$name = trim($_POST['name']); // trim off any white space
	$email = trim($_POST['email']);
	// echo $name; die(); // used to test above.  then delete.


	if ( empty($name) || empty($email) || !valid_email($email) ) {  // is everything filled out correct and is email valid?
		$status = 'Please provide a name and valid email.'; // no
	} else {
		add_registered_user($name, $email); // yes mailing_list.php
		$status = "Thank you for rego-ing.  Your info has been added to the mailing list.";

	}
}

require 'index.tmpl.php';







?>

