<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 22, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<!DOCTYPE html>
<html>
	<?php 
		session_cache_expire(30);
		session_start();
		
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
			// Print Left Menu
			include 'include/menuLeft.php';
		?>
		<div class="col-8 col-s-9">

			<h1>Add new agent:</h1>
			<h4>In order to add a new "Agent" you need to Sign-In as a Administrator</h4>
			<h4 style="color:red;"><?php echo($_SESSION["message"]); ?></h4>
			
			<form name='customerloggin' method='post' action='verifyLoginAdmin.php' id='forma1'>
				
				<div class='main' id="main">
					<div class='row-form'>
						<div class='column-form'><label for='aLogin'>Admin Login:</label></div>
						<div class='column-form'><input type='text' name='aLogin' id='aLogin' /></div>
					</div>
					
					<div class='row-form'>
							<div class='column-form'><label for='aPassword'>Password:</label></div>
							<div class='column-form'><input type='password' name='aPassword' id='aPassword' /></div>
					</div>
						

					<div class='row-form'>
						<div class='column-form'>
							<input type='submit' value='Sign In' />
						</div>
						<div class='column-form'>
							<input type='reset' value='Clear' onclick="return confirm('Do you really want to reset the form');" />
						</div>
					</div>
				</div>
			
				<br />
				<br />
			</form>

		</div>

		<?php 
			// Print right menu
			include 'include/menuRight.php'; 
			
			// clean variable
			$_SESSION["message"] = "";
		?>
		</div>

		<?php
			// Print footer
			include 'include/footer.php';
		?>
	</body>
</html>