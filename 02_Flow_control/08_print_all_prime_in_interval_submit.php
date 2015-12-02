<?php
$n = $_POST['n'];
if ($n < 2) {
	echo "Illegal N num < 2";

} else {

	for ($i = 2; $i < $n; $i++) {
		$isPrime = true;
		$curnVal = $i;
		for ($j = 2; $j < $curnVal; $j++) {
			if ($curnVal % $j == 0) {
				$isPrime = false;
				break;
			}

		}
		if ($isPrime) {
			echo $curnVal . " ";

		}

	}

}
?>
