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
			include 'include/header.php';
		?>

		<div class="row">

		<?php 
			include 'include/menuLeft.php';
		?>

		<div class="col-8 col-s-9">

			<h1>Test of Insert:</h1>
			
			
			<?php 
				$agent = array();
				$agent["AgtFirstName"] = "Freddy";
				$agent["AgtMiddleInitial"] = "H";
				$agent["AgtLastName"] = "Smith";
				$agent["AgtBusPhone"] = "403-555-5555";
				$agent["AgtEmail"] = "fred@travelexperts.com";
				$agent["AgtPosition"] = "Junior Agent";
				$agent["AgencyId"] = 1;
				
				if (insertagent($agent))
				{
					echo("<p>Insert Succesful</p>");
				}
				else
				{
					echo("<p>Fail - Call Support</p>");
				}
			?>
			
			
			<div class="agentInfo">
				<h3>Janet Delton</h3>
				<h5>Phone: (403) 210-7801</h5>
				<h5>Email: janet.delton@travelexperts.com</h5>
			</div>
	
		
		</div>

		<?php include 'include/menuRight.php'; ?>

		</div>

		<?php
			include 'include/footer.php';
		?>

	</body>
</html>