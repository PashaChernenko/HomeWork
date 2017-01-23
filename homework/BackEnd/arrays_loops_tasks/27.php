<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Таблица</title>
</head>
<body>
	<form method = "post">
		<div><input type="text" placeholder="Количество строк" name="row"><br><br>
		<input type="text" placeholder="Количество столбцов" name="cols"></div>
		<br>
		<button>Сгенерировать таблицу</button><br>
		<br>
		<br>
	</form>
</body>
</html>

<?php

if ($_POST != NULL) {
	$row = $_POST['row'];
	$cols = $_POST['cols'];
	$colors = array('red','yellow','blue','gray','maroon','brown','green');

	if (is_numeric($row) and is_numeric($cols) and 0 < $row and $row < 1000 and 0 < $cols and $cols < 1000) {
		echo '<table>';

		for ($tr=$row; $tr > 0 ; $tr--) { 
			echo '<tr>';

			for ($td=$cols; $td > 0 ; $td--) { 
				$color = $colors[rand(0, 6)];
				echo '<td style="background-color: ', $color, '">';
				echo rand(0, 50000);
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	} else {
		echo 'Некорректные данные, введите количество строк и столбцов!';
	}
} else {
	echo 'Привет!!!';
}