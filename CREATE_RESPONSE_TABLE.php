<?php
	require 'dbconfig/config.php';
	/*Insert code for other columns*/
	$query="CREATE TABLE `response` ( `student_no` VARCHAR(7) NOT NULL , `name` VARCHAR(200) NOT NULL ,`response_lock` VARCHAR(2) NOT NULL DEFAULT '0' , `time_start` TIME(2) NULL DEFAULT NULL , `time_finish` TIME(2) NULL DEFAULT NULL ,  PRIMARY KEY (`student_no`)) ";
	$query_run= mysqli_query($con,$query);
	
	if($query_run)
	{
		//echo "sucess";
	}
	else
	{
		echo "error";
	}
/*-------------------------------------------------------------------------------------------------------*/
	//this code for only mcq question
	$query="SELECT id FROM question WHERE category<>6 ";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)		//if query fetch result
	{
		$total_question=mysqli_num_rows($query_run);	//getting the total no of rows
		for($i=0;$i<$total_question;$i++)	
		{
			$row=$query_run->fetch_assoc();
			$string='question_id_'.$row['id'];
			$query="ALTER TABLE response ADD  $string VARCHAR(10) DEFAULT '0'"; //0 means unattempted
			mysqli_query($con,$query);
		}
	}	
	else
	{
		echo 'some error occured';		//error 
	}
/*-----------------------------------------------------------------------------------------------------------*/
	
	/*Insert code to store response for algorithmic questions */
	$query="SELECT id FROM question WHERE category=6 ";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)		//if query fetch result
	{
		$total_question=mysqli_num_rows($query_run);	//getting the total no of rows
		for($i=0;$i<$total_question;$i++)	
		{
			$row=$query_run->fetch_assoc();
			$string='question_id_'.$row['id'];
			$query="ALTER TABLE response ADD  $string VARCHAR(5000) DEFAULT ''"; //0 means unattempted
			mysqli_query($con,$query);
		}
	}	
	else
	{
		echo 'some error occured';		//error 
	}

	mysqli_close($con); //closing the db connection


?>