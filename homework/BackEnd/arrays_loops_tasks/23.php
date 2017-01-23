<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сумирование</title>
</head>
<body>
	<form method = "post">
		<input type="text" placeholder="Введите число..." name="num"><br>
		<br>
		<button>Расчет суммы</button><br>
		<br>
		<br>
	</form>
</body>
</html>

<?php

if ($_POST != NULL) {
	$num = $_POST['num'];

	if (is_numeric($num)) {
		$sum = 0;

		for ($i=0; $i < strlen($num); $i++) { 
			$sum = $sum + $num[$i];
		}

		echo 'Сумма цифр числа ', $num, ' = ', $sum;

	} else {
		echo 'Введите число, чтобы получить сумму его цифр!!!';
	}
} else {
	echo 'Привет!!!';
}
