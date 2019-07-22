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
            <a href="https://www.facebook.com/"><img src="res/img/fb.png" width="31" height="31" /> </a>
            <a href="https://www.twitter.com/"	><img src="res/img/tw.png" width="31" height="31" /></a>
            <a href="https://www.youtube.com/"><img src="res/img/yt.png" width="31" height="31" /></a>
            <a href="https://www.skype.com/" ><img src="res/img/sk.png" width="35" height="35" /></a>
            </div>
        </div>
    </div>
      
    <div id="contents">
        <h1 id="ser_h1">Search Teacher</h1>
        <form id="ser_frm" method="GET" action="C_SearchTeacher.php">
                <div > 
               
                    <p>Teacher ID </p> 
                    <input type="Text" placeholder="Enter Your ID here" name="id" > 
              
                    <table class="table table-hover table-bordered sectionTable">
                                  <tr class="danger">
                                        <th>ID</th>
                                       <th>Name</th>
                                      <th>Phone</th>
                                      <th>E-mail</th>
                                      <th>Gender</th>
                                      <th>Address</th>
                                      <th>Description</th>
                                      <th>Jop Title</th>
                                       

                                    </tr>
                                    <tr>
                                      <td> <?php echo"{$DataDisplay['id']}";?></td>
                                      <td><?php echo"{$DataDisplay['name']}"; ?></td>
                                         <td> <?php echo"{$DataDisplay['phone']}"; ?></td>
                                        <td><?php echo"{$DataDisplay['email']}"; ?></td>
                                        <td><?php echo"{$DataDisplay['gender']}"; ?></td>
                                        <td><?php echo"{$DataDisplay['address']}"; ?></td>
                                        <td><?php echo"{$DataDisplay['description']}"; ?></td>
                                        <td><?php echo"{$DataDisplay['jop_title']}"; ?></td>
                                        
                                    </tr>

                    </table>       
                    
                        <button id="btn_ser" type="submit"  name="SearchT" value="Search" class="btn btn-secondary">Search</button>     
                      <button id="btn_ser" type="reset" class="btn btn-secondary">Reset</button>

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
