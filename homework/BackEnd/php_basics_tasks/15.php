<?php
$a = 10;
$b = 0;
$operator = '/';
echo $a, $operator, $b, '=';

if ( $operator == '+' ) {
	echo ($a + $b);
} elseif ( $operator == '-' ) {
	echo ($a - $b);
} elseif ( $operator == '*' ) {
	echo ($a * $b);
} elseif ( $operator == '/' and $b != 0 ) {
	echo ($a / $b);
} elseif ( $operator == '%' ) {
	echo ($a % $b);
} elseif ( $operator == '/' and $b == 0 ) {
	echo ' Делить на ноль нельзя!!!';
}
?>