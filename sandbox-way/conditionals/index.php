<?php

$month = 2; // set month = Jan
// $month == 'January'; // does month = 'Jan'?

if($month >= 0) {
	echo 'It does!';// do something
} else {
	echo 'Nope';
}

$month = 'January';

switch($month) {
	case 'January';
		echo 'It is Jan!';
		break;

	case 'February';
		echo 'It is Feb!';
		break;
}
