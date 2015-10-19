<?php

	class Stack{
		private $stackArray = Array();
		private $index 		= -1;
		
		public function __construct($arr){
			$this->stackArray = $arr;
			$this->index	  = count($arr)-1;
		}
		
		
		public function push($element)
		{
			$this->index++;
			$this->stackArray[$this->index]=$element;
		}
		public function pop(){
			if(!$this->isEmpty())
			{ 
				return $this->stackArray[$this->index--];
			}
			echo "Empty Stack!! Nothing to pop";
		}
		public function isEmpty()
		{
			if($this->index == -1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function first()
		{
			return $this->stackArray[$this->index];
		}
		public function last()
		{
			return $this->stackArray[0];
		}
		
		public function getElement($position){
			
			if($position <= $this->index+1){
				
				$arrayPosition =   $this->index + 1 - $position;
				return $this->stackArray[$position];
				
			}
			echo "Invalid Position","<br>";
		}
		
	}
	
	class Que{
		
		private $qArray = Array();
		private $index 		= -1;
		public function push($element)
		{
			$this->index++;
			array_unshift($this->qArray,$element);
		}
		public function pop(){
			if(!$this->isEmpty())
			{ 
				return $this->qArray[$this->index--];
			}
			echo "Empty Stack!! Nothing to pop";
		}
		public function isEmpty()
		{
			if($this->index == -1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function first()
		{
			return $this->qArray[$this->index];
		}
		public function last()
		{
			return $this->qArray[0];
		}
		
	}
	$mys = new Stack(array(4,5,6,7));
	
	echo $mys->pop();
	echo $mys->pop();
	echo $mys->pop();
	echo $mys->pop();
	echo $mys->pop();
	
	
	
?>