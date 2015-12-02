<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>03_find_all_matches</title>
	  
	</head>
	<body>
	  <div id="condition">
		Problem 3. Find All Matches	
		Write a script that finds how many times a substring is contained
		in a given text (perform case insensitive search).
	  </div>
	  <?php
	  	$input= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
	  	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
	  	when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
	  	It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
	  	It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
	  	and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
		
		$substring = "em";
		$count = substr_count(strtolower($input), strtolower($substring));
		echo "The result is: ".$count;
	  ?>
	</body>
</html>