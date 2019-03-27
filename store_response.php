<?php
	require 'dbconfig/config.php';
	session_start();
	
	//string parser
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

	$st_no=$_SESSION['student_no'];

	$query="SELECT time_start,time_finish,response_lock FROM response WHERE student_no='$st_no'"; //get the finish time of the user
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row=$query_run->fetch_assoc();
		if($row['time_finish']>date('H:i:s') && date('H:i:s')>=$row['time_start'] && $row['response_lock']=='0' )		//if he has time and lock isn'0', store the response else not.
		{
			$question_id='question_id_'.$_REQUEST['question_id'];
			$response=$_REQUEST['response'];
			$response=stringParser($response);  //I cant take risk of sql injection attacks
			echo $response;
			$query='UPDATE response SET '.$question_id.'="'.$response.'" WHERE student_no='.$st_no;
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
			echo 'time_up';
		}	

	}
	else
	{
		echo "could not get finish time";
	}	

	

	mysqli_close($con); //closing the db connection

?>