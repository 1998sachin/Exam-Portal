<!DOCTYPE html>
<html>

<head>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bdcoe | Start</title>
  <link rel="icon" type="image/png" href="images/12.png">
</head>
<style>
  .navbar-fixed {
    margin-bottom: 0;
  }

  .head {

    background-color: #ecf0f1;
  }

  .section-buttons {
    margin-top: 13%;
  }

  .green-text {
    margin-top: 20px;
  }
</style>

<body>
  <div class="navbar-fixed">
    <nav class="head">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo bdc deep-purple-text center">BDCoE Admin</a>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s3"></div>
      <div class="col s6 section-buttons center">
        <button class="btn btn-medium red darken-2 white-text waves-effect waves-light" onclick="goto_addquestion();">Add Questions</button>
        <br>
        <br>
        <input class="textsearch" placeholder="Search Student number" id='student_no' type="text">
        <button class="btn btn-medium green-text white-text waves-effect waves-light" onclick="fetch_result()">See Result</button>
      </div>
      <div class="col s3"></div>
    </div>
  </div>



  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Custom JS & jQuery here

    });
    //take to the addquestion.html
    function goto_addquestion()
    {
    	location.href="addquestion.html";
    }

    //fetch result
    function fetch_result()
    {
    	var st_no=document.getElementById('student_no').value;	//getting the student no
    	var xmlhttp = new XMLHttpRequest();
      	xmlhttp.onreadystatechange = function() {
      	if (this.readyState == 4 && this.status == 200) {
      		console.log(this.responseText);
      		if(this.responseText=='all_ok') 
      		{
      			location.href='result.php';
      		}
      		else
      		{
      			console.log('some error occured');
      		}                                  
          }
      	};
      	xmlhttp.open("POST", "set_session.php?student_no="+st_no, true);
      	xmlhttp.send();
     
    }
    

  </script>
</body>

</html>