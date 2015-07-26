<?php

// Months of the year, using an array.

/*$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May');
echo $month[4];*/

// $tuts_sites = array('nettuts+', 'psdtuts', 'webdesigntuts', 'wptuts', 'anothertuts');
// print_r($tuts_sites);

//$tuts_sites = ['nettuts+', 'psdtuts', 'webdesigntuts', 'wptuts', 'anothertuts'];
$tuts_sites = array(
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://psd.tutsplus.com',
	'webdesigntuts' => 'http://webdesign.tutsplus.com',
	'wptuts' => 'http://net.wp.tutsplus.com',
);

?>

<!doctype html>

<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<h1>Tuts+ Sites</h1>
		<ul>
			<?php foreach($tuts_sites as $site) {
				echo "<li>$site</li>";
		}
		?>
		</ul>
	</body>
</html>