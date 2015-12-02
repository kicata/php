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
	  <div id="condition">
					<p>
						Simple calculator 
					Write a script that read two input number from user and choose operands. 
					Put appropriate validation of input lines calculate and print result on output line.
					</p>
	  </div>
	  <div id="calculator">
	  	<form action="06_calculate.php" method="post" accept-charset="utf-8">
	  		<label for="first_val">Enter value here: </label><input type="text" name="first_val" value="" id="first_val"/><br/>
			<label for="">choose operation</label>
				<select name="sign">
		  			<option value="+">+</option>
		  			<option value="-">-</option>
		  			<option value="/">/</option>
		  			<option value="*">*</option>
				</select> <br/>
			<label for="second_val">Enter value here: </label><input type="text" name="second_val" value="" id="second_val"/>
			 
			
					   <p><input type="submit" value="calculate"/></p>
			<label for="result">Result: </label><input type="text" name="result" value="" id="result"/>
				   
		  </form>
		
	  </div>
	  
	</body>
</html>