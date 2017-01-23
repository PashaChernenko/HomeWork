<?php

$week = array('Monday‎', 'Tuesday‎', 'Wednesday‎', 'Thursday‎', 'Friday‎', 'Saturday‎', 'Sunday‎');

foreach ($week as $value) {
	if ($value == 'Saturday‎' or $value == 'Sunday‎') {
		echo '<b>', $value, '</b>';
	} else {
		echo $value;
	}
	echo '<br>';
}