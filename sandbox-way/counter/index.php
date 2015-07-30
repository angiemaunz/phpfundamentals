<?php

/**
 * @param string $file_name
 */
function set_count($file_name = 'counter.txt') {
	if ( file_exists($file_name) ) {
		// read the value
		$handle = fopen($file_name, 'r');
		$count = fread($handle, 20); // read and store the value
		echo gettype($count); die();  // find out what type it is? increment it by one
	}	else {
		// create it
		$handle = fopen($file_name, 'w+');
		// set a default value of 1
		fwrite($handle, 1);
		fclose($handle);

	}
}

set_count();




require 'index.tmpl.php';

