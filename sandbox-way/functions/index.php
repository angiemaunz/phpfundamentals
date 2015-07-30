<?php

// functions.php
//require function.php

//function pp($value) {
//	echo '<pre>';
//	print_r($value);
//	echo '</pre>';
//}
//$arr = array('name'=> 'Joe', 'age' => 40, 'occupation' => 'teacher');
//pp($arr);

function array_pluck($toPluck, $arr) {
	return array_map(function($item) use($toPluck) {
		return $item[$toPluck];
	}, $arr);
	
	return $ret;
	}

$people = array(
	array('name' => 'Jeffrey', 'age' => 27, 'occupation' => 'Web Developer'),
	array('name' => 'Joe', 'age' => 50, 'occupation' => 'Teacher'),
	array('name' => 'Jane', 'age' => 40, 'occupation' => 'Marketing')
	);
	
$names = array_pluck('name', $people);
foreach($names as $name) {
	echo $name;
}
