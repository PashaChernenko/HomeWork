<?php

$pyramid = 1;

for ($i=1; $i <= 9; $i++) { 
	echo str_repeat($pyramid, $i), '<br>';
	$pyramid++;
}
