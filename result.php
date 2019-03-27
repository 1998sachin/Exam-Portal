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
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <title>Result | BDcoE</title>
  <link rel="icon" type="image/png" href="images/12.png">
</head>
<style>
  .head {
    background-color: #ecf0f1;
  }

  .topic {
    margin-top: 40px;
  }
</style>

<body>
  <div class="navbar-fixed">
    <nav class="head">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo bdc deep-purple-text center">BDCoE Admin:Result</a>
      </div>
    </nav>
  </div>
  <div class="container profile">
    <div class="row">
      <div class="col s1"></div>
      <div class="col s10 table">
        <h2 class="center">Profile</h2>
        <table class="striped">
          <tr>
            <td>Name:</td>
            <td id='name'></td>
            <td>Student Number:</td>
            <td id='student_no'></td>
          </tr>
          <tr>
            <td>Branch:</td>
            <td id='branch'></td>
            <td>Gender:</td>
            <td id='gender'></td>

          </tr>
          <tr>
            <td>Hosteler:</td>
            <td id='hostler'></td>
            <td>Email id:</td>
            <td id='email'></td>
          </tr>
        </table>

      </div>

      <div class="row">
        <div class="col s12">
          <h4 class="center topic">Answers Given:</h4>
          <hr>
          <table class="striped" id='result_table'>
            <!-- enter the code to dispaly the answer table here -->
          </table>
        </div>
      </div>
      <div>
        <button id='save' type='submit' onclick="save_the_marks()">SAVE THE MARKS </button>
      </div>
    </div>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        // Custom JS & jQuery here

      });

      // to display the credentials of the student
      function get_credentials()
      {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              arr=this.responseText.split('#$#');
              //console.log(this.responseText);
              var element=document.getElementById('name');  //setting the name field
              element.innerHTML=arr[0];
              
              element=document.getElementById('student_no');
              element.innerHTML=arr[1];

              element=document.getElementById('branch');
              element.innerHTML=arr[2];

              element=document.getElementById('gender');
              element.innerHTML=arr[3];

              element=document.getElementById('hostler'); //see the database table
              if(arr[4]=='1')
              element.innerHTML='YES';
              else
              element.innerHTML='NO';

              element=document.getElementById('email');
              element.innerHTML=arr[5];
          
           }   
          };

        xmlhttp.open("POST", "get_user_info.php", true);
        xmlhttp.send();
      }

      // to fetch and display student reponse
      function get_data_and_display_response()
      {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              data=this.responseText.split('!@#$%)456(*&^');  //creates data array
              //console.log(data);
              display_in_table(data); //display data in table
           }   
          };

        xmlhttp.open("POST", "get_response_data_admin.php", true);
        xmlhttp.send();
      }

      //creates a dynmic table
      function display_in_table(data)
      {
        var table = document.getElementById('result_table');
        var size=parseInt(data.pop());  //last element contains the size

        
        //creating table head
        var table_head = document.createElement('tr');
        var arr=['Question id','Student Response','Correct Answer','Assigned Marks'];
        for(var i=0;i<4;i++)
        {
          var element=document.createElement('td');
          element.innerHTML=arr[i];
          table_head.appendChild(element);
        }
        table.appendChild(table_head);

        //creating the rows and filling them
        for(var i=0; i<size; i++)    
        {
          //creating the different columns
          var row = document.createElement('tr');
          var question_id=document.createElement('td'); //question id column
          var response=document.createElement('td');  //student response column
          var correct_ans= document.createElement('td');  //correct answer column
          var marks=document.createElement('td')    // marks column
          var input_marks=document.createElement('input');  //input field to insert the marks
          input_marks.id='input_marks';
          input_marks.className='marks_input';  //set the class.

          response.style.whiteSpace = 'pre';

          //filling the columns
          var row_data=data[i].split('__!854@__');
          question_id.innerHTML=row_data[0]; //fill question id

          response.innerHTML=decodeURI(row_data[1]); //student response
          correct_ans.innerHTML=row_data[2];  //value of correct answer
          
          input_marks.value='0';

          marks.appendChild(input_marks);
          row.appendChild(question_id);
          row.appendChild(response);
          row.appendChild(correct_ans);
          row.appendChild(marks);
          table.appendChild(row);

        }
      }


      //save the marks
      function save_the_marks()
      {
        var inputs=document.getElementsByClassName('marks_input');
        var total=0 //total marks scored

        for(var i=0;i<inputs.length;i++)
        {
          total+=parseInt(inputs[i].value);
        }
        //console.log(total);

        //saving in the server
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText=='all_ok') 
          {
            alert('saved successfully');
            //location.href='adminstart.php';
          }
          else
          {
            alert('error..try again');
          }                                  
          }
        };
        xmlhttp.open("POST", "save_marks.php?total="+total, true);
        xmlhttp.send();
      }

      get_credentials();  //to dislplay the credentials
      get_data_and_display_response();
      

    </script>
</body>

</html>