<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/27/15
 * Time: 4:19 PM
 */
$arr = ['Jeff', 'Collis', 'Tash', 'Amanda'];

//$arr = array(
//	'ceo' 			=> 'Collis',
//	'manager' 		=> 'Tash',
//	'instructor' 	=> 'Jeff'
//);

//foreach($arr as $title => $name) {
//	echo "<li><strong>$title</strong> - $name</li>";
//}
//echo count($arr);
//for($i = 0; $i < count($arr); $i++) {
//	echo "<li>$arr[$i]</li>";
//};
$i = 0;
while( $i < 10 ) { // used to fetch info from the db
	echo "<li>$arr[$i]</li>";
}