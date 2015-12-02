<?php
$n = $_POST['n'];
if ($n < 1 && $n > 20) {
	echo "Invalid number";
} else {
	$row = $n;
	$col = $n;
	for ($i = 0; $i < $row; $i++) {

		for ($j = $i + 1; $j <= $col + $i; $j++) {
			echo "$j ";

		}

		echo "<br/>";
	}
}
?>