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
<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 23, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<?php
	include_once 'variables.php';
	include_once "db_config.php";
	include_once "functions.php";
	include_once "clAgent.php";

	$conn = dbconnect();
	
	if ($conn->connect_errno) 
	{
		writeLog($conn->connect_errno,$conn->connect_error);
		printf("Connect failed: %s\n", $conn->connect_error);
		exit();
	}
	
	$sql = "Select * From agents";
	
	if ($result = $conn->query($sql)) 
	{
		while ($row = $result->fetch_assoc()) 
		{
			$agent[] = new agent($row["AgentId"],$row["AgtFirstName"],$row["AgtMiddleInitial"],$row["AgtLastName"],$row["AgtBusPhone"],$row["AgtEmail"],$row["AgtPosition"],$row["AgencyId"]);
		}
		/* free result set */
		$result->close();
		$conn->close();
		
	}
?>
