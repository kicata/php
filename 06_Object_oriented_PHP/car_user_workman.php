<?php
class Car {
	private $model;
	private $production_year;
	private $trademark;
	private $engine_size;

	function __construct($trademark, $model, $production_year, $engine_size) {
		$this -> trademark = $trademark;
		$this -> model = $model;
		$this -> engine_size = $engine_size;
		$this -> production_year = $production_year;
	}

	public function toString() {
		$str = "{$this -> trademark}, {$this -> model}, {$this -> engine_size}, {$this -> production_year}";
		
		return $str;
		
	}

}

class User {
	private $fname;
	private $famName;
	private $age;
	private $profilePicture;
	private $sex;
	private $password;
	private $securityQuestion;
	private $answer;
	private $secondEmail;
	private $cars = [];
	public static $comments = [];
	private $rating;
	
	

	function __construct($fname, $famName, $age, $profilePicture, $sex, $password, $question, $answer, $secondEmail, $cars) {
		$this -> fname = $fname;
		$this -> famName = $famName;
		$this -> age = $age;
		$this -> profilePicture = $profilePicture;
		$this -> sex = $sex;
		$this -> password = $password;
		$this -> securityQuestion = $question;
		$this -> answer = $answer;
		$this -> secondEmail = $secondEmail;
		$this -> cars = $cars;
		$this -> rating = 0;

	}

	public function toString() {
		$toString = "<p> My name is {$this->fname} {$this->famName}.I am {$this->age} years old {$this->sex} </br>
		I have those  cars:</br>";
		foreach ($this->cars as $car) {
			$toString .= $car -> toString() . "</br>";
		}
		$toString .= "Another data:</br>
		password: {$this->password} </br>
		securityQuestion: {$this->securityQuestion}</br>
		answer: {$this->answer} </br>
		second Email: {$this->secondEmail} </br>";
		$toString.= $this->getUserData()."</br>";

		return $toString;
		
	}
	
	public function setUserData($data){
		$dirname="resource";
		$filename = "./".$dirname."/".$this->fname."_".$this->famName.".txt"; 
		$data.="".PHP_EOL;
		
		if(!file_exists($filename)){
			file_put_contents($filename, $data);
		}else{
			file_put_contents($filename, $data, FILE_APPEND);
		}
		
	}
	
	public function getUserData(){
		$dirname="resource";
		$filename = "./".$dirname."/".$this->fname."_".$this->famName.".txt"; 
		
		if(!file_exists($filename)){
			echo "<p>User doesn't have data colected</p><br/>";
		}else{
			$content = file_get_contents($filename);
			echo $content;
		}
		
	}
	
	protected function getRating(){
		return $this->rating;
	}
	
	protected function setVote(){
		$this->rating +=1;
	}
	
	public static function showCommentsByUser(){
		if(empty($this->comments)){
			return "still no comment by user";		
		}else{
			return $this->comments;
		}
	}
	public static function addComment($comment){
		if($comment instanceof Comment){
			$this->comments[]= $comment;
		}else{
			throw new Exception("Invalid Comment", 1);
			
		}
	}

}

class Workman extends User {
	private $profession;
	private $payPerHour;
	
	function __construct($fname, $famName, $age, $profilePicture, $sex, $password, 
					$question, $answer, $secondEmail, $cars, $profession, $pay) {
		parent::__construct($fname, $famName, $age, $profilePicture, $sex, $password, $question, $answer, $secondEmail, $cars);
		$this->profession=$profession;
		$this->payPerHour=$pay;
	}
					
	public static function search($workers, $salary, $profession){
		for ($i=0; $i < count($workers); $i++) { 
			$curent = $workers[$i];
			$curentProfession = $workers[$i]->getProfession();
			$curentSalary = (int)$workers[$i]->getSalary();

			if(($curentSalary == (int)$salary) && ($curentProfession == $profession)){
				return $curent;
			}
		}
		return false;
	}
	
	public function getProfession(){
		return $this->profession;
	}
	
	public function getSalary(){
		return $this->payPerHour;
	}		
				
	public function toString(){
		$str = parent::toString();
		$str.= "proffession: {$this->profession} </br>pay per hour: {$this->payPerHour} ";
		
		return $str;
		
	}
	
}

class Comment{
	private $message;
	private $owner;
	
	public function __construct($mesage, $owner){
		$this->message = $mesage;
		$this->owner=$owner;
		
	}
	
	public static function getComment(){
		
		return $this->message;
	}
	
}


?>