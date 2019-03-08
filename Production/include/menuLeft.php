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

<div class="col-2 col-s-3 menu">
	<ul>
		<?php
			// Print all menu options from the array loaded into variables.php
			$i = 0;
			for($i=0;$i<sizeof($menuOption);$i++)
			{
			echo("<li><a href='" . $menuLink[$i] . "'>" . $menuOption[$i] . "</a></li>");
			}
		?>
	</ul>
	<br />
	<div class="logoMenuComp">
		<img src="images/LogoCompany2.png" />
	</div>
</div>