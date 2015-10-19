<?php
	include 'stack.php';
	include 'functions.php';	
	$expression = "30 44 - 45 61 - +";
	$expArr		= explode(" ",$expression);
	$mystack 	= new Stack;
	foreach($expArr as $op)
	{
		$temp = intval($op);
		if($temp){
				$mystack->push($temp);
		}
		else{
			$op2 = $mystack->pop();
			$op1 = $mystack->pop();
			$result = calculator($op1,$op2,$op);
			$mystack->push($result);
		}
	}
	echo "Result is ",$mystack->pop();
?>