<?php
	require 'dbconfig/config.php';
	session_start();

	if(isset($_SESSION['student_no']))	//if someone has loggged in
  	{
    	//run the script
  	}
  	else
  	{
    	header("location: Start.php");
  	}	

	$stno=$_SESSION['student_no'];
	$sql = "SELECT name,branch, student_no, mb_no, email FROM student_data WHERE student_no = '$stno'";
	$result = $con->query($sql);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
	}
	else
	{
		echo "error";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>
	<title>PROFILE | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">
	
  
	
</head>
	<style>
		.primary-overlay {
  background: rgba(112, 81, 176, 0.7);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
		.total {
  margin: 150px 150px;
  border: 0.5px solid #f3f3f3;
  border-radius: 10px;
  box-shadow: 10px 0 10px #95a5a6;
  margin-top: 50px;
}

.head{
    font-size: 20px;
    
    background-color: #f3f3f3;
    
    padding-left: 25px;
}
.main-header {
  background: url(background.jpg);
  background-size: cover;
  background-position: center;
  min-height: 150px;
	color: #fff;
	position:relative;
}

.floatdown {
	position: absolute;
	border-radius:50%;
	 left: 47%;
	 top: 55%;
     -moz-transform: translate(-50%, -50%)
     -webkit-transform: translate(-50%, -50%)
     -ms-transform: translate(-50%, -50%)
     -o-transform: translate(-50%, -50%)
     transform: translate(-50%, -50%);
		height:120px;
		weight:120px;
}
.info{
	position:relative;
	margin-top:70px;
}
.prof{
	padding-left:46%;
}
td{
	font-family: 'Raleway', sans-serif;
	font-size:1.2em;
		
}


.btn{
	margin-left:40%;
	margin-top:30px;
}

.ans{
	padding-left:30px;
}


</style>

</head>

<body>
	<header class="main-header">
		<nav class="transparent">
      <div class="container">
        <div class="nav-wrapper">
         <h4> BigData CoE</h4>
      
        </div>
      </div>
    </nav>
		<div class="showcase container">
      <div class="row">
				<img src="avatar.jpg" class="floatdown" alt="profie image">
      </div>
		</div>
	</header>		
        

		
      <div class="col s12 m6 offset-3 info">
				<div class="prof">
					<h4>Your Profile</h4>
				</div>
      	<table style="width:70%" class="container striped highlight responsive-table">
				
					<tr>
						<td class="text right-align"><i class="fas fa-user"></i>&nbsp;

						Name&nbsp;&nbsp;&nbsp;:</td>
						<td class="ans"><?php	echo $row['name']?></td>
					</tr>
					<tr>
				    <td class="text right-align"><i class="fas fa-id-card"></i>&nbsp;

						Student Number&nbsp;&nbsp;&nbsp;:</td>
						<td class="ans"><?php	echo $row['student_no']?></td>
					</tr>
					<tr>
				    <td class="text right-align"><i class="fas fa-code-branch"></i>&nbsp;

						Branch&nbsp;&nbsp;&nbsp;:</td>
				    <td class="ans"><?php	echo $row['branch']?></td>
				  </tr>
  				<tr>
				    <td class="text right-align"><i class="fas fa-mobile-alt"></i>&nbsp;

						Contact&nbsp;Number&nbsp;&nbsp;&nbsp;:</td>
				    <td class="ans"><?php	echo $row['mb_no']?></td>
					</tr>
					<tr>
						<td class="text right-align"><i class="fas fa-envelope"></i>&nbsp;

						Email&nbsp;Address&nbsp;&nbsp;&nbsp;:</td>
				    <td class="ans"><?php	echo $row['email']?></td>
				  </tr>
				
				</table>
			</div>
			
		</div>
		<a href="instructions.php" class="btn btn-medium waves-effect waves-light center deep-purple white-text">Instructions for the test</a>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>

</html>
