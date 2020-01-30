<?php
  
session_start();    
?>
<html lang="en">

	<head>
		<title>CSS Template</title>
       <link rel="stylesheet" type="text/css" href="css/nave.css">
	</head>
	<body style="background-image:url(css/picture/img_3.jpg)">
         
		<div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		  <a href="admin_login.php">Admin Login</a>
		  <a href="contact.php">Contact us</a>
		  <a href="service.php">Service </a>
		   <div class = "searh">
		   <form action="" method="post">
							  <input type="text" placeholder="Search.." name="search">
							  <button type="submit" name="submit" value="submit">Submit</button>
			</form>
		  
		  </div>
		  <div class = "login"> <a href="login.php">Login</a></div>
		   
		  <div class  = "signup"> <a href="registration.php">Sign up </a></div>
		   
		</div>
        
		      <?php
			    
				  include "conn.php";
				  
				   if(isset($_POST['submit'])){
					   
					   
					  if(isset($_POST['search'])){
						  
						$search_value = "";  
						  
					 $search_value=$_POST["search"];
					  
					  if($search_value!=""){
						  
						  $_SESSION['search'] = $search_value;
						   header ("Location: search_bus_box.php");
						   
						  } 
					  }								
				   }
				  
					?>
		
      
	</body>
	
</html>

<style>
  
    
	  .searh{
	  
	  float: right;
  }  
   .signup
   {
	   
	 float: right;    
   }
   .login{
	 float: right;  
   } 
   
  .topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
   
</style>