
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Patua+One|Ubuntu:500" rel="stylesheet">

 
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Instructions | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

	<!--  -->

	<style>
  .main-header {
  background: url(background.jpg);
  background-size: cover;
  background-position: center;
  min-height: 130px;
	color: #fff;
	position:relative;
}

.instruction {
  font-size: 18px;
  margin-top:20px;
}

td{
  padding-left:20px;
}

.btn{
	margin-left:22%;
  margin-top:15px;
}
.topic{
margin-top:20px;}

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
    <div class="topic center">
    <h5>Please! <b class="red-text">Read</b> the instructions <b class="red-text">carefully!</b></h5>
    </div>
</header>





    <div class="row">
      <div class="col s12 m2"></div>
      <div class="col s12 m8 shadow">
        <div class="head">
         
             
<div class="instruction">
<table class="striped instr">
<tr>
<td>Total duration of this test is <b>60 minutes</b>.</td>
</tr>
<tr>
<td>There will be <b>40 Single Option Correct MCQ questions.</b></td>
</tr>
<tr>
<td>There is <b>4 section</b> in the question paper consisting of <b>10 questions in each section</b>.</td>
</tr>
<tr>
<td>There are <b>2 alogorithm questions</b> at the end of the paper</td>
</tr>
<tr>
<td>Each question is allotted <b>4 (Four)</b> marks for correct response.</td></tr>
<tr>
<td>Candidates will be awarded marks as stated above in instruction <b>No.5 </b>forcorrect response of each question. <b>1 (one) mark will be deducted</b> for indicating incorrect response for each question. </td>
</tr>
<tr>
<td>
<b>No deduction</b> from the total score will be made if no response is indicated.</td>
</tr>

</table>
</div>

<div>
    
</div>
<button type="submit" class="btn green white-text waves-effect waves-light" onclick="take2test()" id="start/resume" name="but">START THE TEST</button>

<div class="col s12 m2"></div>
</div>

  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

  

</body>

</html>
<!-- server protect -->
<?php
  if(isset($_SESSION['student_no']))
  {
    //echo $_SESSION['student_no'];
  }
  else
  {
    header("location: Start.php");
  }
?>

<script type="text/javascript">
  function create_response_entry()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      {
        if(this.responseText=='time_up')
        {
          alert('Test is finished');
          location.href='finish.php';
        }
        else if(this.responseText=="all_ok") 
        {
          set_the_times();
          
        }
        else
        {
          alert('there is a problem');  //no chance, you can't go ahead
          //console.log("could not create response entry");
        }

      }                     
          
    
    };
    xmlhttp.open("POST", "create_response_entry.php", true);
    //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
    
  }

  function take2test()
  {
    create_response_entry();      //enable this when you are ready
    //location.href='Test.php';   //this must be removed
  }

  function set_the_times()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) 
      {
        if(this.responseText=="success_in_time") 
        {
            console.log("everything is working great")//times are set successlly
            location.href='Test.php';   //it takes to the test 
        }
        else
        {
          alert('there is a problem');  //no chance, you can't go ahead
          console.log("times are not set");
        }

      }                     
  
    };
    xmlhttp.open("POST", "set_time.php", true);
    //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
  }
</script>
