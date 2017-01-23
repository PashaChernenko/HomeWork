<?php

$int1 = 1;
$int2 = 1;

while ($int1 <= 10) {
	while ($int2 <= 10) {
		echo $int1, ' * ', $int2, ' = ', ($int1 * $int2), ';<br>';
		$int2++;
	}
	$int2 = 1;
	echo '<br>';
	$int1++;
}