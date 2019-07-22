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
       
            <center><h1 id="ed_h1">Edit Student</h1></center>
            <br>
           
            <!-- //`st_img`, `fname`, `lname`, `st_id`, `st_phone`, `st_email`, `st_gender`, `st_adress`, `st_skills` -->
            <div id="edit_st">
            <form  action="C_EditStudent.php" method="GET">
                
                    <input  name="id" type="text" required="required" class="input-lg"  placeholder="Enter ID of The Student" >
                    <button id="srup_btn"type="submit"  name="editST" value="editS" ><img  src="res/img/+26.png" ></button><hr>
                    </form>
                <form  action="C_EditStudent.php" method="POST">
                     <input type="hidden" name="ID" value="<?php echo $updDisplay['id'] ; ?>" >
                    <p> Name </p>
                    <input name="fname" required="required" class="input-lg" type="text" placeholder="Enter Your Name" value="<?php echo $updStudent['fname'];?>"> <br>
                    <p>  Phone </p><input name="st_phone" required="required" class="input-lg" type="text" placeholder="Enter Phone Number"value="<?php echo $updStudent['st_phone'];?>"><br/>
                    <p>  E-mail </p><input  name="st_email"required="required" class="input-lg" type="text"placeholder="Enter E-mail"value="<?php echo $updStudent['st_email'];?>"><br/>
                 <p>  Gendar </p>
                 <select name="st_gender" style="width:300px">
                     <?php 
                   if($updDisplay['st_gender'] == 'male')
                   {
                       echo '         
                           <option value="male">Male</option>
                            <option value="fmale">Female</option>
                 ';
                   } else {
                        echo '         
                           
                            <option value="male">Female</option>
                            <optionvalue="fmale">Male</option>
                 ';
                   }
                   ?>
                 </select>
                 <p>  Adress </p>
                 <input name="st_adress" required="required" class="input-lg" type="text"  placeholder="city/street"value="<?php echo $updStudent['st_adress'];?>"><br/>
                 <p>  Skils </p>
                 <textarea name="st_skills"  rows="3" style="width:400px"><?php echo $updStudent['st_skills'];?> </textarea>
                 <br>
                 <button id="edit_btn" type="submit" name="editST" value="EditS" >Ok</button>
                 <button id="edit_btn" type="reset">Reset</button>
               
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