<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 09, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<!DOCTYPE html>
<html>

	<?php 
		include 'include/variables.php';
	?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
		
	</head>

	<body>

		<?php 
			include 'include/header.php';
		?>

		<div class="row">

		<?php 
			include 'include/menuLeft.php';
		?>

		<div class="col-8 col-s-9">

			<h1>Quote:</h1>
			<p><?php echo("Package: $package_name sells for $$price and has been sold to $n_travellers people."); ?></p>
	
		
		</div>

		<?php include 'include/menuRight.php'; ?>

		</div>

		<?php
			include 'include/footer.php';
		?>

	</body>
</html>