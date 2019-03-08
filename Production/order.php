<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 17, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<?php
	session_cache_expire(30);
	session_start();
	
	if (!isset($_SESSION["logged-id"]))
	{
		$_SESSION["message"] = "You need to Sign in first";
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<?php 
		// file with variables
		include 'include/variables.php';
	?>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
		<script src="js/register.js"></script>
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
			<h1>Customer order</h1>
			<p><?php echo("You are Logged In"); ?></p>
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