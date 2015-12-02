<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>index</title>

	</head>
	<body>
		<div id="condition">
			<h4>Problem 1</h4>
			<p>
				Create class Car, which has model, Production year, trademark, Engine Size.
			</p>

			<h4>Problem 2</h4>
			<p>
				Create  class user with first name, family name, age, profile picture, sex,
				password, security question and answer, second email, one or more cars.";
			</p>

			<h4>Problem 3</h4>
			<p>
				Create class Workman that has the same data as class
				User but also holds info about Profession:
				[ Electronics, Engine, Body Repair, Brake and Transmission, etc.] and  payment per hour
			</p>
			
			<h4>Problem 4</h4>
			<p>
				Add an option for the user to enter data, the entered Data should be saved in a file.
			</p>
			
			<h4>Problem 5</h4>
			<p>
				Add an option for the user can search workman, by salary and profession.
			</p>
			

		</div>
		<?php
		require 'car_user_workman.php';

		echo "Problem 1:</br>";
		$myCar = new Car("Kia", "Carens", "1.6", "2004");
		$s = $myCar -> toString();
		echo $s.PHP_EOL;

		echo "Problem 2:</br>";
		$user = new User("Kiril", "Asenov", "38", "picture", "male", "terorero", "who am i?", "batman", "kiril@demax.bg", $cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")));
		$str = $user -> toString();
		echo $str.PHP_EOL;

		echo "Problem 3:</br>";
		$workman = new Workman("Pencho", "Kubadinski", "15", "picture", "male", "terorero", "who am i?", "batman", "kiril@demax.bg", $cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")), "Plumber", "15");
		$str = $workman -> toString();
		echo $str.PHP_EOL;
		
		echo "Problem 4:</br>";
		$user->setUserData("I am a man !!!<br/>");
		$user->getUserData();
		echo "<br/>";
		
		echo "Problem 5:</br>";
		
		$workman1 = new Workman("Gancho", "Kubadinski", "35", "picture", "male", "terorero", "who am i?", "batman", "mahmud@demax.bg", 
								$cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")), 
								"Plumber", "15");
		$workman2 = new Workman("Pyrvolet", "Kubadinski", "25", "picture", "male", "terorero", "who am i?", "batman", "pyrvan@demax.bg", 
								$cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")), 
								"IT", "25");
								
		$workman3 = new Workman("Mihail", "Asenov", "17", "picture", "male", "terorero", "who am i?", "batman", "mihail@demax.bg", 
								$cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")), 
								"Football", "170");
		
		$workers = array($workman, $workman1, $workman2, $workman3);
		
		$isExistWorkman = Workman::search($workers, "25", "IT");
		if($isExistWorkman){
			echo "User found";
			echo $isExistWorkman->toString();
			
		}
		
		echo "<br/>";
		echo "Problem 6 test"."<br/>";
		
		$user = new User("Petyr", "Petrov", "38", "picture", "male", "terorero", "who am i?", "batman", "kiril@demax.bg", $cars = array(new Car("Kia", "Carens", "1.6", "2004"), new Car("VW", "Golf", "1.8", "1997")));
		$user->addComment(new Comment("this is my first comment", $user));
		$comments = User::showCommentsByUser($user);
		var_dump($comments);die;
	
		
		?>

	</body>
</html>