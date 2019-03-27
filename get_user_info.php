<?php
	require 'dbconfig/config.php';
	session_start();

	$st_no=$_SESSION['student_no'];

	$query="SELECT name, student_no, branch, gender, hostler, email FROM student_data WHERE student_no='$st_no'";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row=$query_run->fetch_assoc();
		foreach ($row as $key => $value) 
		{
 		echo $value.'#$#';	
		}
	}
	else
	{
		echo "some error occured";
	}

	mysqli_close($con); //closing the db connection
?>