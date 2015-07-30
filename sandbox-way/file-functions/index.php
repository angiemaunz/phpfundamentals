<?php

/*
basename
dirname
pathinfo
substr
extract
*/

$images = glob('img/*.{png,jpg,jpeg}', GLOB_BRACE);

//foreach ($images as $img) {
	// echo basename($img);
	// echo dirname($img);
	// echo substr($img, 0);
	// print_r(pathinfo($img));
//	$info = pathinfo($img);
//	
//	echo $info['extension'];
//	echo "\r";


//* alternative way using extract with associate array -- takes the associate array * and passes it to the extract function, and then extract will filter thru the  array and make each key into a variable and make the keys value equal to the variable value. Where you can populate this data array, something like this, $data = array(); and fill the array up with everything  
// extract(pathinfo($img));  
// $thumb_name = "thumb-$filename.$extension"; or $thumb_name = "thumb-{$filename}.{$extension}";

	foreach ($images as $img) {
		// echo pathinfo($img, PATHINFO_FILENAME); // _EXTENSION, _DIRNAME
		// echo "\n"; 
		// $info = pathinfo($img);
		extract(pathinfo($img));
		
		$thumb_name = "thumb-$filename.$extension"; // or $thumb_name = "thumb-{$filename}.{$extension}";
		// $thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
		echo $thumb_name . "\n";
}


// Change the name of a file.  For example, upload and rename (append thumbnail..)
