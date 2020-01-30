<?php
session_start()
?>

<?php
  if(!($_SESSION['search']))
  {
	   header ("Location: login.php"); 
  }
 else{
	 
?> 
<html>

		<head>
		
		</head>
		
		<body>
		
		  <div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		  </div>
		</body>
	
</html>
<?php
 }
 
 ?>