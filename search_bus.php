<?php
session_start()
?>

<?php
  if(!($_SESSION['search']) || !($_SESSION['leave']) || !($_SESSION['date']))
  {
	   header ("Location: booking.php"); 
  }
 
  else {
	  
?>

<html>
	<head>
		<title>Searching bus</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<style>
			#bus_table {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			#bus_table td, bus_table th {
				border: 1px solid #ddd;
				padding: 8px;
			}

			#bus_table tr:nth-child(even){background-color: #f2f2f2;}

			#bus_table tr:hover {background-color: #ddd}
           
			#bus_table th {
			   border: 2px solid white;
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: left;
				background-color: #4CAF50;
				color: white;
			}
		</style>
	</head>
	
	<body>
	       
		  <div class="topnav">
		  <a href="index.php">Home</a>
		  <a href="booking.php">Buy ticket</a>
		  <a href="help.php">Help</a>
		   
		</div>
		
		         
		               <table id="bus_table">
							  <tr>
									<th>D.TIME</th>
									<th>COACH NO</th>
									<th>BUS</th>
									<th>S.COUNTER</th>
									<th>E.COUNTER</th>
									<th>FARE</th>
									<th>COACH TYPE</th>
									<th>ARRIVAL TIME</th>
									<th>SEATS</th>
									<th>BOOKING</th>
							  </tr>
						  
				  <?php
					
					include "conn.php";
					
					 $start = $_SESSION['search'];
					 $leave = $_SESSION['leave'];
					 $date = $_SESSION['date'];
					 
					 if($start!=$leave)
					 {
						 
						  $sql = "SELECT * from route_name WHERE route_id = $start";
							$records = $con->query($sql);
							$start_name = "";
							while($rows = $records->fetch_assoc())
							{
								$start_name = $rows['route'];
								
							}
							 
							$sql = "SELECT * from route_name WHERE route_id = $leave";
							$records = $con->query($sql);
							$Leave_name = "";
							while($rows = $records->fetch_assoc())
							{
								$Leave_name = $rows['route'];
								
							}
							
						   $sql = "SELECT * from bus_info WHERE id1 = $start AND id2 = $leave";
							$records = $con->query($sql);
							
						while($row = $records->fetch_assoc())
                         {
							  echo "<tr>"; 
								echo "<td>" . $row['d_time'] . "</td>";
								echo"<td>". $row['coach_no']."</td>";
								echo"<td>". $row['bus_name']."</td>";
								echo"<td>". $start_name."</td>";
								echo"<td>". $Leave_name ."</td>";
								echo"<td>". $row['fare'] ."</td>";
								echo"<td>". $row['coach_type'] ."</td>";
								echo"<td>". $row['a_time'] ."</td>";
								echo"<td>". $row['seat'] ."</td>";
								echo "<td>". "<a href='seat_search.php'>View</a>" ."</td>";
							  echo "</tr>";
						  }																									  
					 }
					  
				 ?>
		 
			</table>
			
	</body>
	
 </html>
 <?php
  }
 ?> 