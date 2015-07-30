<?php


function add_registered_user($name, $email) {
	file_put_contents('mailing_list.php', "$name: $email\n", FILE_APPEND); // careful not to give public access! mailing_list.php outside one level up from doc root.

};

function old($key) {
	if ( !empty($_REQUEST[$key]) ) {
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

function valid_email($email) {
	// return preg_match('/regular expression/', $email);
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}