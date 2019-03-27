<?php
	include "dbconfig/config.php"; // contains config file
	session_start();

	//stringParser
	function stringParser($mystring)
	{
		$array = str_split($mystring);
		$parsed_array=[];
		for($i=0; $i<sizeof($array); $i++)
		{
			if($array[$i]=='"') 
			{
				$parsed_array[]='\"';
			}
			else if(ord($array[$i])==92)
			{
				$parsed_array[]=$array[$i];
				$parsed_array[]=$array[$i];
			}
			else
			{
				$parsed_array[]=$array[$i];
			}
		}
		return implode('', $parsed_array);
	}

	// for login
	if(isset($_REQUEST['u_name']) && isset($_REQUEST['pass']))		//if submit button is clicked
	{	
		$l_st_no=$_REQUEST['u_name'];		//storing student number
		$l_st_no=stringParser($l_st_no);		//I can't take risk of sql injections

		$l_password=$_REQUEST['pass'];	//storing password
		$l_password=stringParser($l_password);	

		$query="SELECT 	name FROM student_data WHERE student_no='$l_st_no' and password='$l_password'";	//data base query
		$query_run= mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)		//if query fetch result
		{
			$_SESSION['student_no']=$l_st_no;
			echo "true";
			
		}	
		else
		{
			echo 'false';		//error 
		}
	}
	else
	{
		echo "processing error";
	}
	mysqli_close($con); //closing the db connection
?>