<?php
date_default_timezone_set('America/New_York');
$now = date('G');
$time = date('g:ia');

if($now >=6 || $now <=19 ) {
	$class = 'day';
	$image = 'sun.png';
}

else {
	$class = 'night';
	$image = 'moon.png';
}


?>