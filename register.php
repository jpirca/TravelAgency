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

				<h1>Customer Information</h1>
				
				<form name='customerInfo' method='post' action='addingCustomers.php' id='forma1'>
					<div class='main' id="main">
						<div class='row-form'>
							<div class='column-form'><label for='fName'>First Name:</label></div>
							<div class='column-form'><input type='text' name='fName' id='fName' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
								<div class='column-form'><label for='lName'>Last Name:</label></div>
								<div class='column-form'><input type='text' name='lName' id='lName' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
								<div class='column-form'><label for='address'>Address:</label></div>
								<div class='column-form'><input type='text' name='address' id='address' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
								<div class='column-form'><label for='city'>City:</label></div>
								<div class='column-form'><input type='text' name='city' id='city' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						
						<div class='row-form'>
							<div class='column-form'><label for='province'>Province:</label></div>
							<div class='column-form'>
								<select id='province' name='province' class='select-mul'  onclick="emptyColor(this);" onkeypress="emptyColor(this);">
								<?php
									// Print all Province from an array declare into variable file
									// assumption: there is at least one
									echo("<option value='0'>Select an option...</option>");
									
									foreach ($province as $key => $value) 
									{
										echo("<option value='{$key}'>{$value}</option>");
									}
								?>
								</select>
							</div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='postalC'>Postal Code:</label></div>
							<div class='column-form'><input type='text' name='postalC' id='postalC' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='country'>Country:</label></div>
							<div class='column-form'><input type='text' name='country' id='country' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
							
						<div class='row-form'>
							<div class='column-form'><label for='hPhone'>Home Phone:</label></div>
							<div class='column-form'><input type='text' name='hPhone' id='hPhone' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='bPhone'>Bus Phone:</label></div>
							<div class='column-form'><input type='text' name='bPhone' id='bPhone' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='email'>Email:</label></div>
							<div class='column-form'><input type='email' name='email' id='email' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='login'>Login:</label></div>
							<div class='column-form'><input type='text' name='login' id='login' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='password'>Password:</label></div>
							<div class='column-form'><input type='password' name='password' id='password' onclick="emptyColor(this);" onkeypress="emptyColor(this);" /></div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'><label for='agent'>Agent:</label></div>
							<div class='column-form'>
							<?php
								// Get all agents OO mode
								include "include/allAgentsOO.php";
								
							?>
								<select id='agent' name='agent' class='select-mul'  onclick="emptyColor(this);" onkeypress="emptyColor(this);">
								<?php
									// Print all Province from an array declare into variable file
									// assumption: there is at least one
									echo("<option value='0'>Select an option...</option>");
									
									foreach ($agent as $value)
									{
										echo("<option value='".$value->getAgentId()."'>".$value->getAgtFirstName()." ".$value->getAgtLastName()."</option>");
									}
								?>
								</select>
							</div>
						</div>
						
						<div class='row-form'>
							<div class='column-form'>
								<input type='submit' value='Register' onclick="return validateCust();" />
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