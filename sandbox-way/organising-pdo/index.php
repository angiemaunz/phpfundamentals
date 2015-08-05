<?php

require 'functions.php';

if ( connect($config) ) {
	echo 'Connected!';
} else {
	echo  'Could not connect to the db.';
}