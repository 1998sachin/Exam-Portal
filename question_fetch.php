<?php
	include "dbconfig/config.php"; // contains config file
	session_start();

	if(isset($_SESSION['student_no']))
	{
		if(isset($_REQUEST['ques_category']) && isset($_REQUEST['ques_number']))		//if submit button is clicked
		{	
			$category=$_REQUEST['ques_category'];
			$query="SELECT * FROM question WHERE category=$category"; //data base query
			$query_run= mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0)		//if query fetch result
			{
				$n=$_REQUEST['ques_number'];
				for ($x = 0; $x <$n; $x++) 
				{
					$row=$query_run->fetch_assoc();
					//print_r($row);
					
				}
				echo $row['id'];
				echo '#$%%$#';
				echo $row['question'];
				echo '#$%%$#';
				echo $row['sub_question'];
				echo '#$%%$#';
				echo $row['option_1'];
				echo '#$%%$#';
				echo $row['option_2'];
				echo '#$%%$#';
				echo $row['option_3'];
				echo '#$%%$#';
				echo $row['option_4'];
				
				
				
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

	}	
	else
	{
		//nothing will be displayed
	}

	mysqli_close($con); //closing the db connection
?>