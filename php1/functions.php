<?php

	function calculator($operand1,$operand2,$operator)
	{
		if($operator == '+')
		{
			$result = $operand1 + $operand2;
		}
		elseif($operator == '-')
		{
			$result = $operand1 - $operand2;
		}
		elseif($operator == '*')
		{
			$result = $operand1 * $operand2;
		}
		elseif($operator == '/')
		{
			$result = $operand1 / $operand2;
		}
		//define a function
		
		return $result;
	}


?>