<?php
	require 'dbconfig/config.php';

	$query="SELECT DISTINCT category FROM question";
	$query_run= mysqli_query($con,$query);
	if($query_run)		//if query fetch result
	{
		$category=[] ;//contians the all the category
		
		for($i=0; $i<mysqli_num_rows($query_run);$i++) //loop to get all the category
		{
			$category[]=$query_run->fetch_assoc()['category'];		
			
		}
		//print_r($category);

		$number_of_question=[];
		$query="SELECT COUNT(id) AS num_of_ques FROM question WHERE category=";

		for($i=0;$i<sizeof($category);$i++)
		{
			$query_run= mysqli_query($con,$query.$category[$i]);
			if($query_run)
			{
				$num=$query_run->fetch_assoc()['num_of_ques'];
				for($j=1;$j<=$num;$j++)		//loop to print category and question number
				echo $category[$i].','.$j.';';
			}
			else
			{
				echo("could fetch number of questions for category ".$category[$i]);
			}
		}
	}	
	else
	{
		echo 'cannot fetch category';		//error 
	}
?>