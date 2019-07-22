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
        <h1 id="st_h1">Student Request</h1>
        <!--
        //`st_img`, `fname`, `lname`, `st_id`, `st_phone`, `st_email`, `st_gender`, `st_adress`, `st_skills`
        -->
       
            
            <div id="st_req" > 
                <form action="C_Request.php" >
                  <table class="table table-hover table-bordered sectionTable">
                                  <tr class="danger">
                                        <th>ID</th>
                                       <th>Name</th
                                       <th> </th>
                                      <th>Phone</th>
                                      <th>E-mail</th>
                                      <th>Gender</th>
                                      <th>Address</th>
                                      <th>Skills</th>
                                      <th> Request</th>
                                    </tr>
                                    <!-- `id`, `name`, `phone`, `email`, `gender`, `address`, `skills` -->
                                      <?php
                                for ($i = 0; $i < count($SetDataDisplay); $i++) {
                                   echo "            
                                    <tr>
                                      <td>{$SetDataDisplay[$i]['id']}</td>
                                      <td>{$SetDataDisplay[$i]['name']}</td>
                                        <td>{$SetDataDisplay[$i]['phone']}</td>
                                        <td>{$SetDataDisplay[$i]['email']}</td>
                                        <td>{$SetDataDisplay[$i]['gender']}</td>
                                        <td>{$SetDataDisplay[$i]['address']}</td>
                                        <td>{$SetDataDisplay[$i]['skills']}</td>
                                        <td>
                                         <form action='C_Request.php' method='GET'>
                                             <input  type= 'hidden'  name='id' value=''>
                                          <button id='req_btn' type='submit' name='acStudent' value='AcStudent' class='btn btn-secondary'>
                                                    <img src='res/img/check.png'  alt='accept student'>
                                         </button>
                                         </form>
                                          <form action='C_Request.php' method='GET'>
                                           <input  type= 'hidden'  name='id' value='{$SetDataDisplay[$i]['id']}'>
                                        <button id='req_btn' type='submit' name='acStudent' value='ReStudent' class='btn btn-secondary'>
                                                 <img src='res/img/+25.png'  alt='refuse student'>
                                           </button>
                                           </form>
                                        </td>
                                    </tr>
                                ";
                                        
                                        }
                                        ?>
                    </table>       
                    <input type="submit" id="st_btn"   value="Show">
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
 
