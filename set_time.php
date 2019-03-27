<?php
	require 'dbconfig/config.php';
	session_start();
	$st_no=$_SESSION['student_no'];
	$query="SELECT time_start FROM response WHERE student_no='$st_no'"; //getting the student from response table
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row=$query_run->fetch_assoc();
		if(is_null($row['time_start']))			//first time click
		{
			$start=date("H:i:s");
			$finish=date('H:i:s',strtotime('+5 minutes',strtotime($start)));
			$query=" UPDATE response SET time_start= '$start', time_finish='$finish' WHERE student_no='$st_no'"; //time values are filled
			$query_run= mysqli_query($con,$query);
			if($query_run)	
			{
				echo"success_in_time";
			}
			else
			{
				echo"fail";
			}
		}
		else
		{
			echo "success_in_time"; //time is already set

		}

	}
	else
	{
		echo"time cannot be saved";
	}

	mysqli_close($con); //closing the db connection
?>