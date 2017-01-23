<?php

$day = date('w');

$week = array(
	1 => 'Monday‎',
	'Tuesday‎',
	'Wednesday‎',
	'Thursday‎',
	'Friday‎',
	'Saturday‎',
	'Sunday‎',
);

foreach ($week as $key => $value) {
	if ($key == $day) {
		echo '<i>', $value, '</i>';
	} else {
		echo $value;
	}
	echo '<br>';
}
