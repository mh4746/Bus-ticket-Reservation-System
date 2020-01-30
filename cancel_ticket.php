<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body>

		<div class="topnav">
			  <a class="active" href="index.html">Home</a>
			  <a href="service.php">Service</a>
			  <a href="help.php">Help</a>
			  <a href="about.php">About</a>
			  <a href="registration.php">Creat account</a>
		</div>
		
		 

		   <div style="padding-left:16px">
			  <h2><center>Online Customer Sign in: </center></h2><br><br>
		  </div>
		  
           <form method="post" action="">
		
			<div class="input-group">
			  <label>Ticket Id</label>
			  <input type="email" name="email">
			</div>
			
			<div class="input-group">
			  <label>Password</label>
			  <input type="password" name="password_1">
			</div>
		 
			<div class="input-group">
			  <button type="submit" class="btn" name="submit">Login</button>
			</div>
			<p>
			
			<?php
		      include "conn.php";
			  
		        echo "Succesfully canceld";
                 				   
			  
			 ?>
			
	 
	</body>
	
</html>