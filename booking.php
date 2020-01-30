<?php
session_start();
?>

<html lang="en">
	<head>
		<title>CSS Template</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
		
	</head>
	<body style="background-image:url(css/picture/img_3.jpg)">

		<div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		  <div class = "login"> <a href="login.php">Login</a> </div>
		<div class = "signup"> <a href="registration.php">Sign up</a> </div>
		
		</div>
		 	        <br><br>
				 	<font color="#F5FFFA"> <center><h1><p color >BUY TICKET</p></h1></center></font>
					<form class = "form" method = "post">
					FROM:
					<select name="search" id="searchmenu_leavingform" class="selectfrom">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="BANDARBAN">BANDARBAN</option>
						<option value="2" label="BENAPOLE">BENAPOLE</option>
						<option value="3" label="DHAKA">DHAKA</option>
						<option value="4" label="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
						<option value="5" label="CHITTAGONG">CHITTAGONG</option>
						<option value="6" label="COMILLA">COMILLA</option>
						<option value="7" label="COX'S BAZAR">COX'S BAZAR</option>
					 </select><br>
					
				  	 TO:
					  <select name="searchleave" id="searchmenu_leavingform" class="selectto">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="BANDARBAN">BANDARBAN</option>
						<option value="2" label="BENAPOLE">BENAPOLE</option>
						<option value="3" label="DHAKA">DHAKA</option>
						<option value="4" label="CHAPAINAWABGANJ">CHAPAINAWABGANJ</option>
						<option value="5" label="CHITTAGONG">CHITTAGONG</option>
						<option value="6" label="COMILLA">COMILLA</option>
						<option value="7" label="COX'S BAZAR">COX'S BAZAR</option>
					 </select>
					 <br>
					DATE:
					 
					    <input type ="date" name = "date" class = "selectdate"><br><br>
					  
					    <input type = "submit" name = "Search" value = "Search" class ="button"> 
					 
					 </form>
			   
			      <?php 
						 include "conn.php";
				          
						 if(isset($_POST['Search']))
						{   
					          $start = $_POST['search'];
							  $leave = $_POST['searchleave'];
							  $date = $_POST['date'];
							  if($start && $leave && $date)
							  {     
						         
								  $_SESSION['search'] = $start;
								  $_SESSION['date'] = $date;
								  $_SESSION['leave'] = $leave;
								  
								 header ("Location: search_bus.php"); 
							  }
							  else
								  
							echo "<center>Fill up the form </center>";
						   
						}
					
				  ?>
		    
	</body>
	
</html>
<style>

 form, .content {
	 
    width: 38%;
    margin: 11px auto;
    padding: 22px;
    border: 4px solid #B0C4DE;
    background: white;
    border-radius: 28px 28px 28px 28px;
 }
    .form {
    background: #fa8072b3;
    }
   
   .signup
   {
	   
	 float: right;    
   }
   .login{
	 float: right;  
   } 

</style>
