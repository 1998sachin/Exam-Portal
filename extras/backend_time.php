<?php
	require 'dbconfig/config.php';
	
	
	//It repeatedly calls change_current_time() 
	function repeat($seconds)
	{
	    while(true)
	    {
	        if(change_current_time())
	        {
	        	//echo"timer running";
	        }
	    	else
	    	{
	    		break;
	    	}
	        sleep($seconds);
	    }
	}

	function change_current_time()  //$my_func is reference for the function change_current_time()
	{
		global $st_no;		//global variable $st_no
		global $con;		//glabal $con
		$current=date("H:i:s");		//get current time
		$query="SELECT time_finish FROM response WHERE student_no='$st_no'";	//get the finish time
		$query_run= mysqli_query($con,$query);
		$row=$query_run->fetch_assoc();
		if($row['time_finish']>$current)	//finish time is more than current time 
		{
			$query=" UPDATE response SET time_current='$current' WHERE student_no='$st_no'";	//updating the current time
			$query_run= mysqli_query($con,$query);
			if($query_run)	
			{
				//echo"success_in_time";
				return 1;
			}
			else
			{
				//echo"fail";
				return 0;
			}
		}

		else
		{
			return 0;
		}
		
	}

	
	//$st_no=$_SESSION['student_no'];
	$st_no=1610002;
	$query="SELECT time_start FROM response WHERE student_no='$st_no'";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		repeat(20);
		//change_current_time();

	}
	else
	{
		echo"time cannot be saved";
	}

	mysqli_close($con); //closing the db connection

?>