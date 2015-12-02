<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>06_calculator</title>
	  <style type="text/css" media="screen">
		  body{
		  	font-size:14px;
		  }
		  #calculator{
		  	width:400px;
		  	border: 1px solid black;
		  	border-radius:10px;
		  	padding:5px 10px;
		  }
		  input[type='text']{
		  	width:80px;
		  	border:1px solid black;
		  	border-radius:10px;
		  	padding:5px 10px;
		  	margin:10px;
		  }
		  input[type='submit']{
		  	border-radius:5px;
		  	color:white;
		  	background:red;
		  }
		  label{
		  	font-weight:bold;
		  }
	  </style>
	</head>
	<body>
	  <?php
	  	$first_val = intval($_POST['first_val']);
		$sign = $_POST['sign'];
		$second_val = intval($_POST['second_val']);
		if(!isset($first_val) || !isset($second_val)){
			echo "Must enter value!!";
		}else{
				switch ($sign) {
				case '+': $result =$first_val+$second_val;
				break;
				case '-': $result =$first_val-$second_val;
				break;
				case '*': $result =$first_val*$second_val;
				break;
				case '/': $result =$first_val/$second_val;
				break;
				
				default:
					break;
			}
				
			  	$form = '<div id="calculator">
						  	<form action="calculate.php" method="post" accept-charset="utf-8">
						  		<label for="first_val">Enter value here: </label>
						  		<input type="text" name="first_val" value="'.$first_val.'" id="first_val"/>
								<br/>
								<label for="">choose operation</label>
									<select name ="sign">
							  			<option \<?php if ($sign == "+") echo "selected"; ?\> value="+">+</option>
							  			<option \<?php if ($sign == "-") echo "selected"; ?\> value="-">-</option>
							  			<option \<?php if ($sign == "*") echo "selected"; ?\> value="*">*</option>
							  			<option \<?php if ($sign == "/") echo "selected"; ?\> value="/">/</option>
									</select> 
								<br/>
								<label for="second_val">Enter value here: </label>
								<input type="text" name="second_val" value="'.$second_val.'" id="second_val"/>
								<br/>
								<p><input type="submit" value="calculate"/></p>
								<label for="result">Result: </label>
								<input type="text" name="result" value="'.$result.'" id="result"/>
									   
							 </form>
				 		</div>';
				 echo $form;
		 }
?>
</body>
</html>
	 