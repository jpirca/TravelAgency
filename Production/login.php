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
		session_cache_expire(30);
		session_start();
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
			<h1>Customer Sign-in</h1>
			<form name='customerloggin' method='post' action='verifylogin.php' id='forma1'>
				<p>
					<?php 
						// Print message in case of error
						if (isset($_SESSION["message"]))
						{	
							echo($_SESSION['message']); 
							$_SESSION["message"] = "";
						}
					?>
				</p>
				<div class='main' id="main">
					<div class='row-form'>
						<div class='column-form'><label for='login'>Login:</label></div>
						<div class='column-form'><input type='text' name='login' id='login' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
					</div>
					
					<div class='row-form'>
							<div class='column-form'><label for='lName'>Password:</label></div>
							<div class='column-form'><input type='password' name='password' id='password' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
					</div>
						

					<div class='row-form'>
						<div class='column-form'>
							<input type='submit' value='Sign In' />
						</div>
						<div class='column-form'>
							<input type='reset' value='Clear form' onclick="return confirm('Do you really want to reset the form');" />
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
		?>
		</div>
		<?php
			// Print footer
			include 'include/footer.php';
		?>
	</body>
</html>