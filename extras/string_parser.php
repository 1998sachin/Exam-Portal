<?php
	//parser function
	function stringParser($mystring)
	{
		$array = str_split($mystring);
		$parsed_array=[];
		for($i=0; $i<sizeof($array); $i++)
		{
			if($array[$i]=='"') 
			{
				$parsed_array[]='\"';
			}
			else if(ord($array[$i])==92)
			{
				$parsed_array[]=$array[$i];
				$parsed_array[]=$array[$i];
			}
			else
			{
				$parsed_array[]=$array[$i];
			}
		}
		return implode('', $parsed_array);
	}
?>	