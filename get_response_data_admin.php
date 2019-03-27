<?php
	require 'dbconfig/config.php';
	session_start();

	$st_no=$_SESSION['student_no'];
	
	//to get correct answers from question table
	function get_correct_ans($id)
	{
		global $con;
		$query ="SELECT correct_answer FROM question WHERE id='$id'";
		$query_run= mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			$row=$query_run->fetch_assoc();
			return $row['correct_answer'];
		}
		else
		{
			return '0';
		}
	}	
	$query ="SELECT * FROM response WHERE student_no='$st_no'";
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row= $query_run->fetch_assoc();
		$total_question=0;		//count total number of questions
		foreach ($row as $key => $value) 
		{
 			if (strpos($key, 'question_id_') !== false) 
 			{
    			$id=explode("_",$key);	//extracts the question id
    			echo $id[2];
    			echo "__!854@__";
    			echo $value;
    			echo "__!854@__";
    			echo get_correct_ans($id[2]);

    			echo "!@#$%)456(*&^";
    			$total_question+=1;
    			
			}

		}
		echo $total_question;
	}
	else
	{
		echo "some error occured";
	}
	mysqli_close($con); //closing the db connection
?>