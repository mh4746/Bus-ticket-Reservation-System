<?php
session_start()
?>

<html>

	<head>
		<title>Registration form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<<body style="background-image:url(css/picture/img_3.jpg)">

		<div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		  <a href="about.php.php">About</a>
		  
		 <div class ="login"> <a href="login.php">Login</a> </div>
		  <div class = "signup">  <a href="registration.php">Sign up</a> </div>
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
		  <label>Confirm password</label>
		  <input type="password" name="password_2">
		</div>
		<div class="input-group">
		  <button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
			
		</p>
		
	   </form>
	   
	   <?php
	       
	       include "conn.php";
		    if(isset($_POST['reg_user']))
			{      
		         
		         $email = $_POST['email'];
				 $pass1 = $_POST['password_1'];
				 $pass2 = $_POST['password_2'];
				 
                   $sql = "SELECT email FROM passenger WHERE email = '$email'";
                	$records = $con->query($sql);
                    $Email = "";

					while($rows = $records->fetch_assoc())
					{
						$Email = $rows['email'];
					}
					
			  		if($Email != $email)
				   {
				 
					  if($pass1==$pass2 && $pass1!="")
					  {    
						  
						  $sql = "INSERT INTO passenger(email,password) VALUES ('$email','$pass1')";
						  $data=$con->query($sql);
						  
						  if($data)
						  {  
						  
						   $_SESSION['email'] = $email;
						   $_SESSION['password'] = $pass1;
						   header ("Location: dashbord.php");
							  
						  }
						  else
							  echo "Registration Fail";
					  }
					  else
						  echo "Password does not matching";   
					}
			  else
				   echo"<h1><center>Already have an account</center></h1>";
			}
	   ?>
	   
		 
	</body>
	
</html>
<style>

form, .content {
  width: 30%;
  margin: 35px auto;
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

.signup
   {
	   
	 float: right;    
   }
   .login{
	 float: right;  
   } 
   

</style>