<?php

$result = 0;

$arrayName = array(1,20,15,17,24,35);

foreach ($arrayName as $value) {
	 ($result = $result  + $value);
}

echo $result;