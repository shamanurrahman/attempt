<?php

	class Person{
		
		private $name = "DDD";
		
		public function __construct($name){
			echo "My class is ",__class__,"<br>";
			$this->name = $name;
		}
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function printName(){
			echo $this->name;
		}
	}

	$person1 = new Person("PHP");
	$person1->printName();
	
	

?>