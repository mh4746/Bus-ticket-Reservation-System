<?php
session_start();
?>


<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body>
 
	
		   <div style="padding-left:16px">
			  <h2><center>Admin panel page </center></h2><br><br>
		  </div>
		  
           <form method="post" action="">
		
			<div class="input-group">
			  <label>Email</label>
			  <input type="email" name="ademail">
			</div>
			
			<div class="input-group">
			  <label>Password</label>
			  <input type="password" name="adpassword_1">
			</div>
		 
			<div class="input-group">
			  <button type="submit" class="btn" name="submit">Login</button>
			</div>
			
			<?php
			
		      include "conn.php";
		       	
		     if(isset($_POST['submit']))
		     {   
	            
		       	 $email = $_POST['ademail'];
                 $pass= $_POST['adpassword_1'];
			     
                   $sql = "SELECT email, password FROM admin WHERE email = '$email' AND password = '$pass' ";
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
						//echo "Successfully log in";
					 $_SESSION['ademail'] = $Email;
					 $_SESSION['adpassword'] = $password;
						header ("Location: admin.php");
					}	
                   else
                   echo "Error Email or password <br>";					   
              } 
			  
			 ?>
			 
	 
	</body>
	
</html>

<style>

  .input-group {
    margin: 14px -75px 16px 44px;
}
form, .content {
    width: 45%;
    margin: 0px auto;
    padding: 20px;
    border: 4px solid #B0C4DE;
    background: white;
    border-radius: 20px 14px 17px 18px;
}

</style>
