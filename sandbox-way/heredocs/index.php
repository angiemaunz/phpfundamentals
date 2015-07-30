<?php


$post = array(
	'author' 		=> 'Jeff',
	'title' 			=> 'My awesome blog',
	'body'   		=> 'here is the body',
	'publish-date'	=> '6-21-2015'
);

$email = <<<TYPEOTHER
<h1>{$post['title']}</h1>
<p>{$post['author']}</p>
<div>{$post['body']}</div>
TYPEOTHER;

echo $email;