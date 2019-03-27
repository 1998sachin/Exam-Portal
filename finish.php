<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Finish | BDCoE</title>
  <link rel="icon" type="image/png" href="images/12.png">
</head>
<style>
  .navbar-fixed {
    margin-bottom: 0;
  }

  .head {
    background: url(background.jpg);
    min-height: 60px;
  }

  .bdc {
    margin-left: 100px;
  }

  table {
    margin-top: 50px;
  }

  p {
    margin-left: 15%;
    font-size: 1.3em;
    font-weight: normal;
    font-family: 'Josefin Sans', sans-serif;
  }

  td {
    padding-left: 25%;
    border: 1px solid black;
    font-size: 1.2em;
  }
</style>

<body>
  <div class="navbar-fixed">
    <nav class="head">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo bdc white-text">BDCoE </a>
      </div>
    </nav>
  </div>
  <div class="cotainer">
    <div class="row">
      <div class="col s1"></div>
      <div class="col s10">
        <h3 class="center teal-text">
          <i class="fas fa-user-lock"></i>&nbsp;Thank You!</h3>
        <div class="all">
          <table class="striped center">
            <tr>
              <th>

                <p id='name'> Name:</p>

              </th>
              <th>

                <p id='st_no'>Student Number:</p>
                </Student>
              </th>
            </tr>
            <tr>
              <td>
                Number of Questions
              </td>
              <td id='no_of_ques'>
                
              </td>
            </tr>
            <tr>
              <td >
                Attempted
              </td>
              <td id='attempted'>

              </td>
              <tr>
                <td>
                  Not Attempted
                </td>
                <td id='not_attempted'>

                </td>
              </tr>
            </table>
        </div>
        <br>

        <div class="but center">
          <button class="btn btn-medium deep-purple white-text waves-effect waves-light center" onclick='take_home()'>Home</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // Custom JS & jQuery here
    });
    function display_fields()
    {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            var arr=this.responseText.split(';');
            //console.log(arr);
            var element=document.getElementById('name'); //setting the name
            element.innerHTML='Name: '+arr[0];

            element=document.getElementById('st_no'); //setting the student no
            element.innerHTML='Student Number: '+arr[1];

            element=document.getElementById('no_of_ques'); //setting the number of question
            element.innerHTML=arr[2];

            element=document.getElementById('attempted'); //setting the attempted
            element.innerHTML=arr[3];

            element=document.getElementById('not_attempted'); //setting not attempted
            element.innerHTML=arr[4];
            
          }
      };
      xmlhttp.open("POST", "get_finish_response.php", true);
      xmlhttp.send();
    } 

    //close the window
    function take_home()
    {
      location.href='Start.php'; //closes the current tab
    }
    display_fields(); //to display the fields

  </script>
    
</body>

</html>