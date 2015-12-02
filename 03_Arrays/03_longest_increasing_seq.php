<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>03_longest_increasing_seq</title>
	  
	</head>
	<body>
		<div id="condition">
			<p>Problem 3. Longest Increasing Sequence
				Write a script to find all increasing sequences inside an array of integers. 
				The integers are given in a array. Print the sequences in the order of their appearance in the input array, 
				each at a single line. Separate the sequence elements by a space. 
				Find also the longest increasing sequence and print it at the last line. 
				If several sequences have the same longest length, print the leftmost of them. Examples:
				Input
				Output
				2 3 4 1 50 2 3 4 5
				2 3 4
				1 50
				2 3 4 5
				Longest: 2 3 4 5
				8 9 9 9 -1 5 2 3
				8 9
				9
				9
				-1 5
				2 3
				Longest: 8 9
				1 2 3 4 5 6 7 8 9
				1 2 3 4 5 6 7 8 9
				Longest: 1 2 3 4 5 6 7 8 9
				5 -1 10 20 3 4
				5
				-1 10 20
				3 4
				Longest: -1 10 20
				10 9 8 7 6 5 4 3 2 1
				10
				9
				8
				7
				6
				5
				4
				3
				2
				1
				Longest: 10
				Note: the count of the input numbers is not explicitly specified, so you might need to read the sequence as string,
				then split it by a space and finally parse the obtained tokens to take their integer values.
		 </p> 
		</div>
		
		<?php
			$input="2 3 4 1 50 2 3 4 5";
			$arr = explode(" ", $input);
			$count = 1;
			$best_count = 1;
			$best_seq = "";
			$curn_seq = $arr[0];
			$arr_count=count($arr);
			for ($i=0; $i <= $arr_count-1; $i++) {
				if ($arr[$i] < $arr[$i+1]) {
					$count+=1;
					$curn_seq = $curn_seq." ".$arr[$i+1];
				} else {
					if($count > $best_count){
						$best_count = $count;
						$best_seq = $curn_seq;
						if($i == count($arr)-1){
							$best_seq = $best_seq." ".$arr[$arr_count];
						}
					}
					
					echo $curn_seq."\n";
					$curn_seq = $arr[$i+1];
					$count = 1;
				}
				
				

			}
			echo "LONGEST: ".$best_seq;
		?> 
	  
	</body>
</html>