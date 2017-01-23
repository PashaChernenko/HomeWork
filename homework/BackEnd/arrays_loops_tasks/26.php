<?php

$arr = [0];

for ($i=0; $i < 10; $i++) { 
	$arr[$i] = rand(1, 100);
}

$pr = 1;

foreach ($arr as $key => $value) {
	if ($key % 2 == 0 and $value > 0) {
		$pr = $pr * $value;
	}

	if ($key % 2 == 1 and $value > 0) {
		echo $value, '<br>';
	}
}
echo 'Произведение элементов которые больше ноля и у которых парные индексы = ', $pr;