<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>11_number_1_n_submit</title> 
	</head>
	<body>
	  <?php 
	  	$number = $_POST['number'];
		$a=0;
		$b=1;
		$sum;
		echo "$a $b ";
		for ($i=1; $i < $number ; $i++) { 
			$sum=$a+$b;
			echo $sum." ";
			
			$a=$b;
			$b=$sum;
		}
	  
	  ?>
	</body>
	</html>