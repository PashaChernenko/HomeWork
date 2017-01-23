<?php

$arr = [0];

for ($i=0; $i < 20; $i++) { 
	$arr[$i] = rand(-255, 255);
}

$a = max($arr);
$b = min($arr);

print_r($arr);

echo '<hr>', $a, '<br>', $b, '<hr>';

foreach ($arr as $key => $value) {
	if ($value == $a) {
		$arr[$key] = $b;
	}

	if ($value == $b) {
		$arr[$key] = $a;
	}
}

print_r($arr);