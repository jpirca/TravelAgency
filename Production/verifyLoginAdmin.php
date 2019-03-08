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
	
	session_cache_expire(30);
	session_start();
	
	$_SESSION["message"] = "";

	// Check if the data comes from the form
	if (!isset($_POST['aLogin']))
	{
		$_SESSION["message"] = "Admin ID and Password are required";
		header("location: addAgent.php");
	}
	
	$myFile = fopen("adminPass.txt","r");
	
	if ($myFile)
	{
		$line = fgets($myFile,4096);
		$admin = explode("/",$line);
				
		if ((trim($admin[0]) == trim($_POST['aLogin'])) && (trim($admin[1]) == trim(hash("ripemd160",$_POST['aPassword']))))
		{
			$_SESSION["Admin"] = true;
			header("location: addAgent2.php");
		}
		else
		{
			$_SESSION["message"] = "Login or Password invalid";
			$_SESSION["Admin"] = false;
			header("location: addAgent.php");
		}

	}
?>