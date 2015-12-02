<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>9_extract_unique_words</title>
	  
	</head>
	<body>
	  <div id="condition">
	  	<p>Problem 9. Extract words
		Write a function that takes as argument an array, and extract all the words from that array without repeating the same ones.</p>
	  </div>
	  <?php
	  	$arr = array("Nakov", "Svetlin", "Nakov", "Pesho", "Mario", "Dimityr", "Georgi", "Mario");
		
		function printUnique($arr){
			$uniq= array_unique($arr,SORT_LOCALE_STRING);
			print_r($uniq);
		}
		
		echo printUnique($arr);
	  ?>
	</body>
</html>