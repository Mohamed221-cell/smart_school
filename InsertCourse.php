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
       
    <div id="contents">
   
        <div id="insr_cours">
            <form action="Controller/C_InsertCourse.php" method="POST">
                <!-- `id`, `c_name`, `c_teacher`, `st_num`, `content`, `stage`, `c_desc` -->
             <h1>Insert Course</h1><br>
             <p> Course Id </p><input name="id" required="required" class="input-lg" type="text" placeholder="Enter Course ID"> 
             <p> Course Name </p><input name="c_name" required="required" class="input-lg" type="text" placeholder="Enter Course Name"> 
              <p> Teacher Name </p><input name="c_teacher" required="required" class="input-lg" type="text" placeholder="Enter Teacher Name"> 
                 <p>  Student Number </p>
                <select name="st_num" style="width:300px">
                    <option selected>Between...</option>
                    <option value="10:20">10 : 20</option>
                    <option value="20:30">20 : 30</option>
                    <option value="30:40">30 : 40</option>
                </select>
              <p> Content </p><input name="content" required="required" class="input-lg" type="text" placeholder="Enter  Your Name"> 
                <p>  Stage </p>
                <select name="stage"style="width:300px">
                    <option selected>Avaliable for...</option>
                    <option value="PriameryStage">Priamery Stage</option>
                    <option value="JuniorhighStage">Junior high Stage</option>
                    <option value="HighSeconderyStage"> High Secondery Stage</option>
                </select>
                <p>  Description </p>
                <textarea name="c_desc" rows="3" style="width:400px"> </textarea>
                <br>
                <button id="course_btn" type ="submit" name="action" value="InsertCr" >Done</button>
                <button id="course_btn" type ="reset" >Reset</button>

            </form>
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