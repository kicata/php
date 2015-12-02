<!DOCTYPE html>
<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>07_type_casting</title>
	</head>
	<body>
	<div id="condition">
	<p>	
		Problem 7. Type Casting
		You can pretend that a variable or value is of a different type by using a type cast. 
		Try to cast floating point number to integer and then print it on the web page.
	</p>
	</div>
		<?php
			$foo= '1';
			echo "foo = $foo with type ".gettype($foo)."<br/>";
			settype($foo, 'integer');
			echo "after type casting: "."<br/>";
			echo "foo = $foo with type ".gettype($foo);
			echo "<br/>";
			$foo = 5.9888; 
			echo "foo = $foo with type ".gettype($foo)."<br/>";
			settype($foo, 'integer');
			echo "after type casting: "."<br/>";
			echo "foo = $foo with type ".gettype($foo);
		?>
	  
	</body>
</html>
