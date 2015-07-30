<?php

//function set_count($file_name = 'counter.txt') {
//	if ( file_exists($file_name) ) {
//		// read the value
//		$handle = fopen($file_name, 'r');
//
//		// increment it by one
//		$count = (int) fread($handle, 20) + 1;
//
//		// write the new value
//		$handle = fopen($file_name, 'w');
//		fwrite($handle, $count);
//
//		// close the connection
//		fclose($handle);
//	}	else {
//		// create it
//		$handle = fopen($file_name, 'w+');
//		$count = 1;
//
//		// set a default value of 1
//		fwrite($handle, $count);
//		fclose($handle);
//	}
//	return $count;
//}

// -- IMPROVED METHOD --
// w/ this method, you do not have to set up handler, or opening the file, determining if it should be read, written too... use this

function set_count($file_name = 'counter.txt') {
	if ( file_exists($file_name) ) {
		// read the value
		$count = (int) file_get_contents($file_name) + 1; // reading file w/out open the file and setting up a connection
		// print_r(file($file_name));  // creates array & puts in key and value
		//die();
		file_put_contents($file_name, $count); // completely overrides the value

	}	else {
		// create it
		$handle = fopen($file_name, 'w+');
		$count = 1;

		// set a default value of 1
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}

// echo set_count();
$count = set_count();

require 'index.tmpl.php';

