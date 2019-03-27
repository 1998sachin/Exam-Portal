<?php
	require 'dbconfig/config.php';
	//string parser
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

	$question=$_REQUEST['question'];		//getting data from request
	$question=stringParser($question);

	$sub_question=$_REQUEST['sub_question'];
	$sub_question=stringParser($sub_question);

	$category=$_REQUEST['category'];
	$category=stringParser($category);

	$option_1=$_REQUEST['option_1'];
	$option_1=stringParser($option_1);

	$option_2=$_REQUEST['option_2'];
	$option_2=stringParser($option_2);

	$option_3=$_REQUEST['option_3'];
	$option_3=stringParser($option_3);

	$option_4=$_REQUEST['option_4'];
	$option_4=stringParser($option_4);

	$correct_ans=$_REQUEST['correct_ans'];
	$correct_ans=stringParser($correct_ans);

	$query="INSERT INTO question (question,sub_question,option_1,option_2,option_3,option_4, correct_answer,category) VALUES('$question','$sub_question','$option_1','$option_2','$option_3','$option_4','$correct_ans','$category')";

	$query_run= mysqli_query($con,$query);
	if($query_run)
	{
		echo "all_ok";
	}
	else
	{
		echo "error";
	}
	
	mysqli_close($con); //closing the db connection
?>