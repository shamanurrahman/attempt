<?php
	function which_is_first($word1,$word2)
	{
		//$word1 = toLower($word1);
		//$word2 = toLower($word2);
		$len1 = strlen($word1);
		$len2 = strlen($word2);		
		$minLen = 0;
		if($len1 > $len2)
		{
			$minLen = $len2;
		}
		else
		{
			$minLen = $len1;
		}
		
		for($i =0 ;$i<$minLen;$i++)
		{
			if($word1[$i] > $word2[$i])
			{
				return 2;
			}
			elseif($word1[$i] < $word2[$i])
			{
				return 1;
			}
		}
		if($len1 > $len2)
		{
			return 2;
		}
		return 1;
	}
	echo which_is_first("vat","bat"),"<br>";
	
	$words = ["vat","cat","ball","bat","batter","mat"];
	$arr_len = count($words);
	for($i=0;$i<$arr_len;$i++)
	{
		for($j=$i;$j<$arr_len;$j++)
		{
			$min = which_is_first($words[$i],$words[$j]);
			if(2 == $min)
			{
				//swap
				$temp = $words[$i];
				$words[$i] = $words[$j];
				$words[$j] = $temp;
			}
		}
	}
	echo "<pre>";
	print_r($words);
	echo "</pre>";
	
	
	
	
	
	
	
?>