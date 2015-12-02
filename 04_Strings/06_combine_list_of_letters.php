<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>06_combine_list_of_letters</title>
	  
	</head>
	<body>
	  <div id="condition">
		Write a script  that reads two array of letters l1 and l2 and combines them: appends all letters c from 
		l2 to the end of l1, but only when c does not appear in l1. Print the obtained combined list.
		All lists are given as sequence of letters separated by a single space, each at a separate line. 
		Use ArrayList<Character> of chars to keep the input and output lists Examples:
			h e l l o
			l o w
			h e l l o w

	  </div>
	  <?php
	  	$input1 = "a b a";
		$input2 = "b a b a";
		$arr1 = explode(" ",$input1);
		$arr2 = explode(" ",$input2);
		foreach ($arr2 as $value) {
			$isExist = array_search($value, $arr1);
			if($isExist === false){
				$arr1[] = $value;
			}		
		}
		$result = implode(" ",$arr1);
		echo "The result is: ".$result;
	  ?>
	</body>
</html>