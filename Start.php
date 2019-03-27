<?php
  include "dbconfig/config.php"; // contains config file
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/start.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Start_Page | BDCoE</title>
</head>

<body>
  <header class="main-header">
    <nav class="transparent">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">BigData CoE</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a class="active-link" href="index.html">Home</a>
            </li>
            <li>
              <a href="solution.html">About Us</a>
            </li>
            <li>
              <a href="#login-modal" class="modal-trigger">Login</a>
            </li>
            <li>
              <a href="#register-modal" class="btn purple modal-trigger">Register</a>
            </li>
            <li>
              <a href="https://facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
          <ul class="side-nav" id="mobile-nav">
            <h4 class="purple-text text-darken-4 center">BDCoE</h4>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-home grey-text text-darken-4"></i> Home</a>
            </li>
            <li>
              <a href="http://bdcoe.co.in/l">
                <i class="fa fa-cog grey-text text-darken-4"></i> About Us</a>
            </li>
            <li>
              <a href="#login-modal">
                <i class="fa fa-users grey-text text-darken-4 modal-trigger"></i> Login</a>
            </li>
            <li>
              <div class="divider">

              </div>
            </li>
            <li>
              <a href="#register-modal" class="btn purple modal-trigger"> Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="showcase container">
      <div class="row">
        <div class="col s12 m10 offset-1 center">
          <h5>Welcome To BigData CoE Online Test Portal</h5>
          <h1>Recruitment Drive 2K18 </h1>
          <p>First time users click on the the
            <strong>"Register Here"</strong> button, else click on the login button. If you face any query please share it with the
            coordinators around !</p>
          <br>
          <br>
          <a href="#login-modal" class="btn btn-large white purple-text modal-trigger">Login</a>
          <a href="#register-modal" class="btn btn-large purple white-text modal-trigger">Register Here</a>
        </div>
      </div>
    </div>
  </header>

  <section class="section section-icons center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons medium deep-purple-text text-darken-2">access_time</i>
            <h5 class="grey-text text-darken-4">Test Duration</h5>
            <p>The recruitment test is conducted for one hour, and no extra time shall be provided once the exam gets over.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons medium deep-purple-text text-darken-2">edit</i>
            <h5 class="grey-text text-darken-4">Questions</h5>
            <p>The test contains total 32 MCQ questions, with two algorithms included. </p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons medium deep-purple-text text-darken-2">error</i>
            <h5 class="grey-text text-darken-4">Be Alert</h5>
            <p>Negative marks are also associated with some questions inside the test, so be alert while answering.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-copyright deep-purple white-text darken-1">
      <div class="container">
        BigData CoE &copy; 2018

      </div>
    </div>
  </footer>

  <!-- fill the registration codes here -->

 <div id="register-modal" class="modal">
    <div class="modal-content">
      <h4>Register Yourself</h4>
      <p>Register to take part in the test</p>
        <div class="input-field">
          <input type="text" id="name" name='name' autocomplete="off">
          <label for="name">Full Name</label>
          <span id="username" class="red-text "></span>
        </div>
        <div class="input-field">
          <select id='branch'>
            <option value=""  disabled selected>Select Branch</option>
            <option value="CSE">CSE</option>
            <option value="IT">IT</option>
          </select>
        </div>
        <div class="input-field">
          <select id='gender'>
            <option value=""  disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="input-field">
          <select id='hostel'>
            <option value=""  disabled selected>Select Hostler or Day-scholar</option>
            <option value="1">Hostller</option>
            <option value="0">Day-Scholar</option>
          </select>
        </div>
        <div class="input-field">
          <input type="text" id="stdnumber" name='st_no' autocomplete="off">
          <label for="stdnumber">Student Number</label>
          <span id="studentno" class="red-text "></span>
        </div>
        <div class="input-field">
          <input type="text" id="mobile" name='mb_no' autocomplete="off">
          <label for="mobile">Mobile Number</label>
          <span id="mobilenumber" class="red-text "></span>
        </div>
        <div class="input-field">
          <input type="email" id="email" name='email' autocomplete="off">
          <label for="email">Email@address</label>
          <span id="mail" class="red-text "></span>
        </div>
        <div class="input-field">
          <input type="password" id="password" name='password' autocomplete="off">
          <label for="password">Password</label>
          <span id="pass" class="red-text "></span>
        </div>
        <div class="input-field">
          <input type="password" id="cpassword" name='cpassword' autocomplete="off">
          <label for="cpassword">Confirm Password</label>
          <span id="confpassword" class="red-text "></span>
        </div>
        <div class="input-field">
          <span id="status_message" class="red-text "></span>
        </div>
        <div class="input-field">
          <button type="submit" name="submit_1" value="Submit_1" onclick="register_validation()" class="btn btn-medium waves-effect waves-light white-text green" autocomplete="off">REGISTER</button>
          <a href="#" class="modal-action modal-close btn waves-effect waves-light red">
            <i class="fa fa-times-circle"></i> Close
          </a>

        </div>
      </div>

  </div>


  <!-- fill the login code here -->
  <div id="login-modal" class="modal">
    <div class="modal-content">
      <h4>Login Here</h4>
      <p>Provide with the data, filled at the time of Registration!</p>
        <div class="input-field">
          <input type="text" id="login_stdnumber" name='login_st_no'>
          <label for="stdnumber">Student Number</label>
          <span id="login_studentno" class="red-text "></span>
        </div>
        <div class="input-field">
          <input type="password" id="login_password" name='login_password'>
          <label for="password">Password</label>
          <span id="login_pass" class="red-text "></span>
        </div>
        <div class="input-field">
          <span id="wrong_detail" class="red-text "></span>
        </div>
        <div class="input-field">
          <button type="submit" name="submit_2" value="Submit_2" class="btn btn-medium waves-effect waves-light white-text green" onclick="login_validation()" autocomplete="off" >SUBMIT</button>
          <a href="#" class="modal-action modal-close btn waves-effect waves-light red">
            <i class="fa fa-times-circle"></i> Close
          </a>

        </div>
      
    </div>

  </div>
<!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.button-collapse').sideNav();
      $('.modal').modal();
      $('select').material_select()
    });
  </script>
   <script type="text/javascript">
    //register validation
    function register_validation()
    {
      check=register_client_validation();
      if(check==true)
      {
        register_server_validation();
      }
    }
    //register client validation
    function register_client_validation() {

      var name = document.getElementById('name').value;
      var stdnumber = document.getElementById('stdnumber').value;
      var mobile = document.getElementById('mobile').value;
      var password = document.getElementById('password').value;
      var email = document.getElementById('email').value;
      var cpassword = document.getElementById('cpassword').value;

      if (name == "") {
        document.getElementById('username').innerHTML = "**Please enter Your FullName";
        return false;
      }
      if ((name.length <= 2) || (name.length > 30)) {
        document.getElementById('username').innerHTML = "** Length of name should be between 2 to 30";
        return false;
      }
      if (!isNaN(name)) {
        document.getElementById('username').innerHTML = "** Stop Joking, enter your actual name!";
        return false;
      }

      if (stdnumber == "") {
        document.getElementById('studentno').innerHTML = "** Please enter your Student Number";
        return false;
      }
      if (isNaN(stdnumber)) {
        document.getElementById('studentno').innerHTML = "** Stop Joking, enter your actual Student Number!";
        return false;
      }
      if (stdnumber.length != 7) {
        document.getElementById('studentno').innerHTML = "**Please enter your correct Student Number";
        return false;
      }

      if (mobile == "") {
        document.getElementById('mobilenumber').innerHTML = "**Please enter Your Mobile Number";
        return false;
      }
      if (isNaN(mobile)) {
        document.getElementById('mobilenumber').innerHTML = "** Stop Joking, enter your actual Mobile Number Number!";
        return false;
      }
      if (mobile.length != 10) {
        document.getElementById('mobilenumber').innerHTML = "**Please enter your correct Mobile  Number";
        return false;
      }

      if (email == "") {
        document.getElementById('mail').innerHTML = "**Please enter Your Email@address";
        return false;
      }
      if (email.indexOf('@') <= 0) {
        document.getElementById('mail').innerHTML = "**Enter valid Email Id";
        return false;
      }
      if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
        document.getElementById('mail').innerHTML = "**Enter your correct email address!";
        return false;
      }
      if (password == "") {
        document.getElementById('pass').innerHTML = "**Please enter a password";
        return false;
      }
      if ((password.length <= 4) || (password.length > 20)) {
        document.getElementById('pass').innerHTML = "**Password should be between 5 to 20 characters long";
        return false;
      }

      if (password != cpassword) {
        document.getElementById('confpassword').innerHTML = "**Password do not match!";
        return false;
      }

      if (cpassword == "") {
        document.getElementById('confpassword').innerHTML = "**Please enter password once again";
        return false;
      }
      return true;
    }
    //register server validation 
    function register_server_validation()
    {
        var name = document.getElementById('name').value;
        var stdnumber = document.getElementById('stdnumber').value;
        var mobile = document.getElementById('mobile').value;
        var password = document.getElementById('password').value;
        var gender= document.getElementById('gender').value;
        var hostler=document.getElementById('hostel').value;
        var email = document.getElementById('email').value;
        var branch= document.getElementById('branch').value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);

                if (this.responseText=='false')
                {
                  document.getElementById("status_message").innerHTML="**something went wrong";
                }
                else 
                {
                  if(this.responseText=='1')
                  {
                    document.getElementById("status_message").innerHTML='user already registered...try login';  
                  }
                  else if(this.response=='2')
                  {
                    if (confirm("User registered successfully...You can login")) 
                    {
                      location.href='Start.php';
                    } 
                  }
                  else 
                  {
                     document.getElementById("status_message").innerHTML='**something went wrong';
                  }  

                }

            }
        };
        xmlhttp.open("POST", "initial_register.php?name="+name+"&st_no="+stdnumber+"&mb_no="+mobile+"&password="+password+"&email="+email+"&branch="+branch+"&gender="+gender+"&hostler="+hostler, true);
        //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();

    }
    // validation for login
    function login_validation(){
      check=login_client_validation();
      if(check==true)
      {
        login_server_validation();
      }
    
    }
    //login client validation
    function login_client_validation()
    {
      var login_stdnumber = document.getElementById('login_stdnumber').value;
      var login_password = document.getElementById('login_password').value;

      if (login_stdnumber == "") {
        document.getElementById('login_studentno').innerHTML = "** Please enter your Student Number";
        return false;
      }
      if (isNaN(login_stdnumber)) {
        document.getElementById('login_studentno').innerHTML = "** Stop Joking, enter your actual Student Number!";
        return false;
      }
      if (login_stdnumber.length != 7) {
        document.getElementById('login_studentno').innerHTML = "**Please enter your correct Student Number";
        return false;
      }
      if (login_password == "") {
        document.getElementById('login_pass').innerHTML = "**Please enter a password";
        return false;
      }
      if ((login_password.length <= 4) || (password.length > 20)) {
        document.getElementById('login_pass').innerHTML = "**Password should be between 5 to 20 characters long";
        return false;
      }
      return true;
    }

    //login server validation
    function login_server_validation()
    {
      var username=document.getElementById('login_stdnumber').value;
      var password=document.getElementById('login_password').value;
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);

                if (this.responseText=='false')
                {
                  document.getElementById("wrong_detail").innerHTML="**wrong username or password";
                }
                else if(this.response=='true')
                {
                  location.href='profile.php';
                }

            }
        };
        xmlhttp.open("POST", "initial_login.php?u_name="+username+"&pass="+password, true);
        //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }
    

  </script>

</body>

</html>
