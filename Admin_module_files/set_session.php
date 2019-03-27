<?php
	session_start();
	$_SESSION['student_no']=$_REQUEST['student_no'];
	if(isset($_SESSION['student_no']))
	{
		echo"all_ok";
	}
	else
	{
		echo "session variable not set";
	}
?>