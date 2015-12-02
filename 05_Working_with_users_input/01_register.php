<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>01_register.html</title>
		<link rel="stylesheet" href="resource/register.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	<body>
		<?php
		$usernameErr = $passwordErr = $passRepeatErr = $questionErr = $answerErr = $emailErr = $fnameErr = $lnameErr = $genderErr = $bdayErr = "";
		$username = $password = $passRepeat = $question = $answer = $email = $fname = $lname = $day = $month = $year = $gender = "";
		$data_arr=[];
		$data_err_arr=[];
		//validation
		function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
		}
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
				//clean and reinitilize;
				unset($data_arr);
				$data_arr = array();
				unset($data_err_arr);
				$data_err_arr= array();
				
				if (empty($_POST['username'])) {
					$usernameErr = "The username is requred";
					$data_err_arr[] = $usernameErr;
					
				} else {
					$username = test_input($_POST['username']);
					
					if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
						$usernameErr = "Only letters and white space allowed";
					}
					$data_arr[]=$username;
				}

				if (empty($_POST['password'])) {
					$passwordErr = "password requred";
					$data_err_arr[] = $passwordErr;
				} else {
					$password = test_input($_POST['password']);
					// TODO validate password
					$data_arr[]=$password;
				}

				if (empty($_POST['passRepeat'])) {
					$passRepeatErr = "please repeat password";

				} else {
					$passRepeat = test_input($_POST['passRepeat']);
					// check if name only contains letters and whitespace
					$isMatch=strcmp(strtolower($password), strtolower($passRepeat));
					if ($isMatch) {
						$passRepeatErr = "password repeat mismatch";
					}
				}

				if (empty($_POST['question'])) {
					$questionErr = "please fill in secret question";
					$data_err_arr[] = $questionErr;
					
				} else {
					$question = test_input($_POST['question']);
					// check if name only contains letters and whitespa$data_arrce
					if (!preg_match("/^[a-zA-Z ]*$/", $question)) {
						$questionErr = "Only letters and white space allowed";
					}
					$data_arr[]=$question;
				}

				if (empty($_POST['answer'])) {
					$answerErr = "please answer the question";
					$data_err_arr[] = $answerErr;
				} else {
					$answer = test_input($_POST['question']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/", $answer)) {
						$answerErr = "Only letters and white space allowed";
					}
					$data_arr[]=$answer;
				}

				if (empty($_POST['email'])) {
					$emailErr = "please enter email adress";
					$data_err_arr[] = $emailErr;
				} else {
					$email = test_input($_POST['email']);
					// check if email is well formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid email format";
					}
					$data_arr[]=$email;
				}

				if (empty($_POST['fname'])) {
					$fnameErr = "please enter name";
					$data_err_arr[] = $fnameErr;
				} else {
					$fname = test_input($_POST['fname']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
						$fnameErr = "Only letters and white space allowed";
					}
					$data_arr[]=$fname;
				}

				if (empty($_POST['lname'])) {
					$lnameErr = "please enter last name";
					$data_err_arr[] = $lnameErr;
				} else {
					$lname = test_input($_POST['lname']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
						$lnameErr = "Only letters and white space allowed";
					}
					$data_arr[]=$lname;
				}

				if (empty($_POST['gender'])) {
					
					$genderErr = "Gender is required";
					$data_err_arr[] = $genderErr;
				} else {
					$gender = test_input($_POST["gender"]);
					$data_arr[]=$gender;
				}

				if (empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year'])) {
					$bdayErr = "please enter day/month/year";
					$data_err_arr[] = $bdayErr;
				} else {
					$day = intval(test_input($_POST['day']));
					$month = intval(test_input($_POST['month']));
					$year = intval(test_input($_POST['year']));
					if ($day > 31 || $month > 12 || (strlen(strval($year) < 4))) {
						$bdayErr = "incorect data on birthday fields";
						$data_err_arr[] = $bdayErr;
					}
					$bdayStr = $day.'/'.$month.'/'.$year;
					$data_arr[]= $bdayStr;
				}
		?>
		<div id="register">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" accept-charset="utf-8">
				<label for="username">Username<span class="star">*</span>: </label>
				<input type="text" name="username" value="<?php echo $username; ?>" id="username"/><span class="error"><?php echo $usernameErr; ?></span>
				<br/>
				<label for="password">Password<span class="star">*</span>: </label>
				<input type="text" name="password" value="<?php echo $password; ?>" id="password"/><span class="error">&nbsp;<?php echo $passwordErr; ?></span>
				<br/>
				<label for="rpass">Repeat password<span class="star">*</span>: </label>
				<input type="text" name="passRepeat" value="<?php echo $passRepeat; ?>" id="passRepeat"/><span class="error"><?php echo $passRepeatErr; ?></span>
				<br/>
				<label for="question">Secred question<span class="star">*</span>: </label>
				<input type="text" name="question" value="<?php echo $question; ?>" id="question"/><span class="error"><?php echo $questionErr; ?></span>
				<br/>
				<label for="answer">Secred answer<span class="star">*</span>: </label>
				<input type="text" name="answer" value="<?php echo $answer; ?>" id="answer"/><span class="error"><?php echo $answerErr; ?></span>
				<br/>
				<label for="email">Email<span class="star">*</span>: </label>
				<input type="text" name="email" value="<?php echo $email; ?>" id="email"/><span class="error"><?php echo $emailErr; ?></span>
				<br/>
				<label for="fname">First name<span class="star">*</span>: </label>
				<input type="text" name="fname" value="<?php echo $fname; ?>" id="fname"/><span class="error"><?php echo $fnameErr; ?></span>
				<br/>
				<label for="lname">Last name<span class="star">*</span>: </label><span class="error"><?php echo $lnameErr; ?></span>
				<input type="text" name="lname" value="<?php echo $lname; ?>" id="lname"/>
				<br/>
				<div id="sex">
					<span class="sex">Gender:</span>
					<label for="male">male</label>
					<input type="radio" name="gender" <?php
						if (isset($gender) && $gender == "male")
							echo "checked";?> value="male" id="male"/>
					<label for="female">female</label>
					<input type="radio" name="gender" <?php
						if (isset($gender) && $gender == "female")
							echo "checked";
					?> value="female" id="female" />
					<span class="error"><?php echo $genderErr; ?></span>
					<br/>
				</div>
				<label for="bithday">Birthday: <span class="star">*</span></label>
				<input type="number" name="day" value="<?php echo $day; ?>" min="1" max="31" id="day"/>
				<input type="number" name="month" value="<?php echo $month; ?>" min="1" max="12" id="month"/>
				<input type="number" name="year" value="<?php echo $year; ?>" id ="year"/><span class="error"><?php echo $bdayErr; ?></span>
				<p>
					<input type="submit" value="Create profile" id="submit"/>
				</p>
			</form>
		</div>

		<?php
		
			function validateForm($data_err_arr){
				foreach ($data_err_arr as $value) {
					if (strlen($value) > 0) {
						return false;
					}
					
				}
				
				return true;
			}
			
			function exportUserData($data_arr){
				$path = 'resource/users.txt';
				$mode = "a";
				$data = implode("\t",$data_arr);
				$data.="\r\n";
				
				$myfile = file_put_contents($path, $data, FILE_APPEND);	
					
				if($myfile === FALSE){
					return false;
					
				}
			}
			
			$isDataValid = validateForm($data_err_arr);
		
			if($isDataValid){
				$isSaved = true;
				$isSaved = exportUserData($data_arr);
				if($isSaved === true){
					header('Location:http://localhost/05_Working_with_users_input/index.php');
				}else{
					echo "try again!!!";
					
					header('Location:http://localhost/05_Working_with_users_input/register.php');
				}
				
				
			}
		}

		
		?>
	</body>
</html>