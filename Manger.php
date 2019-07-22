<?php
session_start();
if(!isset($_SESSION['username']))
{
    include 'LoginManger.php';
     header('Location:../Manger.php');
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
    <link href="res/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="res/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="res/css/style.css" rel="stylesheet" type="text/css" />
     
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
            <a href="https://www.facebook.com/"><img src="res/img/fb.png" width="31" height="31" /> </a>
            <a href="https://www.twitter.com/"	><img src="res/img/tw.png" width="31" height="31" /></a>
            <a href="https://www.youtube.com/"><img src="res/img/yt.png" width="31" height="31" /></a>
            <a href="https://www.skype.com/" ><img src="res/img/sk.png" width="35" height="35" /></a>
            </div>
        </div>
    </div>
         <br><br><br>
     <div id="logout_man">
              <h2>Welcome 
                <?php if(isset($_SESSION['username']))
                {
                     echo $_SESSION['username']." <a href=Home.php>Logout</a>";
                }

                ?>
        </div>
         <br>
    <div id="contents">
        
        
        <div id = "main_man"><br/><br><br>
         <center>
             <a href= "InsertTeacher.php"><button  id="insr_btn" type="button" class="btn btn-danger">Register Teacher</button></a><br><br><br>
         <a href= "DeleteTeacher.php"><button id="del_btn" type="button" class="btn btn-danger">Delete Teacher</button>
         </a><br><br>
         <a href= "SearchTeacher.php"> <button id="ser_btn" type="button" class="btn btn-danger">Search Teacher</button></a>
         <a href= "EditTeacher.php"> <button id="edi_btn" type="button" class="btn btn-danger">Edit Teacher</button></a>
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