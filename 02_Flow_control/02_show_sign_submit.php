<?php
	$a = $_POST['first'];
	$b = $_POST['second'];
	$c = $_POST['third'];
	$sign="+";
	if ($a<0 && $b<0 && $c<0) {
		$sign="-";
	} elseif(($a<0 && $b>0 && $c>0) || ($b<0 && $a>0 && $c>0) || ($c<0 && $b>0 && $a>0)) {
		$sign="-";
	}
	echo "the sign of product is $sign";

?>