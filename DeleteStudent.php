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
            <a href="https://www.facebook.com/"	><img src="res/img/fb.png" width="31" height="31" /> </a>
            <a href="https://www.twitter.com/"	><img src="res/img/tw.png" width="31" height="31" /></a>
            <a href="https://www.youtube.com/"	><img src="res/img/yt.png" width="31" height="31" /></a>
            <a href="https://www.skype.com/" ><img src="res/img/sk.png" width="35" height="35" /></a>
            </div>
        </div>
    </div>
       
    <div id="contents">
    	
           <center> <h1 id="del_st_h1">Delete Student</h1></center>
           <br>
           <form action="Controller/C_DeleteStudent.php" method="GET">

               <div id="st_del"> 
                   <p>Student ID<br/> </p> <input type="Text" name="id" placeholder="Enter Your ID here"> <br/><br/>
              <br/><br/>
              <button id="btn_del" type="submit"value="Delete" name="DeleteSt" >Delete</button>
              <button id="btn_del" type="reset" >Reset</button>
               </div>
                </form>
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