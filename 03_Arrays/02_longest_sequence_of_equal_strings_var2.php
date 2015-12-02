<html>
	<head>
		
	</head>
	<body>
		<div>
			<p>
				Problem 2. Largest Sequence of Equal Strings
				Write a script finds in it the largest sequence of equal elements in array of strings.
				If several sequences have the same longest length, print the leftmost of them. 
				The input strings are given as a single line, separated by a space. Examples:
			</p>
		</div>
		<?php
			$input="hi hi hi hi hi";
			$input_data = explode(" ", $input);
			
			$curn_max = 1;
			$seq_max = 1;
			$largest_seq_str="";
			$count = count($input_data);
			$max_count_word = $input_data[0];
			
			for ($i=0; $i < $count ; $i++) { 
				$word = $input_data[$i];
				$curn_max = 1;
				
				for ($j=$i+1; $j < $count; $j++) { 
					$next=$input_data[$j];
					if (strcmp($word, $next) == 0) {
						$curn_max +=1;
					}
				}
				if ($curn_max > $seq_max) {
					$seq_max = $curn_max;
					$max_count_word = $word;
				}
				
			}
		
			for ($k=0; $k <$seq_max ; $k++) {
				$largest_seq_str = $largest_seq_str.$max_count_word." ";
			}

			echo $largest_seq_str;

		?>
	</body>
</html>