<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>02_count_of_letters</title>
	  
	</head>
	<body>
	  <div>
	  	Problem 2. Count of Letters
		Write a program that reads a list of letters and prints for each letter 
		how many times it appears in the list. The letters should be listed in alphabetical order. 
		Use the input and output format from the examples below. Examples:
	  </div>
	  <?php
	  	$input_str = "h d h a a a s d f d a d j d s h a a";
		$in_arr = explode(" ", $input_str);
		$result =[];
		for ($i=0; $i <count($in_arr) ; $i++) {
			$key=$in_arr[$i]; 
			if(array_key_exists($key, $result)){
				$result[$key]+=1;
			}else{
				$result[$key]=1;
				
			}
			
		}
		
		 ksort($result);
		 foreach ($result as $key => $value) {
		 	echo "$key -> $value\n";
		 }
		 
	  ?>
	</body>
</html>