<?php
	require 'dbconfig/config.php';
	session_start();
	$st_no=$_SESSION['student_no'];
	$query="SELECT * FROM response WHERE student_no='$st_no'";	//query to fetch student response
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)	
	{
		$row=$query_run->fetch_assoc();

		$name=$row['name'];		//name value
		$no_of_ques=0;			//total number of question
		$not_attempted=0;		//number of question not attempted

		foreach($row as $key => $value) 		//loop through each key of $row
		{
    		if (strpos($key, 'question_id_') !== false) 		//if key contains 'question_id_' so that it is a question column 
    		{
    			$no_of_ques+=1;
    			if($value=='0' or $value=='')		//if response is empty
    			{
    				$not_attempted+=1;
    			}
			}
		}
		echo $name.';';
		echo $st_no.';';
		echo $no_of_ques.';';
		echo ($no_of_ques-$not_attempted).';';
		echo $not_attempted;

	}
	else
	{
		echo"error";
	}

	session_destroy(); //destroys the session
	mysqli_close($con); //closing the db connection
?>