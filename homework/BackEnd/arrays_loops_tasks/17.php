<?php

$month = date('m');

$months = array(
	'01' => 'January',
	'02' => 'February',
	'03' => 'March',
	'04' => 'April',
	'05' => 'May',
	'06' => 'June',
	'07' => 'July',
	'08' => 'August',
	'09' => 'September',
	'10' => 'October',
	'11' => 'November',
	'12' => 'December',
);

foreach ($months as $key => $value) {
	if ($key == $month) {
		echo '<b>', $value, '</b>';
	} else {
		echo $value;
	}
	echo '<br>';
}