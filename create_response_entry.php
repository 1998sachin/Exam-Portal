<?php
	require "dbconfig/config.php"; // contains config file
	session_start();
	$st_no=$_SESSION['student_no'];

	$query="SELECT time_finish,time_start,response_lock FROM response WHERE student_no='$st_no'";	//checks if response entry is already created, if so then fetches the finish time	
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row=$query_run->fetch_assoc();
		if($row['time_finish']>date('H:i:s') && date('H:i:s')>=$row['time_start'] && $row['response_lock']=='0')
		{
			echo"all_ok";
		}
		else
		{
			echo"time_up";		//if time is up
		}
	}
	else
	{
		$query="SELECT name FROM student_data WHERE student_no='$st_no'";
		$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)		//if query fetch result
			{
				$row=$query_run->fetch_assoc();	
				$name=$row['name'];
				$query='INSERT INTO response (student_no,name) VALUES('.$st_no.', "'.$name.'")';
				$query_run= mysqli_query($con,$query);
				
				if($query_run)
				{
					echo 'all_ok';
				}
				else
				{
					echo 'some_error occured';
				}
			}	
			else
			{
				echo 'false';		//error 
			}

	}

	mysqli_close($con); //closing the db connection

?>