<?php
$a = rand(-255, 255);
$b = rand(-255, 255);
echo 'a = ', $a, '<br>', 'b = ', $b, '<br>';
if ( $a > $b ) {
	echo 'max = ', $a;
} elseif ( $a < $b ) {
	echo 'max = ', $b;
} elseif ( $a == $b ) {
	echo $a, '=', $b;
}
//Ну или так
echo '<hr>';
echo 'a = ', $a, '<br>', 'b = ', $b, '<br>';
echo 'max = ', max($a,$b);
?>