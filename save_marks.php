<?php
	require 'dbconfig/config.php';
	session_start();

	$st_no=$_SESSION['student_no'];
	$total=$_REQUEST['total'];	//total marks


	$query ="SELECT * FROM marks WHERE student_no='$st_no'";	//if student already exists
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$query="UPDATE marks SET total='$total' WHERE student_no='$st_no'";	//update the marks
		$query_run= mysqli_query($con,$query);
		if($query_run)
		{
			echo 'all_ok';
			//session_destroy();
		}
		else
		{
			echo 'error occured';
		}
	}
	else
	{
		$query="INSERT INTO marks VALUES('$st_no','$total')";	//insert a new record
		$query_run= mysqli_query($con,$query);
		if($query_run)
		{
			echo 'all_ok';
			//session_destroy();
		}
		else
		{
			echo 'error occured';
		}	
	}

	mysqli_close($con); //closing the db connection
	
?>