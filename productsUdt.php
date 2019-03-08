<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 11, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<!DOCTYPE html>
<html>

	<?php 
	
		if (!isset($_POST['products']))
		{
			header('products.php');
			
		}
		include 'include/variables.php';
		//include "include/db_config.php";
		
		//include 'include/functions.php';		
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

			<h1>Test of Update Value:</h1>
			
			<form action="productsUpt.php" method="POST">
			
			<?php
			
				$servername = "localhost";
				$username = "jpirca";
				$password = "abcd1234";
				$dbname = "travelexperts";
				
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "Select * from products where ProductId =" . $_POST['products'];
				$result = $conn->query($sql);
				
				if (($result->num_rows > 0) && ($result->num_rows < 2))
				{
					$row = $result->fetch_assoc();
					echo("Product ID:<input type='text' value='" . $row['ProductId'] . "' /><br />");
					echo("Product Name:<input type='text' value='" . $row['ProdName'] . "' />");
					
				}
			
			?>
			
				
				
			
			<button type="button" onclick="sendForm(this);">&lt;-- Send this</button>
			</form>
			<?php
				$result->close();
			?>
			
			
			
		
		</div>

		<?php include 'include/menuRight.php'; ?>

		</div>

		<?php
			include 'include/footer.php';
		?>

	</body>
</html>