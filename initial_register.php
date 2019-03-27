<?php
	include "dbconfig/config.php"; // contains config file
	 
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

	
	if (sizeof($_REQUEST)>=6)	//if all the required fields are submitted
	{
		$name=$_REQUEST['name'];
		$name=stringParser($name); //I must be carefull to avoid sql injections
		
		$branch=$_REQUEST['branch'];
		$branch=stringParser($branch);
		
		$st_no=$_REQUEST['st_no'];
		$st_no=stringParser($st_no);

		$mb_no=$_REQUEST['mb_no'];
		$mb_no=stringParser($mb_no);

		$gender=$_REQUEST['gender'];
		$gender=stringParser($gender);

		$hostler=$_REQUEST['hostler'];
		$hostler=stringParser($hostler);

		$email=$_REQUEST['email'];
		$email=stringParser($email);

		$password=$_REQUEST['password'];
		$password=stringParser($password);

		$query="SELECT * FROM student_data WHERE student_no =$st_no";	//running the query
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '1';
			}
			else
			{
				$query="INSERT into student_data values('$name','$branch','$gender','$hostler','$st_no','$mb_no','$email','$password')";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo '2';
				}
				else
				{
					echo "ERROR";
				}
			}
	}
	else
	{
		echo "false";
	}

	mysqli_close($con); //closing the db connection
?>