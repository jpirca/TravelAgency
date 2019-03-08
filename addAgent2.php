<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 23, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<?php
	session_cache_expire(30);
	session_start();
		
	if (!$_SESSION["Admin"])
	{
		$_SESSION["message"] = "You have to loggin to get access";
		header("location: addAgent.php");		
	}

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
			//Print left menu
			include 'include/menuLeft.php';
		?>

		<div class="col-8 col-s-9">
			<h1>Adding new agent:</h1>
			<h4>We will show soon the fileds to add agent</h4>
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