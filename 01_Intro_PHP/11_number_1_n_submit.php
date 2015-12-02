<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>11_number_1_n_submit</title> 
	</head>
	<body>
	  <?php 
	  	$number = $_POST['number'];
		for ($i=1; $i <$number ; $i++) { 
			echo "$i"."<br/>";
		}
	  
	  ?>
	</body>
	</html>