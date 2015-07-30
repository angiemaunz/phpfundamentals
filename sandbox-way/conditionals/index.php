<?php
//
//// if or switch or lookup ...
//
////$month = 2; // set month = Jan
////// $month == 'January'; // does month = 'Jan'?
////
////if($month >= 0) {
////	echo 'It does!';// do something
////} else {
////	echo 'Nope';
////}
//
//$month = 'January';
//
//switch($month) {
//	case 'January';
//		echo 'It is Jan!';
//
//	case 'February';
//		echo 'It is Feb!';
//		break;
//
//	default;
//		echo 'Not the right month!';
//}
//
//$month = 'January';
//
//$months = array(
//	'January' 	=> 'It is Jan',
//	'February' 	=> 'It is February',
//	'March' 		=> 'It is March'
//};
//echo isset($months[$month]) ? $months[$month] : 'Not the right month!';
//

$month = 'July';

if ( $month == 'May' || $month == 'June' ) {
	echo 'It is May or June';
} else {
	echo 'It is not one of those';
}