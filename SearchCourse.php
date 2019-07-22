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
        <h1 id="st_h1">Search Course</h1>
        <!--
        <!-- `id`, `c_name`, `c_teacher`, `st_num`, `content`, `stage`, `c_desc` -->
     
        <form id="st_ser" action="C_SearchCourse.php" method="GET">
            
            <div > 
                <p>Course ID</p>  <input required="required"type="Text" name="id" placeholder="Enter Course ID here"><br/>  
                  <table class="table table-hover table-bordered sectionTable">
                                  <tr class="danger">
                                        <th>ID</th>
                                       <th>Name</th
                                       <th> </th>
                                      <th>Teacher </th>
                                      <th>Student Number</th>
                                      <th>Content</th>
                                      <th>Stage</th>
                                      <th>Description</th>
                                      <th> </th>
                                    </tr>
                                    <tr>
                                      <td> <?php echo"{$DataCourse['id']}";?></td>
                                      <td><?php echo"{$DataCourse['c_name']}"; ?></td>
                                         
                                        <td><?php echo"{$DataCourse['c_teacher']}"; ?></td>
                                        <td><?php echo"{$DataCourse['st_num']}"; ?></td>
                                        <td><?php echo"{$DataCourse['content']}"; ?></td>
                                        <td><?php echo"{$DataCourse['stage']}"; ?></td>
                                        <td><?php echo"{$DataCourse['c_desc']}"; ?></td>
                                        <td> </td>
                                    </tr>

                    </table>       
             <button id="st_btn" type="submit" name="actionCrs" value="SearchCrs" class="btn btn-secondary">Search</button>
          
             <button id="st_btn" type="reset" class="btn btn-secondary">Reset</button>
               
            </div>
            </form>
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