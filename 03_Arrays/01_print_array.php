<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>01_print_array</title>

	</head>
	<body>
		<div id="condition">
			<p>
				Problem 1. Print array
				Write a script that allocates array of 20 integers and initializes each element by its index multiplied by 5.
				Print the obtained array on the console.
			</p>

		</div>
		<?php
			$array=[];
			for ($i=0; $i < 20; $i++) { 
				$array[]=$i*5;
			}
			var_dump($array);
		?>
	</body>
</html>