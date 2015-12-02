<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>01_remove_names</title>
	  
	</head>
	<body>
	  <div id="condition">
			Problem 1. Removes Names
			Write a script that takes as input two lists of names and removes
			from the first array all names given in the second array. The input and output array are given as words, 
			separated by a space, each list at a separate line. Examples: 
	  </div>
	  <?php
	  	$first_input = "Hristo Hristo Nakov Nakov Petya Nakov Vanessa Maria";
		$result = "Hristo Hristo Petya";
		$second_input = "Nakov Vanessa Maria";
		$to_match_arr = explode(" ", $second_input);
		$replace_with = "";
		
		foreach ($to_match_arr as $value) {
			$first_input = str_replace($value, $replace_with, $first_input);
		}
		
		$first_input = str_replace("  ", "", $first_input);
		echo trim($first_input);
	  ?>
	</body>
</html>