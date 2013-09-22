<?php
date_default_timezone_set('America/New_York');
$now = date('G');

if($now >=6 && $now <=20 ) {
	$background_color = '#96dff4';
	$image = 'sun.png';
}

else {
	$background_color = '#000';
	$image = 'moon.png';
}


?>