<?php
	require 'dbconfig/config.php';
	$query='SELECT id FROM question ORDER BY id  DESC LIMIT 1';
	$query_run= mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)		//if query fetch result
	{
		$row=$query_run->fetch_assoc();
		echo $row['id'];
	}	
	else
	{
		echo 'some error occured';		//error 
	}

	mysqli_close($con); //closing the db connection

?>