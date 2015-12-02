<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>04_extract_all_valid_url</title>
	  
	</head>
	<body>
	  <div id="condition">
		Problem 4. Extract all valid URLs
		Write a regex pattern for extracting all URL’s addresses from given text. 
		Hint: http://en.wikipedia.org/wiki/Uniform_resource_locator
	  </div>
	  
	  <?php
	  	$input= "header1            header2             edit
				b-1246431          12.01.13            1246431  |  blog.domain.net            1232,00 ‌‌
				details
				b-1312231          12.01.13            1246431  |  blog.domain.co.uk          12312,00
				b-2344311          12.01.13            1246431  |  www.domain.com/             9129,00 ‌‌
				b-2344322          12.01.13            1246431  |  http://abc.de              1332,00 ‌‌
				b-2344322          13.01.13            1246431  |  www.cdf.de/                 21140,00             ‌‌edit
				b-1233422          06.01.13            1246431  |  www.dto.de/site1      21110,00
				b-1233542          06.01.13            1246431  |  www.ghj.ca/site2.html      28110,00             ‌‌             edit
				b-1231242          06.01.13            1246431  |  www.another.de            2101,00             ‌‌
				b-1231231          04.01.13            1246431  |  onlyme.info/";
				
	  	preg_match_all('#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si', $input, $result);
	  	var_dump($result);
	  	
	  	foreach ($result[0] as $url){
    		echo $url . "<br />\n";
		}
	  	
	  	?>
	</body>
</html>