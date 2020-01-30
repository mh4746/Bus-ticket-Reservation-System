<?php
session_start()
?>

<?php
  
  if(!($_SESSION['ademail']) || !($_SESSION['adpassword']))
  {     
    
	   header ("Location: admin_login.php"); 
  }
  else {
	  
?>
<html>

	<head>
		<title>Admin panel</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body style="background-image:url(css/picture/img_3.jpg)">

		<div class="topnav">
		  <a href="index.html">Home</a>
		  <a href="show_passenger.php.php">Show Passanger</a>
		  <a href="ad_edit.php.php">Edit</a>
		  <a href="logout.php">Logout</a>
		  
		</div>
       
      
	</body>
	
</html>
<?php
  }
  ?>
