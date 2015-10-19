<?php

	$number = 3;
	$lower = 1;
	$upper = $number;
	$mid = ($upper+$lower)/2;
	$midSqr = $mid*$mid;
	while(abs($midSqr-$number) > 0.00001){
		$mid = ($upper+$lower)/2;
		$midSqr = $mid*$mid;
		
		if($midSqr>$number){
			$upper = $mid;
		}else{
			$lower = $mid;
		}
		echo $mid,"<br>";
	}
	
?>