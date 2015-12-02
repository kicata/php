<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>01_exchange_values</title>
	  
	</head>
	<body>
	  <div id="condition">
		Problem 1. Exchange value
		Write an if statement that examines two integer variables and exchanges 
		their values if the first one is greater than the second one.
	  </div>
	  <?php
	  	$a=8;
		$b=6;
		echo "a = $a "."b= $b";
		
		list($a, $b) = swap_numbers($a, $b);
		echo"<br/>";
		echo "a = $a "."b = $b";
		
		function swap_numbers ($a, $b) {
			if ($b > $a) {
				return array($b,$a);
			} else {
				return array($a,$b);
			}
		}
	  ?>
	</body>
</html>