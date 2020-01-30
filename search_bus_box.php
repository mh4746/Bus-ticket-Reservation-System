<?php
  session_start();                  
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
									 
									<th>COACH NO</th>
									<th>BUS</th>
									<th>COACH TYPE</th>
									<th>ARRIVAL TIME</th>
									 
							  </tr>
				  <?php
					
					     include "conn.php";
						 
					    
						$search_value = $_SESSION['search'];
						
                        $sql="select * from bus_info where bus_name like '%$search_value%'";

							$records =$con->query($sql);
							
						while($row = $records->fetch_assoc())
                         {
							  echo "<tr>"; 
							  echo "<td>" . $row['coach_no'] . "</td>";
							    echo "<td>" . $row['bus_name'] . "</td>";
								
								echo"<td>". $row['coach_type']."</td>";
							
								echo"<td>". $row['a_time'] ."</td>";
								 
								//echo "<td>". "<a href='seat_search.php'>View</a>" ."</td>";
							  echo "</tr>";
						  }																									  
				 ?>
		 
			</table>
					  
    </body>
	
</html>

