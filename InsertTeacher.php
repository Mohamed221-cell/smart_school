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
       
    <div id="contents">
       
        <h1 id="man_h1">Insert Teacher</h1><br>
           
            <div id = "man_ins">
                
                 <form  action="Controller/C_Inserteacher.php" method="POST" >
            <div id="ins_man">
            
                <p>  ID   </p>
                <input  name="id" value="" required="required" class="input-lg" type="text"  placeholder="Enter ID Of Teacher"><br/>
                    <p>  Name </p>
                <input  name="name" value=""required="required" class="input-lg" type="text" placeholder="Enter Your Name"> <br/>
                <p>  Phone </p>
                <input  name="phone" value="" required="required" class="input-lg" type="text" placeholder="Enter Phone Number"><br/>
                <p>  E-mail </p>
                <input name="email" value="" required="required" class="input-lg" type="text"placeholder="Enter E-mail"><br/>
                 <p>  Gendar </p>
                <select name="gender" value="" style="width:300px">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <p>  Adress </p>
                <input  name="address" value="" required="required" class="input-lg" type="text"  placeholder="city/street"><br/>
                 <p>  Description </p>
                <textarea name="description" value="" rows="3" style="width:400px"> </textarea>
                <p>  Jop Title </p>
                <input  name="jop_title" value="" required="required" class="input-lg" type="text" placeholder="Enter The Jop Title"><br/>
                
                  <button id="ins_btn" type="submit" value="Insert" name="submit">Ok</button>
                 <button id="ins_btn" type="reset" >Reset</button>
                </div> 
               
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