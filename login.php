<?php
session_start();
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body>

		<div class="topnav">
			  <a class="active" href="index.php">Home</a>
			  <a href="service.php">Service</a>
			  <a href="help.php">Help</a>
			  <a href="about.php">About</a>
 
		</div>
	
		   <div style="padding-left:16px">
			  <h2><center>Welcome to online bus ticket management system </center></h2><br><br>
		  </div>
		  
           <form method="post" action="">
		
			<div class="input-group">
			  <label>Email</label>
			  <input type="email" name="email">
			</div>
			
			<div class="input-group">
			  <label>Password</label>
			  <input type="password" name="password_1">
			</div>
		 
			<div class="input-group">
			  <button type="submit" class="btn" name="submit">Login</button>
			</div>
			
			<?php
			
		      include "conn.php";
		       	
		     if(isset($_POST['submit']))
		     {   
	            
		       	 $email = $_POST['email'];
                 $pass= $_POST['password_1'];
			     
                   $sql = "SELECT email, password FROM passenger WHERE email = '$email' AND password = '$pass' ";
                	$records = $con->query($sql);
                    $Email = "";
					$password = "";
					while($rows = $records->fetch_assoc())
					{
						$Email = $rows['email'];
						$password = $rows['password'];
					}
			  		if($Email == $email && $pass==$password && ($Email!="" && $password!=""))
					{
						echo "Successfully log in";
					 $_SESSION['email'] = $Email;
					 $_SESSION['password'] = $password;
						header ("Location: dashbord.php");
					}	
                   else
                   echo "Error Email or password <br>";					   
              } 
			  
			 ?>
			 
	 
	</body>
	
</html>

<style>

  form, .content {
  width: 30%;
  margin: 60px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

</style>
 