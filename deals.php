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

		<div class="col-6 col-s-9">
		  <h1><?php echo "The City.";?></h1>
		  <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
		</div>

		

		</div>

		<?php
			include 'include/footer.php';
		?>

	</body>
</html>