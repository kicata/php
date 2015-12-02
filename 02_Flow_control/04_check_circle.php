<?php
	$x = $_POST['x_coord'];
	$y = $_POST['y_coord'];
	$center=0;
	$radius=2;
	$isInCircle = false;
	
	$distance=sqrt(($x*$x)+($y*$y));
	
	if($distance > $radius){
		echo $isInCircle? 'true':'false';
	}else{
		$isInCircle=true;
		echo $isInCircle? 'true':'false';
	}
	
?>