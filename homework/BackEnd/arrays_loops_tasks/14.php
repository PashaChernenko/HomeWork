<?php

$arr = array(4,2,5,19,13,0,10);

$e = array(2,3,4);

$answer = 'Нет!';

foreach ($arr as $value1) {
	foreach ($e as $value2) {
		if ($value1 == $value2) {
			$answer = 'Есть!';
		}
	}
}

echo $answer;