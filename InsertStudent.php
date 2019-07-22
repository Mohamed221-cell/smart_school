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
       
        <h1 id="st_h1">Insert Student</h1><br>
           <!-- 
               //`id`, `name`, `phone`, `email`, `gender`, `address`, `skills`

           -->
            <div id = "st_ins">
                <form action="Controller/C_InsertStudent.php" method="POST">
                <div id="student_ins">
                                     
                 <p> Student ID   </p><input  name="id" required="required" class="input-lg" type="text"  placeholder="Enter ID Of Teacher"><br/>
                <p> Name </p><input  name="name" required="required" class="input-lg" type="text" placeholder="Enter Your Name"> 
                <p>  Phone </p><input name="phone" required="required" class="input-lg" type="text" placeholder="Enter Phone Number"><br/>
                 <p>  E-mail </p><input name="email"  required="required" class="input-lg" type="text"placeholder="Enter E-mail"><br/>
                 <p>  Gendar </p>
                 <select name="gender"  style="width:300px">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="fmale">Female</option>
                 </select>
                 <p>  Adress </p><input name="address"  required="required" class="input-lg" type="text"  placeholder="city/street"><br/>
                 <p>  Skils </p>
                 <textarea name="skills"  rows="3" style="width:400px"> </textarea>
                 <br>
                 <button id="student_btn" type="submit" name="action" value="InsertSt">Ok</button>
                 <button id="student_btn" type="reset">Reset</button>
               
             </form>
            </div> 
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