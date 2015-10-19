<?php
	function isPhoneNumber($phoneNumber)
	{
		$len = strlen($phoneNumber);
		if($len == 11)
		{
			for($i=0;$i<$len;$i++)
			{
				if($phoneNumber[$i]<'0' || $phoneNumber[$i]>'9')
				{
					return false;
				}
			}
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	class Person{
		public $name ="PHP";
		public $email = "php.net";
		public $phoneNumber = "90XXXXXX90";		
		/*fucntion setEmail($email){
			
		}*/
		
		function setPhoneNumber($phoneNumber)
		{
			if(isPhoneNumber($phoneNumber))
			{
				$this->phoneNumber = $phoneNumber;
			}
			else
			{
				echo "Please provide valid Phone Number","<br>";
			}
		}	
	} 
	
	class Guest extends Person{
		public $indianPhoneNumber = "";
		function setIndianPhoneNumber($phoneNumber)
		{	
			if(isPhoneNumber($phoneNumber.'0'))
			{
				$this->indianPhoneNumber = $phoneNumber;
			}
			else
			{
				echo "Please provide valid Phone Number","<br>";
			}
		}		
	}
	
	$indian = new Guest;
	$indian->name = "Daniel";
	$indian->email = "soumenseth@gmail.com";
	$indian->setIndianPhoneNumber("8008900910");
	$indian->setPhoneNumber("80089009101");
	echo $indian->name,"<br>";
	echo $indian->email,"<br>";
	echo $indian->phoneNumber,"<br>";
	echo $indian->indianPhoneNumber,"<br>";
	
	
	$person = new Person;
	$person->setIndianPhoneNumber("01769757222");
	
	
	
	class MyString{
		public $value = "initial value";
		function myStrLen()
		{
			return strlen($this->value);
		}
		function print_string(){
			echo $this->value;
		}
		function my_explode(){
			$string = $this->value;
			$string_len=strlen($string);
			$word="";
			$words=array();
			for($i=0;$i<$string_len;$i++){
				if($string[$i]==" "||$i==$string_len-1){
					if($i==$string_len-1){
						$word=$word.$string[$i];
					}
					array_push($words,$word);
					$word = "";
				}
				else{
					$word=$word.$string[$i];
				}
			}
			return $words;
		}
		
		
	}
	
	
	$str1 = new MyString;

	$str1->value = "this is a string value and i am exploding it";
	//print_r($str1->my_explode());
	
	
	
?>