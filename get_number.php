<?php
	require 'dbconfig/config.php';

	if(isset($_REQUEST['ques_category']))
	{
		$category=$_REQUEST['ques_category'];
		$query="SELECT count(*) AS total FROM question WHERE category=$category"; //data base query
		$query_run= mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			$row=$query_run->fetch_assoc();	
			echo $row['total'];
		}
		else
		{
			echo "some_error";
		}
	}
	else
	{
		echo "processing error";
	}
?>