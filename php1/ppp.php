<?php

	class Card{
		public 		$name 			= "Customer";
		protected 	$card_number 	= "xxxx-xx-xx";
		private 	$max_balance 	= 10000;	
		function cardNumber(){
			echo $this ->card_number,"<br>";
		}
		function max_balance_card()
		{
			echo $this->max_balance,"<br>";
		}
		function print_name(){
			echo $this->name,"<br>";
		}
	}
	class Platinum extends Card{
		function cardNumber(){
			echo $this ->card_number,"<br>";
		}
		function max_balance_card()
		{
			echo $this->max_balance,"<br>";
		}
		function print_name(){
			echo $this->name,"<br>";
		}
	}
	
	$cardUser = new Card;
	$cardUser->name = "DDD";
	$cardUser->max_balance_card();
	
	$pla	= new Platinum;
	$pla->print_name();
	$pla->max_balance_card();



?>