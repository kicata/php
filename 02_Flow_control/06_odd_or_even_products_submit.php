<?php
	$str_arr = $_POST['input'];
	$arr = explode(" ", $str_arr);
	$odd_product = 1;
	$even_product = 1;
	$arr_length = count($arr);
	
	for ($i=0; $i < $arr_length ; $i++) { 
		if ($i % 2 == 0) {
			$odd_product *= $arr[$i];
		} else {
			$even_product *= $arr[$i];
		}
		
	}

	if ($odd_product == $even_product) {
		echo "yes"."<br/>"."product= $odd_product";
		
	} else {
		echo "no"."<br/>".
		"odd_product= $odd_product"."<br/>".
		"even_product= $even_product";
	}
	
	
	
?>
