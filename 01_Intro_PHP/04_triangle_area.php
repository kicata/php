<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>04_triangle_area</title>
	  
	</head>
	<body>
	  <div id="condition">
		<p> Write a program that enters 3 points in the plane (as integer x and y coordinates), 
			calculates and prints the area of the triangle composed by these 3 points.
			Round the result to a whole number. In case the three points do not form a triangle, print "0" as result.</p>
	  </div>
	  <?php
	  	$a_x = 53;
		$a_y = 18;
		$b_x = 56;
		$b_y = 23;
		$c_x = 24;
		$c_y = 27;
		
		$first = $a_x*($b_y-$c_y);
		$second = $b_x*($c_y-$a_y);
		$third = $c_x*($a_y-$b_y);
		$triangle_area = ($first+$second+$third) / 2;
		echo $triangle_area;
	  ?>
	</body>
	</html>