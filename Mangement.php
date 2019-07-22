<?php
session_start();
if(!isset($_SESSION['username']))
{
    include 'LoginMangement.php';
     header('Location:../Mangement.php');
    die();
}
?>
<!Doctype html>
<html>
 <head>
    <title> Smart School  </title> 
    <meta http-equiv="This is a Wepsite About Smart School Online" content="text/html; charset=utf-8" />
    
    <link href="res/css/reset-min.css" rel="stylesheet" type="text/css" />
    <link href="res/css/fonts-min.css" rel="stylesheet" type="text/css" />
    <link href="res/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="res/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="res/css/style.css" rel="stylesheet" type="text/css" />
     
    <script src="res/js/bootstrap.js"></script>
    <script src="res/js/bootstrap-min.js"></script>
    <script src="res/js/script.js"></script>
 </head>
 <body>
     <div id="wrapper">
	
    <div id="header">
    	
        <div id="logo"><img src="res/img/log.png" width="285" height="118" /></div>
        
        <div id="menu">
         	   		 		 	      		
            <ul>
                <li><a href="Home.php" target="" >Home</a></li>
                <li><a href="LoginManger.php">Manager</a></li>
                <li><a href="LoginMangement.php">Mangement</a></li>
                <li><a href="SearchTeacher.php">Teacher</a></li>
                <li><a href="SectionStudent.php">Student</a></li>
                <li><a href="SearchCourse.php">Course</a></li>
                <li><a href="about_school.html">About School</a></li>
            	<li><a href=""></a></li>
            </ul>
        	
            
            
       	  <div id="slinks">
           	<h1>Follow us:</h1>
            <a href="https://www.facebook.com/"	><img src="res/img/fb.png" width="31" height="31" /> </a>
            <a href="https://www.twitter.com/"	><img src="res/img/tw.png" width="31" height="31" /></a>
            <a href="https://www.youtube.com/"	><img src="res/img/yt.png" width="31" height="31" /></a>
            <a href="https://www.skype.com/" ><img src="res/img/sk.png" width="35" height="35" /></a>
            </div>
        </div>
    </div>
         <br><br><br>
       <div id="logout_man">
              <h3>Welcome 
                <?php if(isset($_SESSION['username']))
                {
                     echo $_SESSION['username']." <a href=Home.php>Logout</a>";
                }

                ?>
              </h3>
        </div>
    <div id="contents">
    
         <div id = "mang_man">
             <center>
                 <br>
                 <a href= "InsertCourse.php"><button  id="insr_btn1" type="button" class="btn btn-danger">Insert Course </button></a>

                 <a href= "DeleteStudent.php"><button id="del_btn1" type="button" class="btn btn-danger">Delete Student</button>
             </a>
                 <a href= "SearchStudent.php"> <button id="ser_btn1" type="button" class="btn btn-danger">Search Student</button></a>
                 <a href= "EditStudent.php"> <button id="edi_btn1" type="button" class="btn btn-danger">Edit Student</button></a>
                 <a href= "Request.php"> <button id="edi_btn1" type="button" class="btn btn-danger">Request</button></a><br>
             </center>
         </div>
      </div>
        <div id="footer">
    	    <div id ="news" >
                <ul>
                    <marquee>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    </marquee>
                
                </ul>
                
            </div>
   	    	
        </div>
    </div>
</div>
    
 </body>  
</html>