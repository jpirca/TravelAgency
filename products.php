<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 12, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<!DOCTYPE html>
<html>

	<?php 
		include 'include/variables.php';
		//include "include/db_config.php";
		
		//include 'include/functions.php';		
	?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="style/style.css">
		
		<script>
			function sendForm(forma)
			{
				document.getElementById("myForm").submit();
			}
		</script>
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
			
			<form action="productsUdt.php" method="POST" id="myForm">
			<?php 
				$servername = "localhost";
				$username = "jpirca";
				$password = "abcd1234";
				$dbname = "travelexperts";
				
				$conn = mysqli_connect($servername,$username,$password,$dbname);
				$sql = "Select * from products";
				$result = mysqli_query($conn,$sql);
				if (!$result)
				{
					print("Request failed, call support");
					exit();
					
				}
				
				echo("<select name='products'>");
				
				while($row = mysqli_fetch_row($result))
				{
					echo("<option value='" . $row[0] . "'>" . $row[1] . "</option>");
				}
				
				echo("</select>");
				
				mysqli_free_result($result);
				mysqli_close($conn);
			?>
			<button type="button" onclick="sendForm(this);">&lt;-- Send this</button>
			</form>
			
			
			
		
		</div>

		<?php include 'include/menuRight.php'; ?>

		</div>

		<?php
			include 'include/footer.php';
		?>

	</body>
</html>