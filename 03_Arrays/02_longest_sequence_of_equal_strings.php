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
			$input="a b b xxx c c c";
			$input_data = explode(" ", $input);
			var_dump($input_data);
			$words=[];
			
			foreach ($input_data as $value) {
				if (array_key_exists($value, $words)) {
					$words[$value]+=1;
				}else{
					$words[$value]=1;
				}
				
			}
			arsort($words);
			$max_key = key($words);
			$max_count = max($words);
			$largest_str_seq = "";
			
			for ($i=0; $i <$max_count ; $i++) { 
				$largest_str_seq=$largest_str_seq.$max_key." ";
			}
			echo $largest_str_seq;
			//echo $max_count;

			
			
		?>
	</body>
</html>