<html5>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>02_type of variable PHP</title>
	</head>
	<body >
		<div id="name">
		  <p>Declare all possible types of variable and then, print their types with echo. <br/>
		  	You can use function gettype() that return type of given variable.</p>
		</div>
		<?php
			$a_bool = TRUE;
			$a_str = "some string";
			$int_num = 5;
			$float_num = 5.5;
			$arr =array(1,2,3,4,5,"pencho");
			$obj= array("foo"=>"bar", "the_bar"=>"the_object");
			
			echo $a_bool." type is ".gettype($a_bool)."<br/>";
			echo $a_str." type is ".gettype($a_str)."<br/>";
			echo $int_num." type is ".gettype($int_num)."<br/>";
			echo $float_num." type is ".gettype($float_num)."<br/>";
			var_dump($arr);
			var_dump($obj);
			
			
		?>
	  
	</body>
</html5>