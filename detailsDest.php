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
		// Set of variables
		include 'include/variables.php';
		
		// id of destination selected pass by URL
		$indx = $_GET['dest'];
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
			<!-- All information about place selected -->
			<h1><?php echo $places[$indx][0] ?></h1>
			<p><?php echo($places[$indx][1]); ?></p>
			<p><?php echo("N. of Travellers: " . $places[$indx][3]); ?></p>
			<p><?php echo("Flight tickets included: " . $places[$indx][4]); ?></p>
			<p><?php echo("Price: " . $places[$indx][5]); ?></p>
			<p onclick="openExternalPage('<?php echo($places[$indx][6]);  ?>');">Clic HERE for more info</p>
			<div class="w3-row-padding w3-padding-16 w3-center">
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>1.jpg" alt="Caracas" style="width:100%">
					</div>
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>2.jpg" alt="Caracas" style="width:100%">
					</div>
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>3.jpg" alt="Caracas" style="width:100%">
					</div>
			</div>
			<div class="w3-row-padding w3-padding-16 w3-center">
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>4.jpg" alt="Caracas" style="width:100%">
					</div>
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>5.jpg" alt="Caracas" style="width:100%">
					</div>
					<div class="w3-third">
						<img class ="imgDet" src="images/<?php echo(str_replace(" ", "",strtolower($places[$indx][0]))); ?>6.jpg" alt="Caracas" style="width:100%">
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