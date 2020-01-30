<?php
 // include "index.php";
?>	  
<html>
	 <head>
	 <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	 <style>
	table, th, td {
		border: 3px  ;
		padding: 5px;
	}
	table {
		border-spacing: 5px;
		border : 2px solid black;
	}


/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
	 </head>
	 
	 <body>
	 
		  <br><br>
			<div class  ="two"> 
		    <table  style="background-color:#FFDAB9">
			    
				<?php
				 
				echo "<tr>";
					echo "<td> Gate</td>";
				    echo "<td>---</td>";
					echo "<td>Engine</td>";
					echo '<td>Driver</td>';
			   echo "</tr>";
						  
				
					include "conn.php";
					 $cnt = 0;
						for($i = 65; $i<=73; $i++)
						{
							    echo "<tr>";
								$cnt++;
							    if($cnt%2==1)
							    echo '<td style="background-color:#696969;">'. chr($i)."-1" ."</td>";  
							    else
							    echo '<td style="background-color:#F8F8FF; ">'. chr($i)."-1" ."</td>";
								echo '<td style="background-color:#F8F8FF;">'. chr($i)."-2" ."</td>";
								echo '<td></td>';
							    echo '<td style="background-color:#F8F8FF;">'. chr($i)."-3" ."</td>";
							    echo '<td style="background-color:#F8F8FF;">'. chr($i)."-4" ."</td>";
							    echo "</tr>";
					    }
						
						for($i = 74; $i<=74; $i++)
						{
							    echo "<tr>";
								$cnt++;//708090,696969,	708090
							    if($cnt%2==1)
							    echo '<td style="background-color:#696969;">'. chr($i)."-1" ."</td>";
							    else
							    echo '<td style="background-color:#F8F8FF; ">'. chr($i)."-1" ."</td>";
							    
								echo '<td style="background-color:#F8F8FF;">'. chr($i)."-2" ."</td>";
							    echo '<td style="background-color:#F8F8FF;">'. chr($i)."-3" ."</td>";
						     
							    echo '<td style="background-color:#F8F8FF;">'. chr($i)."-4" ."</td>";
								 echo '<td style="background-color:#F8F8FF;">'. chr($i)."-5" ."</td>";
							    echo "</tr>";	
					    }
						 
				      ?>
					  
					</table>
					
				</div>
				
 			    	<form method="post" action="" class ="frm">
		
					<div class="input-group">
					  <input type="text" name="name" placeholder = "Name">  <input type="text" name="phone" placeholder = "Phone">
					</div>
					<div class="input-group">
					  <input type="email" name="email" placeholder = "Email">
					</div>
					<div class="input-group">
					 Gender <select name="gender" id="searchmenu_leavingform" class="selectfrom">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="Male">Male</option>
						<option value="2" label="Female">Female</option>
					   </select>
					 </div>
					<div class="input-group">
					  <input type="adress" name="adress" placeholder ="Adress">
					</div>
					 
					<div class="input-group">
					Selcet seat <select name="seat" id="searchmenu_leavingform" class="selectfrom">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="A-1">A-1</option>
						<option value="2" label="A-2">A-2</option>
						<option value="3" label="A-3">A-3</option>
						<option value="3" label="A-3">A-4</option> 
						<option value="3" label="A-3">B-1</option> 
					   </select>
					 </div>
					<div class="input-group">
					 Boarding point <select name="bpoint" id="searchmenu_leavingform" class="selectfrom">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="BANDARBAN">BANDARBAN</option>
						<option value="2" label="BENAPOLE">BENAPOLE</option>
						<option value="3" label="DHAKA">DHAKA</option> 
					   </select>
					   
					  Droping point<select name="dpoint" id="searchmenu_leavingform" class="selectfrom">
						<option value="" label="-----" selected="selected">-------</option>
						<option value="1" label="BANDARBAN">BANDARBAN</option>
						<option value="2" label="BENAPOLE">BENAPOLE</option>
						<option value="3" label="DHAKA">DHAKA</option> 
					   </select>
					</div>
					  <div>
					  Total cost:<input type="text" name="tcost" placeholder ="750">*quantity
					 </div>
					<div class="input-group">
					Payment method <select name="pmethod" id="payment" class="selectfrom">
						<option value="" label="Payment methode" selected="selected">-------</option>
						<option value="1" label="Bkash">Bkash</option>
						<option value="2" label="Dutch bangla">Dutch bangla</option>
						<option value="3" label="SureCash">SureCash</option> 
					   </select>
					
					 </div>
					 <div class="input-group">
					 Transaction ID <input type="text" name="trans" placeholder ="code">
					</div>
					<div class="input-group">
					 <center> <button type="submit" class="btn" name="confirm">Confirm</button> </center>
					</div>
					 
			    </form>
				
				<?php 
						 include "conn.php";
				        
						 if(isset($_POST['confirm']))
						{   
					     
					          $email = $_POST['email'];
							  $seat = $_POST['seat'];
							  $tcode = $_POST['trans'];
							 
							  if($email && $seat && $tcode)
							  {     
						         
								  $_SESSION['name'] =$_POST['name'];
								  $_SESSION['phone'] = $_POST['phone'];
								  $_SESSION['email'] = $_POST['email'];
								  $_SESSION['gender'] = $_POST['gender'];
								  $_SESSION['seat'] = $_POST['seat'];
								  $_SESSION['bpoint'] = $_POST['bpoint'];
								  $_SESSION['dpoint'] = $_POST['dpoint'];
								  $_SESSION['pmethod'] = $_POST['pmethod'];
								  $_SESSION['trans'] = $_POST['trans'];
								  $name = $_POST['name'];
								  $phone = $_POST['phone'];
								  $seat   = $_POST['seat'];
								  $bpoint = $_POST['bpoint'];
								  $dpoint = $_POST['dpoint'];
								  $pmethod = $_POST['pmethod'];
								  $trans = $_POST['trans'];
								  
						    $sql = "SELECT * from route_name WHERE route_id = $bpoint";
							$records = $con->query($sql);
							$bpoint = "";
							while($rows = $records->fetch_assoc())
							{
								$bpoint  = $rows['route'];
							}
							$sql = "SELECT * from route_name WHERE route_id = $dpoint";
							$records = $con->query($sql);
							$dpoint = "";
							while($rows = $records->fetch_assoc())
							{
								$dpoint  = $rows['route'];
							}
							 
							$sql = "SELECT * from payment WHERE Pay_id = $pmethod";
							$records = $con->query($sql);
							$pmethod = "";
							while($rows = $records->fetch_assoc())
							{
								$pmethod  = $rows['Methode'];
							}
						  
						  $sql = "INSERT INTO ticket(email,from,to,name,phone) VALUES ('$email','$bpoint','$dpoint','$name','$phone')";
						  $data=$con->query($sql);
						    
						  if($data)
						  {  
				
						   $_SESSION['email'] = $email;
						   header ("Location: show_ticket.php"); 
		
						  }
					     }
						  else
							echo "<center>Fill up the form </center>";
						  
						}  
					
				  ?>
			  
	 </body>

</html>

<style>
  
 table
 {
	position: absolute;
    margin-right: 50%;
    height: 80%;
 }
 
 form
 {
	position: relative;
    margin-left: 50%%;
    height: 70%;
	 
 }
 .two{
	 
	 margin-left: auto;
	 
 }
 
  
 .input-group input {
    height: 30px;
    width: 40%;
    padding: 14px 28px;
    font-size: 16px;
    border-radius: 11px;
    border: 1px solid gray;

}

form, .content {
     width: 49%;
    margin: 0px auto;
    padding: 19px;
    border: 0px solid #B0C4DE;
   background: #fbebd8f0;
    border-radius: 20px 14px 17px 18px;
}

</style>