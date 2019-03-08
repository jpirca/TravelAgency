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
		include 'include/db_config.php';
		include 'include/functions.php';
		
		// Validate is coming from the form
		if(!isset($_REQUEST["login"]))
		{
			header("Location: register.php");
		}
	?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
		<script src="js/register.js"></script>
	</head>

	<body >

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
			<h1>Adding customers:</h1>
			<?php
				// Pass array from the form to a function for insert
				$result = insertCustomers($_REQUEST);
				
				if ($result)
				{
					echo("<p>Customer information was created</p>");
				}
				else
				{
					echo("<p>There was a problem adding the information. Please try later</p>");
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