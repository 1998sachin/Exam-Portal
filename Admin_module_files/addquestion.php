<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>add | BDCoe</title>
  <link rel="icon" type="image/png" href="images/12.png">
</head>
<style>
  .navbar-fixed {
    margin-bottom: 0;
  }

  .head {

    background-color: #ecf0f1;
  }

  button {
    margin-bottom: 30px;
  }

  input[type=textbox] {
    width: 100%;
    height: 60px;
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
      <div class="col s10">
        <h3 class="center">Add Questions</h3>
        <br>
        <br>
        <table class="highlight">
          <tr>
            <td>Questions:</td>
            <td>
              <input id='question' type="textbox">
            </td>
          </tr>
          <tr>
            <td>Sub Questions:</td>
            <td>
              <input id='sub_question'  type="textbox">
            </td>
          </tr>
          <tr>
            <td>Category:</td>
            <td>
              <div class="input-field">
                <select id='option'>    <!-- why 'hostel'-->
                  <option value="" disabled selected>Select Category of question</option>
                  <option value="1">C</option>
                  <option value="2">Web</option>
                  <option value="3">Machine learning</option>
                  <option value="4">BigData</option>
                  <option value="5">Aptitude</option>
                  <option value="6">Algorithm</option>

                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Option 1:</td>
            <td>
              <input type="text" name="" id="option_1">
            </td>
          </tr>
          <tr>
            <td>Option 2:</td>
            <td>
              <input id='option_2' type="text">
            </td>
          </tr>
          <tr>
            <td>Option 3:</td>
            <td>
              <input id='option_3' type="text">
            </td>
          </tr>
          <tr>
            <td>Option 4:</td>
            <td>
              <input id='option_4' type="text">
            </td>
          </tr>
          <tr>
            <td>Correct Option</td>
            <td>
              <div class="input-field">
                <select id='correct_ans'>    <!-- why 'hostel'-->
                  <option value="" disabled selected>Select Correct Option</option>
                  <option value="0">None</option>
                  <option value="1">option 1</option>
                  <option value="2">option 2</option>
                  <option value="3">option 3</option>
                  <option value="4">option 4</option>
                  
                </select>
              </div>
            </td>
          </tr>
        </table>
        <div class="center">
          <button class="btn btn-medium deep-purple white-text waves-effect waves-large center" id='submit_button' onclick='store_the_question();'>Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Custom JS & jQuery here
      $('select').material_select()
    });

    //stores the question in question table
    function store_the_question()
    {
      var question=document.getElementById('question');   //getting the input fields
      var sub_question=document.getElementById('sub_question');
      var category=document.getElementById('option');
      var option_1=document.getElementById('option_1');
      var option_2=document.getElementById('option_2');
      var option_3=document.getElementById('option_3');
      var option_4=document.getElementById('option_4');
      var correct_ans=document.getElementById('correct_ans');
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            if(this.responseText=='all_ok')
            {
              alert('question added successfully');
            }
            else
            {
              alert('some eror occured');
            }
                       
          }
      };
      xmlhttp.open("POST", "store_question.php?question="+question.value+"&sub_question="+sub_question.value+"&category="+category.value+"&option_1="+option_1.value+"&option_2="+option_2.value+"&option_3="+option_3.value+"&option_4="+option_4.value+"&correct_ans="+correct_ans.value, true);
      xmlhttp.send();
     
    }

  </script>
</body>

</html>