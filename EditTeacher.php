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
       <center>
        <h1 id="ubd_h1" >Edit Teacher</h1>
        </center>
        <div id ="man_upd">
            <form id="ins_man1" method="GET " action="C_EditTeacher.php">
             
                
                <input  name="id" type="text" required="required" class="input-lg"  placeholder="Enter ID of The Teacher">
                <button id="srup_btn" type="submit"  name="editT" value="edit" ><img  src="res/img/+26.png" ></button>
                <hr>
            </form>
                     <form id="ins_man" method="POST" action="C_EditTeacher.php">
                         <input type="hidden" name="itemID" value="<?php echo $updDisplay['id'] ; ?>" >
                         <p>  Name </p><input name="name" required="required" class="input-lg" type="text" placeholder="Enter Your Name" value="<?php echo$updDisplay['name'];?>"> <br>
                <p>  Phone </p>
                <input name="phone" required="required" class="input-lg" type="text" placeholder="Enter Phone Number" value="<?php echo$updDisplay['phone'];?>"><br/>
                <p>  E-mail </p><input name="email" required="required" class="input-lg" type="text" placeholder="Enter E-mail" value="<?php echo$updDisplay['email'];?>"><br/>
                 <p>  Gendar </p>
                <select name="gender" style="width:300px" value="<?php echo$updDisplay['gender'];?>">
                   <?php 
                   if($updDisplay['gender'] == 'male')
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
                <p>  Adress </p><input  name="address"required="required" class="input-lg" type="text"  placeholder="city/street" value="<?php echo$updDisplay['address'];?>"><br/>
                 <p>  Description </p>
                <textarea name="description" rows="3" style="width:400px"><?php echo$updDisplay['description'];?> </textarea>
                <p>  Jop Title </p><input  name="jop_title"required="required" class="input-lg" type="text"laceholder="Enter The Jop Title" value="<?php echo$updDisplay['jop_title'];?>"><br/><br>
                 <div class="form-group">
                     <button id="upd_btn"type="submit"name="editT" value="Update" class="btn btn-secondary">Update</button>
                     <button id="upd_btn" type="reset" class="btn btn-secondary">Reset</button>
                  </div><br>      
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