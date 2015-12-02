<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>05_binary_search</title>
	  
	</head>
	<body> 
		<div id="condition">
  			Write a script to sort an array. Use the "binary search" algorithm: 
		</div>
		<?php
		function binary_search($arr, $target, $low ,$high){
			
			while($low <= $high){
				
				$mid = intval(($low + $high)/2);
				
				if($arr[$mid] == $target){
					return $mid;
				}else if($arr[$mid] < $target){
					$low=$mid+1; 
				}else if($arr[$mid] > $target){
					$high = $mid-1;
				}
				
			}
			return -1;
		}
		
		$arr_str="2 3 4 1 50 2 3 4 5";
		$arr = explode(" ", $arr_str);
		sort($arr);
		$high=count($arr)-1;
		$target = 70;
		$index = binary_search($arr, $target, 0, $high);
		
		if($index == -1){
			echo "target not found in array";
		}else{
			echo "target index is :".$index;
		}
		
		
		
		?>
	</body>
	
</html>