<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>07_sequence_of_max_sum</title>
	  
	</head>
	<body>
		<div id="condition">
		  	Write a script that finds the sequence of maximal sum in given array. Examples:
		</div>
		<?php
			$curn_sum=0;
			$max_sum=0;
			$colection = [];
			$best_colection = [];
			$arr_str="2, 3, -6, -1, 2, -1, 6, 4, -8, 8";
			$arr = explode(", ",$arr_str);
			for ($i=0; $i < count($arr) ; $i++) { 
				$curn_sum=0;
				unset($colection);
				for ($j=$i; $j < count($arr); $j++) { 
					$curn_sum +=$arr[$j];
					$colection[]=$arr[$j];
					if($curn_sum > $max_sum){
						$max_sum = $curn_sum;
						unset($best_colection);
						$best_colection = $colection;
						
					}
					
				}
				
			}
			
			echo "max sum sequence is ".$max_sum."\n";
			$seq = implode(", ", $best_colection);
			echo"best sequence is: ".$seq;
		?>
	</body>
</html>