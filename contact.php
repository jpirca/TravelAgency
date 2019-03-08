<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 10, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<!DOCTYPE html>
<html>
	<?php 
		include 'include/variables.php';
		include "include/db_config.php";
		include 'include/functions.php';
	?>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
		<?php
			// Print header
			include 'include/header.php';
		?>

		<div class="row">

		<?php 
			// Print left menu
			include 'include/menuLeft.php';
		?>

		<div class="col-8 col-s-9">
			<h1>List of the Agents:</h1>
			<p></p>
			<?php
			// Create connection
			$conn = dbconnect();
			
			/* check connection */
			if ($conn->connect_errno) 
			{
				writeLog($conn->connect_errno,$conn->connect_error);
				printf("Connect failed: %s\n", $conn->connect_error);
				exit();
			}
			 // Query to find all agent from DB
			$sql = "Select * From agents";
			if ($result = $conn->query($sql)) 
			{
				$n_rows = $result->num_rows;
				$count_rows = $result->num_rows;
				$count = 1;
				
				// Loop to print all agents into cards
				while ($row = $result->fetch_assoc()) 
				{
					if ($count%2 == 1)
					{	
						echo("<div class='w3-cell-row agentDetails'>");
					}
					
					echo("<div class='w3-container w3-cell agentInfo'>");
						echo("<div class='frame1'>");
							echo("<h3 style='font-size:1.2vw;'>" . $row["AgtFirstName"] . " " . $row["AgtLastName"] . "</h3>");
							echo("<div class='frame2'>");
								echo("<h5 style='font-size:0.8vw;'>Phone: " . $row["AgtBusPhone"] . "</h5>");
								echo("<h5 style='font-size:0.8vw;'>Email: " . $row["AgtEmail"] . "</h5>");
							echo("</div>");
						echo("</div>");
					echo("</div>");
					
					if (($count%2 != 1) || ($count == $n_rows))
					{
						echo("</div>");
					}
					
					$count++;
				}
				/* free result set */
				$result->close();
				$conn->close();
			}
			?>
		</div>

		<?php 
			// Print right menu
			include 'include/menuRight.php'; 
		?>
		</div>
		<?php
			// Print footer
			include 'include/footer.php';
		?>
	</body>
</html>