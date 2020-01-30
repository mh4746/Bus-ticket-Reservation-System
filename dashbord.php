<?php
session_start()
?>

<?php
  
  if(!($_SESSION['email']) || !($_SESSION['password']))
  {     
     
	   header ("Location: login.php"); 
  }
 
  else { 
	  
?>

<html lang="en">

	<head>
		<title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body  >

		<div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="cancel_ticket.php">Cancel tickets</a>
		  <a href="show_ticket.php">Show ticket</a>
		 <div class = "logout"> <a href="logout.php">Logout </a></div>
         <div class = "user"> <a href="#">
		  <?php
		    $tmp = $_SESSION['email'];
		   echo " $tmp ";?>
         <a/></div>
		 
		</div>
	 
	</body>
</html>

<?php
  }
  
?>


<style>
   
   .user
   {
	   
	 float: right;    
   }
   .logout{
	   
	   float : right;
   }
   
   
</style>
