<?php
	require 'dbconfig/config.php';
	session_start();
	$st_no=$_SESSION['student_no'];

	$query="SELECT time_finish FROM response WHERE student_no='$st_no'";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)	
	{
		$row=$query_run->fetch_assoc();
		$finish_time=strtotime($row['time_finish']);
		$diff=$finish_time-strtotime(date('H:i:s'));	//getting the difference in secondsf
		echo $diff;	

	}
	else
	{
		echo"error";
	}

	mysqli_close($con); //closing the db connection
?>