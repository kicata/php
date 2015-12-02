<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>01_web_page</title>
	  
	</head>
	<link rel="stylesheet" href="resource/login.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<body>
	  <div id="condition">
		Create a login menu as shown below. The menu should allow a new user to registration or a already member to sing in.<br/>
		The submitted information should be export to a text file. Examples of site: 
	  </div>
	  <?php
	  $filepath = "resource/users.txt";
		$data = readUsers($filepath);
		session_start();
		$_SESSION['thokens'] = $data;
	  
	  function readUsers($filepath) {
		//read file
		$lines = file('resource/users.txt');
		$thokens = [];
		foreach ($lines as $line) {
			
			$lenght=strlen($line);
			if ($lenght > 1) {
				$line = substr($line, 0, count($line) - 2);
				$arr = explode("\t", $line);
				$person = [];
	
				//hardcode current person;
				$person['username'] = $arr[0];
				$person['password'] = $arr[1];
				$person['question'] = $arr[2];
				$person['answer'] = $arr[3];
				$person['email'] = $arr[4];
				$person['fname'] = $arr[5];
				$person['lname'] = $arr[6];
				$person['gender'] = $arr[7];
				$person['bday_str'] = $arr[8];
	
				$key = $person['fname']."\t".$person['password'];
				$thokens[$key] = $person;
			}
	
		}
		return $thokens;
	}
	  	
	  ?>
	  <div id="login">
	  	<form action="01_login.php" method="post" accept-charset="utf-8">
	  		<span>Login:</span><br/><br/>
			<label for="username">Username: </label><input type="text" name="username" value="" id="username"/><br/>
			<label for=""password>Password: </label><input type="text" name="password" value="" id="password"/><br/>
						<a href="01_register.html">register</a>
						<button class="button" type="button" onclick="location.href='01_find_user.php'" class="button">find_user</button> 
						<!-- <a href="location.href='01_find_user.php">find_user</a> -->
					   	<input type="submit" value="sign in"/>
		</form>
	  </div>
	</body>
</html>