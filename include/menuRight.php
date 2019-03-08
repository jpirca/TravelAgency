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
<div class="col-2 col-s-12">
  <div class="aside">
	<?php
		// Read array filled up into variables.php
		$i = 0;
		
		for ($i=0;$i<sizeof($rightMenuTitle);$i++)
		{
			echo("<h2><a href='" . $rightMenuLink[$i] . "'>" . $rightMenuTitle[$i] . "</a></h2>");
			echo("<p>" . $rightMenuDesc[$i] . "</p>");
		}
	?>
  </div>
</div>