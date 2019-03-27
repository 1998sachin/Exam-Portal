<?php
	require 'dbconfig/config.php';
	session_start();
	if(isset($_SESSION['student_no']))
	{
		$st_no= $_SESSION['student_no'];
		$query="UPDATE response SET response_lock='1' WHERE student_no='$st_no'";
		$query_run= mysqli_query($con,$query);
		if($query_run)		//if query fetch result
		{
			echo 'success';
		}	
		else
		{
			echo 'some error occured';		//error 
		}
	}
	else
	{
		echo"working";//nothing happens
	}

	mysqli_close($con); //closing the db connection
?>