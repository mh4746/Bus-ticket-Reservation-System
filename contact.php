<html>


    <head>
		<title>CSS Template</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
	<body style="background-image:url(css/picture/img_3.jpg)">

		<div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		  
		  <a href="admin_login.php">Admin Login</a>
		  <a href="contact.php">Contact us</a>
		   <div class = "login"><a href="login.php">Login</a> </div>
	       <div class = "signup"> <a href="registration.php">Sign up</a> </div>
		
		  
		</div>
       
      
	<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: abc.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
          
			<div class="clearfix"></div>
			
			<?php 
			include "conn.php";
  	   
		     if(isset($_POST['submit']))
		     {   
	            
		       	 $eml = $_POST['email'];
				 $message = $_POST['message'];
                  
                   $sql = "INSERT INTO mesege (email,mesege) VALUES ('$eml','$message')";
				   $data=$con->query($sql);
                   
                   if($data)
                   echo "Successfully sent";
                  else
					  echo "Something Wrong";
	
              } 
			   
			
			?>
			
	</body>
			
</html>

<style>
   
   .signup
   {
	   
	 float: right;    
   }
   .login{
	 float: right;  
   } 
   
</style>