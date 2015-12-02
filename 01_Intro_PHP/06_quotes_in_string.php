<html>	
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <title>06_quotes_in_string</title>
  
</head>	
<body id="06_quotes_in_string" onload="">
  <div id="condition">
	<p>Declare two string variables and assign them with following value:
	I asked a girl out and she said – “I don't know”. Does she mean yes or no?
	Do the above in two different ways: with and without using quoted strings. 
	Print the variables to ensure that their value was correctly defined.</p>   
  </div>
  <?php
  	$quoted="I asked a girl out and she said – “I don't know”. Does she mean yes or no?";
  	$single_quoted='I asked a girl out and she said – “I don\'t know”. Does she mean yes or no?';
  	echo $quoted."<br/>";
  	echo $single_quoted;
  ?>
</body>
</html>