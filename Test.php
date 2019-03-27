<?php
  session_start();
  if(isset($_SESSION['student_no']))
  {
    //run the script
  }
  else
  {
    header("location: Start.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
 
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600" rel="stylesheet">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test | BDCoE</title>
  <link rel="icon" type="image/png" href="images/12.png">
</head>


<style>
body
{
    position: fixed; 
    overflow-y: scroll;
    width: 100%;
}
  .navbar-fixed {
    margin-bottom: 0;
  }

  .head {

    background-color: #ecf0f1;
  }

  .bdc {
    margin-left: 40px;

  }

  .left-part {
    height: 100vh;
    display: grid;
    position:relative;
    overflow-y: scroll;
  }

  .right-part {
    background-color: #ecf0f1;
    position: relative;
    
    height: 100vh;
    z-index: 100;
    border-left: 1px solid #9e9e9e;
    overflow: scroll;

  }
   #left-buttons {
    position: fixed;
    width:100vw;
    bottom: 0px;
    background-color:#ecf0f1;
    height: 80px;
    left: 0px;
   z-index:98;

  }

  #left-buttons button {
    margin-left: 5px;
    margin-top:20px;
  }

  .but {
    margin-top: 2px;
    margin-left: 17%;
  }

  .toggle {
    position: fixed;
   
    z-index: 10;
    background-color: #ecf0f1;
    width: 100%;
    left: 0px;
    height: 70px;
  }


  .btn-medium {
    margin-top: 15px;
    margin-left: 3px;
    border: 1px solid rgb(76, 10, 85);
    background:transparent;
    color:black;
  }
  .btn-medium:hover{
    background:purple;
  }
  .questions {
    margin-left: 20px;
    margin-top:60px;
    position: relative;
    z-index: 5;
  }
  .section-right-buttons{
    margin-bottom:50px;
  }

  .section-right-buttons button {
    width: 80%;
    margin-top: 8px;
    margin-left: 3vw;
  }

  .section-keys {
    margin-left: 2vw;
  }

  .section-keys a {
    margin-top: 10px;
    margin-left: 15px;
  }

  .section-keys p {
    display: inline;

  }

  .move {
    margin-left: 20px;
  }
  /* code for js */
  .category_display{
    position:relative;
    left:20px;
    top:0;  
    font-size:1.2em;
   
  }
  .category_display p{
    font-weight:bold;
  }
  .question_button{
    border:1px solid grey;
    border-radius:50%;
    height:40px;
    width:40px;
    left:20px;
    position:relative;
  
  }
  #main_question_text{
    font-size:1.4em;
    font-weight:bold;
    font-family: 'Josefin Sans', sans-serif;

  }
  .ques_no{
    font-family: 'Josefin Sans', sans-serif;
  

  }
  .ideButton{
    background:#6a1b9a;
  }
  </style>

<body>
  <div class="navbar-fixed">
    <nav class="head">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo bdc deep-purple-text">BDCoE </a>
        <ul id="nav-mobile" class="right black-text">
          <li>
            <div id='timer'>
            <h5 id="time_head">time left:</h5>
            <!-- enter the timer code  -->
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="Container">
    <div class="row">
      <div class="col s12 m8 left-part">
        <div class="question-display">
          <div class="toggle hide-on-med-and-down">
            <div class="move">
              <button class="btn btn-medium" id='c_questions' onclick='colorChange1();fetch_question_start(1,1);change_color(this.id); color_the_current_button(1,1)'>C </button>
              <button class="btn btn-medium" id='web_questions' onclick='colorChange2();fetch_question_start(2,1);change_color(this.id);color_the_current_button(2,1)'>web </button>
              <button class="btn btn-medium" id='machine_learning' onclick='colorChange3();fetch_question_start(3,1);change_color(this.id);color_the_current_button(3,1);'>Machine Learning</button>
              <button class="btn btn-medium" id='bigdata' onclick='colorChange4();fetch_question_start(4,1);change_color(this.id);color_the_current_button(4,1)'>Bigdata </button>
              <button class="btn btn-medium" id='aptitude' onclick='colorChange5();fetch_question_start(5,1);change_color(this.id);color_the_current_button(5,1)'>Aptitude </button>
              <button class="btn btn-medium" id='algoritm' onclick='colorChange6();fetch_question_start(6,1);change_color(this.id);color_the_current_button(6,1)'>Algorithms</button>
            </div>
          </div>
          <section class="section questions" >
            <div id= 'question_area'>
              <h5 id='ques_no'>Question No. :</h5>
              <hr>
              <p id='main_question_text'></p>
            
              <!-- enter the code for questions here -->
              <p id='sub_question_text'></p>
            </div>
            <div id='option_display'>
            </div>
         


        </div>
        <div id="left-buttons">
          <div class="but">
            <button class="btn green darken-2 white-text waves-effect waves-light" onclick='save_and_next(0)'>Save & Next</button>
            <button class="btn deep-purple accent-3 white-text waves-effect waves-light" onclick='save_and_next(1)'>Mark for Review</button>
            <button class="btn red darken-1 white-text waves-effect waves-light" onclick='clear_selection()'>clear</button>
          </div>
        </div>
      </div>
    </section>
      <div class="col s12 m4 right-part">
        <section class="section section-grid-display">
          <div class="grid">
            <h5>Question View:</h5>
            <hr>
          </div>
        
          <!-- enter the code for grid here -->
        </section>
        <section class="section section-keys">
          <a class="btn-floating  waves-effect waves-light green darken-2"></a>
          <p>Question Attempted</p>

          <a class="btn-floating waves-effect waves-light white"> </a>
          <p>Not Attempted</p>
          <br>
          <a class="btn-floating waves-effect waves-light deep purple"> </a>
          <p>
            Marked for Review
          </p>&nbsp;&nbsp;

          <a class="btn-floating waves-effect waves-light red accent-3"> </a>
          <p>Seen</p>

        </section>
        <section class="section section-right-buttons">
          <button href="#instruction-modal" class="btn deep-purple white-text waves-effect waves-light modal-trigger">Instructions</button>
          <div id="instruction-modal" class="modal">
      <div class="modal-content">
        <h4>Instructions</h4>
        <hr>
       <p>Total duration of this test is <b>60 minutes</p>
       <p>There will be <b>40 Single Option Correct MCQ questions.</p>
       <p>There is <b>4 section</b> in the question paper consisting of <b>10 questions in each section</b>.</p>
       <p>There are <b>2 alogorithm questions</b> at the end of the paper</p>
       <p>Each question is allotted <b>4 (Four)</b> marks for correct response.</p>
       <p>Candidates will be awarded marks as stated above in instruction <b>No.5 </b>forcorrect response of each question. <b>1 (one) mark will be deducted</b> for indicating incorrect response for each question.</p>
       <p><b>No deduction</b> from the total score will be made if no response is indicated.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div>


      
          <br>
          <button class="btn deep-purple white-text waves-effect waves-light"  onClick="finish()">finish </button>
        </section>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="button.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Custom JS & jQuery here
      $('.modal').modal();
      
    });


    //locks the response
    function set_response_lock()
    {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             //console.log(this.responseText);
          }                     
       };
      xmlhttp.open("POST", "set_lock.php", true);
      xmlhttp.send();
    }   
    //finish function
    function finish()
    {
      var r=confirm("Do You Really want to Finish Test! Press ok to Continue ");
      if (r==true)
      {
        set_response_lock();        
        window.location.href="finish.php";
      }
    }
    
    // question number setter
    function set_question_number(number)
    {
        var ques_no= document.getElementById('ques_no');
        ques_no.innerHTML=('Question No. '+number+':');

    }

    //setting the question text
    function set_question_text(Question)
    {
      var ques_area= document.getElementById('question_area');
      document.getElementById('main_question_text').innerHTML=Question[0];
      
      if(Question[1]!='')
      {
        sub_question_text=document.getElementById('sub_question_text');
        if(sub_question_text!=null)
        {
          sub_question_text.innerHTML=Question[1];
        }
        else
        {
          var sub_question_text=document.createElement('p');
          text=document.createTextNode(Question[1]);
          sub_question_text.appendChild(text);
          sub_question_text.id='sub_question_text';
          ques_area.appendChild(sub_question_text);
        }
      }
      else
      {
        try 
        {
          
          ques_area.removeChild(document.getElementById('sub_question_text'));
        }
        catch(e)
        {
          //
        }

      }
    }

    //fetching the first question of each caetegory
    function fetch_question_start(category,number)
    {
        send_question_request(category,number);
        
        //setting the question number
       
    }

    //setting the option
    function set_options(option)
    {
      //clearing this area
      var dis=document.getElementById('option_display');
      if(dis.childElementCount>0)
      {
        while (dis.firstChild) 
        {
          dis.removeChild(dis.firstChild);
        }
      }

      //creating options
      for(var i=0;i<option.length;i++)
      {
        var option_div=document.createElement('div'); //creating <div> for every option
       
        option_div.className='option_divsion';    //setting the class name
        var opt_i=document.createElement("input");
        //creating input 
        var label=document.createElement('label');
        label.style.fontSize='1.3em';
        label.style.color='#36382E';
        label.style.marginTop='10px';
        var text=document.createTextNode((i+1)+'. '+option[i]); //creating text node for option text
        //var brk=document.createElement('br');
        label.appendChild(text);
        opt_i.type='radio';
        opt_i.value=i+1;
        opt_i.id='option_'+(i+1);
        opt_i.className='opt_i with-gap';
        opt_i.name='same';  //same name for only selection at a time
        label.setAttribute('for','option_'+(i+1));
        option_div.appendChild(opt_i);
        option_div.appendChild(label);
        //option_div.appendChild(brk);
        dis.appendChild(option_div);
      }  
    }
    
    //set text area
    function set_text_area()
    {
      //clearing this area
      var dis=document.getElementById('option_display');
      if(dis.childElementCount>0)
      {
        while (dis.firstChild) 
        {
          dis.removeChild(dis.firstChild);
        }
      }

      //creating the text area
      var text_div=document.createElement('div'); //creating <div> for every option
      text_div.className='text_input_divsion'; //setting the class name
      text_div.style.marginBottom='60px';   
      var text_box=document.createElement('textarea');
      text_box.style.width='100%';
      text_box.style.height='200px'; //this is again a problem area
      text_box.id='text_box';
      text_box.maxlength='5000';
      text_box.placeholder='Write the code or algorithm here. Code should be in either C, C++, Java or Python.';
      text_box.onchange=function(){store_alogrithmic_response()};
      //creating ide button
      var ide=document.createElement('button');
      ide.className='ideButton';
      ide.id="ide";
      ide.onclick=function(){open_code_chef_ide();};
      var inside_ide=document.createTextNode("Open IDE");
      ide.appendChild(inside_ide);
      
      //appending 
      text_div.appendChild(text_box);
      text_div.appendChild(ide);
      dis.appendChild(text_div);
    }
    //sending question_request
    function send_question_request(category,number)
    {
      current_question_cat=category;
      current_question_num=number;
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            output=this.responseText.split("#$%%$#"); //splitting the output stream
            question_id=output[0];
            Question=output.slice(1,3); // getting the question
            option=output.slice(3);   //getting the option
           
            set_question_number(number);
            set_question_text(Question);
            if(current_question_cat!=6)
            {
              set_options(option); //to set option for mcq
            }
            else
            {
              set_text_area(); //to set set text box algoritmic question
            }
            
            response_of_current_question(); // helps to check the button if the question is already attempted
                      
          }
       };
      xmlhttp.open("POST", "question_fetch.php?ques_category="+category+"&ques_number="+number, true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
    }

    //create grid function
    function create_grid()
    {
      var grid_main_div=document.getElementsByClassName('grid')[0];

      category_name=['C Language','Web Technology','Machine Learing','Bigdata','Aptitude','Algorithm'];
      for(var i=0;i<6;i++)
      {
        var cat_i_div=document.createElement('div');
        cat_i_div.className="category_display";
        // for the heading
        var para=document.createElement('p');
        var text=document.createTextNode(category_name[i]);
        para.appendChild(text);
        para.className='category_para';
        cat_i_div.appendChild(para);
        //for the numbers
        var category_sub_div=document.createElement('div');
        category_sub_div.className='sub_div_number';
        //temporary jugaad
        category_sub_div.style.width='100%';  //temporary jugaad
        cat_i_div.appendChild(category_sub_div);

        display_the_grid(i);  //to the total number of question in a category
               

        grid_main_div.appendChild(cat_i_div);
      }
      
    }
     //getting the number of question
    function display_the_grid(i)
    {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             var n=parseInt(this.responseText);
             display_grid_button(n,i);
          }                     
       };
      xmlhttp.open("POST", "get_number.php?ques_category="+(i+1), true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
    }
    
    //function to display grid button
    function display_grid_button(n,i)
    {
        var category_sub_div=document.getElementsByClassName('sub_div_number')[i];
        for(var j=0;j<n;j++)
        {
          var inner_div=document.createElement('div');
          inner_div.className='grid_button';
          inner_div.id='grid_button_'+(j+1);
          inner_div.style.width='12%';
          inner_div.style.display='inline-block'; //
          var button=document.createElement('button');
          button.className='question_button';
          button.id="button_"+(i+1)+"_"+(j+1);
          button.type='button';
          button.value=[i+1,j+1];
          //color of the button
          if(i+1==1 && j+1==1)		//for the first button
          {
          	button.style.backgroundColor='red';
          }
          else
          {
         	 button.style.backgroundColor='white'; 	//for the rest button
          }	

          button.onclick=function(){fetch_question_by_grid_button(this.value);color_the_current_button(this.value.split(',')[0],this.value.split(',')[1])};
          var text=document.createTextNode((j+1));
          button.appendChild(text)
          inner_div.appendChild(button);
          category_sub_div.appendChild(inner_div);
        }
    }

    //fetching question using grid button
    function fetch_question_by_grid_button(arr)
    {
      arr=arr.split(',');
      var category=parseInt(arr[0]);
      var number=parseInt(arr[1]);

      fetch_question_start(category,number);
    }
    
    //displaying the first element
    function display_initial()
    {
      fetch_question_start(1,1);
    }

    //changing the color
    function change_color(id)
    {
      var upper_panel=document.getElementById(id);
      upper_panel.style.backgroundColor ='#673ab7 !important';
    }

    //clear selection
    function clear_selection()
    {
      try
      {
        if(current_question_cat!=6)			//for option based question
        {
        	var opt_i=document.getElementsByClassName('opt_i');
        	for(var i=0; i<opt_i.length;i++)
        	{
          		opt_i[i].checked=false;
        	}
        }

        else if(current_question_cat==6)	//for algorithm based question
        {
        	var textbox=document.getElementById('text_box');
        	textbox.value="";
        }
      }
      catch(e)
      {
        //nothing
      }
    }

    //storing the response
    function store_mcq_response(mark)
    {
      var selected=0
      var all_option=document.getElementsByClassName('opt_i');
      for(var i=0;i<all_option.length;i++)
      {
        if(all_option[i].checked==true)
        {
          selected=i+1;
          break
        }

      }

      //this changes the color of the grid button
      if(mark)
      {
      	color_the_button(current_question_cat,current_question_num,2); //question is marked
      }
      else if(selected)
      {
      	color_the_button(current_question_cat,current_question_num,1); //non empty response
      }
      else
      {
      	color_the_button(current_question_cat,current_question_num,3);	//empty response
      }	
      //sending the response to the server
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText=='time_up')    //if time is up
            {
              alert('time is up, response not store. Click to finish Test');
              location.href='finish.php';
            }
            else
            {
              //console.log("respone is stored");
            }
          }
       };
      xmlhttp.open("POST", "store_response.php?question_id="+question_id+"&response="+selected, true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();

    }

    //store algorithmic response
    function store_alogrithmic_response(mark)
    {
      var input_text=document.getElementById('text_box');
      var xmlhttp = new XMLHttpRequest();
      //console.log(encodeURI(input_text.value));
      text_value=encodeURI(input_text.value); //its very important
      
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            if(this.responseText=='time_up')    //if time is up
            {
              alert('time is up, response not store. Click to finish Test');
              location.href='finish.php';
            }
            else
            {
              //console.log("respone is stored");
            }
          }
      };
      xmlhttp.open("POST", "store_response.php?question_id="+question_id+"&response="+text_value, true);
      xmlhttp.send();

      //change color of the button
      if(mark)
      {
      	color_the_button(current_question_cat,current_question_num,2); //question is marked
      }
      else if(input_text.value!='')
      {
      	color_the_button(current_question_cat,current_question_num,1); //non-empty response
      }
      else
      {
      	color_the_button(current_question_cat,current_question_num,3);	//empty response
      }

    }

    //change next question
    function change_next()
    {
              var question_buttons=document.getElementsByClassName('question_button'); //getting the question button
              last=question_buttons[question_buttons.length-1].value.split(','); // storing the last question's category and number
              
              for(var i=0; i<question_buttons.length;i++)
              {
                var value=question_buttons[i].value.split(',');
                if(value[0]==current_question_cat && value[1]==current_question_num)
                {
                  if(!(value[0]==last[0] && value[1]==last[1]))
                  {
                    next=question_buttons[i+1].value.split(',');
                    send_question_request(next[0],next[1]);
                    color_the_current_button(next[0],next[1]); //to change the color of next questin to status 4
                    break;
                  }
                  else
                  {
                    alert('no more questions...');
                  }                
                }
                else
                {
                  continue;
                }
              }
           
    }

    //save and next function
    function save_and_next(mark)
    {
      //storing the response
      if(current_question_cat!=6)
      {
        store_mcq_response(mark);
      }
      else
      {
        store_alogrithmic_response(mark);
      }
      //changing to next question
      change_next();

    }

    //it checks the option if the question is already attempted
    function response_of_current_question()
    {
      //console.log(question_id);
      var response=0;
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            try
            {
              if(current_question_cat!=6)
              {
                response=parseInt(this.responseText);

                //getting the options
                if(response!=0)
                {
                  var option='option_'+response;
                  document.getElementById(option).checked=true;
                }
              }
              else if(current_question_cat==6)
              {
                //console.log(this.responseText);
                response=this.responseText;
                var text_box=document.getElementById('text_box');
                text_box.value=decodeURI(response);
              }

            }
            catch(e)
            {
              console.log('could not fetch response');
            }
          }
      };
      xmlhttp.open("POST", "get_current_response.php?question_id="+question_id, true);
      //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
    }

    //open codechef ide in new tab
    function open_code_chef_ide()
    {
      window.open('https://www.codechef.com/ide', '_blank');
    }


   	//changes the color of button
   	function color_the_button(category,number,status)
   	{
   		var ques_button=document.getElementById('button_'+(category)+'_'+(number));
   		if(status==1)
   		{
   			ques_button.style.backgroundColor='rgb(56, 142, 60)'; //attempted
   		}

   		else if(status==2)
   		{
   			ques_button.style.backgroundColor='rgb(156, 39, 176)';	//marked
   		}

   		else if(status==3)
   		{
   			ques_button.style.backgroundColor='rgb(255, 23, 68)';	//seen
   		}

   		else if(status==4)
   		{
   			ques_button.style.backgroundColor='red';	//current
   		}
   		else
   		{
   			ques_button.style.backgroundColor='rgb(255, 255, 255)';		//unattempted
   		}
   	}

   	//for handling the current question
   	function color_the_current_button(cat,num)
   	{
   		
   		//restores the color of the button previously clicked
   		var ques_button=document.getElementsByClassName('question_button');
   		for(var i=0;i<ques_button.length;i++)
   		{
   			if(ques_button[i].style.backgroundColor=='red' && ques_button[i].id!='button_'+cat+'_'+num)
   			{
   				ques_button[i].style.backgroundColor=color_buffer;
   			}
   		}

   		color_buffer=document.getElementById("button_"+cat+"_"+num).style.backgroundColor; //updating the color_buffer
      	color_the_button(cat,num,4);  // question color change to status 4 (current button)

    }

    //display the count down timer
    function startTimer(duration, display) {
    var timer = duration;
    var hours;
    var minutes; 
    var seconds;

    stop_id=setInterval(function () {
        hours = parseInt(timer/3600, 10);
        minutes = parseInt(timer/60, 10);
        seconds = parseInt(timer%60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.innerHTML ="time left "+ hours + ":"+minutes + ":" + seconds;

        if(timer<5)
        {
          display.style.color='red';
        }
        if (--timer < 0) {
            clearInterval(stop_id); //stop the timer
            alert("time up, test is finished...")
            location.href='finish.php';   //direct to the next page
        }
      }, 1000);
    }

    //function to display time
    function time_display()
    {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            var time_left=parseInt(this.responseText,10); //time left in seconds
            //console.log(time_left);
            var time_head=document.getElementById('time_head');
            startTimer(time_left, time_head);
          }
      };
      xmlhttp.open("POST", "get_remaining_time.php", true);
      xmlhttp.send();
    }

   	//frequently used variable 
    time_display();
    var current_question_cat=0; var current_num=0; var question_id=0;   //these are used frequently
   	var color_buffer='white'; //stores the color of previously clicked button
    //runs on startup
    create_grid(); //calling the create grid function
    display_initial(); ///for initial display
    
  </script>
</body>

</html>
