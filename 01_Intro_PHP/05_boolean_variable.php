<html>	
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>05_boolean_variable</title>
	</head>	
	<body id="05_boolean_variable" onload="">
		<div id="condition">
			<p>Declare a Boolean variable called isFemale and assign an appropriate value corresponding
				to your gender. Print it on the web page.
			</p>
		</div>
		<?php
			$isFemale = FALSE;
			if ($isFemale) {
				echo "I am a woman";
			} else {	
				echo "I am a man isFemale = ".$isFemale;
				var_dump($isFemale);
			}
		?>
	</body>
</html>