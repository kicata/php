<?php
$filepath = "resource/users.txt";
$username = $_POST['username'];
$password = $_POST['password'];

$data = readUsers($filepath);
session_start();
$_SESSION['thokens'] = $data;

if (isset($username) && isset($password)) {
	
	if (!empty($username) && !empty($password)) {
		
		$isUserExist = checkUser($username, $password, $data);
		if ($isUserExist === true) {
			
			echo "Hello " . $username . " you have logged in";

		} else {		
			echo '<p class="error">invalid username or password!</p>';
		}

	} else {
		echo '<p class="error">Please fill some data in the field</p>';
	}

}

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

function checkUser($username, $pass, $thokens) {
	$userExist = false;
	$key = $username."\t".$pass;
	if (array_key_exists($key, $thokens)) {
		$userdata = $thokens[$key];
		$user_pass = $userdata['password'];
		
		if (strcmp(trim(strtolower($pass)), strtolower($user_pass))== 0) {
			$userExist = true;
		}
	}
	return $userExist;

}
?>