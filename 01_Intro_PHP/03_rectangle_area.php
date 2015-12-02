<html5>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>rectangle_area</title>
	</head>
	<body>
		<div>
			<p>
				<?php
				$sideA = $_POST['side_A'];
				$sideB = $_POST['side_B'];
				$result = ($sideA * $sideB) / 2;
				echo "sideA = $sideA" . "<br/>";
				echo "sideB = $sideB" . "<br/>";
				echo "rectangle area is :" . $result;
				?>
			</p>

		</div>
	</body>
</html5>