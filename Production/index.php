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
		// File with pre-load variable
		include 'include/variables.php';
		date_default_timezone_set('America/Denver');
		
		// Setting up a wellcome message
		$time24 = date("G");
		
		switch (true)
		{
			case ($time24 > 5 && $time24 < 12) :
						$grett = "Good Morning";
						break;
			case ($time24 > 11 && $time24 < 18) :
						$grett = "Good Afternoon";
						break;
			case ($time24 > 17 && $time24 < 25) :
						$grett = "Good Evening";
						break;
			default:
						$grett = "Good Morning";
		}

	?>

	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
		
	</head>

	<body>
		<?php 
			// header
			include 'include/header.php';
		?>

		<div class="row">
		
		<?php 
			// Left menu
			include 'include/menuLeft.php';
		?>
		
		<div class="col-8 col-s-9">

			<!-- Print the gretting message according the hour -->
			<div class="w3-row-padding w3-padding-16">
				<div class="w3-half">
					<h4><?php echo $grett; ?></h4>
				</div>
			</div>
		
		<?php 
				// Package showcase
				// Read info from array filled up into variables.php
				for ($i=0;$i<sizeof($places);$i++)
				{
					if ($i==0 || $i==3)
					{
						echo("<div class='w3-row-padding w3-padding-16 w3-center' id='food'>");
					}

					echo("<div class='w3-third'>");
					echo("<a href='detailsDest.php?dest=".$i."' class='mainRef'>");
					echo("<img src='images/" . $places[$i][2] . "' alt='" . $places[$i][0] . "' style='width:100%'>");
					echo("<h3>" . $places[$i][0] . "</h3>");
					echo("<p>" . $places[$i][1] . "</p>");
					echo("</a>");
					echo("</div>");
					
					if ($i==2 || ($i == (sizeof($places) - 1)) )
					{
						echo("</div>");
					}
				}
		?>	
		
		</div>
		
		<!-- Right Menu -->
		<?php include 'include/menuRight.php'; ?>
		

		</div>

		<?php
			// Footer
			include 'include/footer.php';
		?>

	</body>
</html>