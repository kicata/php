<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>04_selection_sort</title>
	  
	</head>
	<body>
	  <div>
		Problem 4. Selection Sort	
		Sorting an array means to arrange its elements in increasing order. 
		Write a script to sort an array. Use the "selection sort" algorithm: 
		Find the smallest element, move it at the first position, find the smallest from the rest, 
		move it at the second position, etc.
		Hint: Use a second array
	  </div>
	  <?php
	  	$input_str="2 3 4 1 50 2 3 4 5";
		$input_arr = explode(" ",$input_str);
		$sorted=[];
		$count = count($input_arr);
		while (count($input_arr) > 0) {
			$min_value = min($input_arr);
			$arr_min_ind = min(array_keys($input_arr, min($input_arr)));
			$sorted[] = $min_value;
			unset($input_arr[$arr_min_ind]);
		}

		echo "Sorted: ".implode(", ",$sorted);
	  ?>
	</body>
</html>