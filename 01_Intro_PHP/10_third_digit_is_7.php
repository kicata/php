<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>10_third_digit_is_7</title>
	  
	</head>
	<body>
	  <div id="condition">
		<p>Write an expression that checks for given integer if its third digit from right-to-left is 7.</p>
	  </div>
	  <?php
		  $num=14585698789;
		  $rest = substr((string)$num, -3, 1);
		  if($rest){
		  	echo ((int)$rest % 7 == 0 ? 'true' : 'false');
		  }else{
		  	echo "invalid number";
		  }
	  ?>
	  
	</body>
	</html>