<?php
	require 'dbconfig/config.php';
	session_start();

	$st_no=$_SESSION['student_no'];
	$question_id='question_id_'.$_REQUEST['question_id'];

	$query='SELECT '.$question_id.' AS response FROM response WHERE student_no='.$st_no;
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)		//if query fetch result
	{
		$row=$query_run->fetch_assoc();
		echo $row['response'];
	}	
	else
	{
		echo 'some error occured';		//error 
	}
	mysqli_close($con); //closing the db connection
?>