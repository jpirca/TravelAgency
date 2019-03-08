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
		// Set up variables
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

			<h1>This Promotion is <span style="color:red;text-decoration:underline;">HOT HOT</span></h1>
			<p>Clic over the gift to open it and see the BIG offer</p>
			<p></p>
			<p></p>
			<p></p>
			<h2 id="offerText"></h2>
		
			<div class="w3-row-padding w3-padding-16 w3-center">
				<div class="w3-half">
					<img id="gift1" src="images/gift.jpg" style="width:100%" onclick="openGift()">
				</div>
			</div>
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