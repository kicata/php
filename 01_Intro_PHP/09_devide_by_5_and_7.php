<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>09_devide_by_5_and_7</title>
	</head>
	<body>
		<div id="condition">
			<p>
				Write a Boolean expression that checks for given integer
				if it can be divided (without remainder) by 7 and 5 in the same time
			</p>
		</div>
		<?php
			$num = 35;
			$isDevide = isDevideBy5and7($num);
			function isDevideBy5and7($number) {
				$isDevideby = false;
				$int_num = (int)$number;
				if (($int_num % 5 == 0) && ($int_num % 7 == 0)) {
					$isDevideby = true;
				}

				return $isDevideby;
			}

			echo "number $num is devided by 5 and 7 -> ".(boolval($isDevide) ? 'true' : 'false');
		?>
	</body>
</html>