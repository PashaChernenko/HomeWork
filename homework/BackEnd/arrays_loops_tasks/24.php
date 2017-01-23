<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Количество цифр</title>
</head>
<body>
	<form method = "post">
		<div><input type="text" placeholder="Введите число..." name="numbers"><br><br>
		<input type="text" placeholder="Введите цифру..." name="num"></div>
		<br>
		<button>Посчитать количество цифр</button><br>
		<br>
		<br>
	</form>
</body>
</html>

<?php

if ($_POST != NULL) {
	$num = $_POST['num'];
	$numbers = str_split ($_POST['numbers']);

	if (is_numeric($num)) {
			$sum = 0;

			foreach ($numbers as $value) {
				if ($value == $num) {
					$sum++;
				}
			}

		echo 'Количество цифр ', $num, ' = ', $sum;

	} else {
		echo 'Некорректные данные, вводите цифры!';
	}
} else {
	echo 'Привет!!!';
}
