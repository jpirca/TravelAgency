<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 19, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<?php 
	session_cache_expire(30);
	session_start();
	
	$_SESSION["message"] = "";
	
	if (!isset($_REQUEST["login"]))
	{
		$_SESSION["message"] = "User ID and Password are required";
		header("Location: login.php");
	}
	
	include 'include/db_config.php';
	include 'include/functions.php';
	
	// Create a connection
	$conn = dbconnect();
	
	// Check if connection was made
	if (!$conn)
	{
		writeLog(mysqli_connect_errno(),mysqli_connect_error());
		print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br />");
		exit();
	}
	
	$sql = "select CustPassword from customers where CustLogin = ?";
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"s",$_REQUEST["login"]);
	
	// if error preparing the stament
	if (!mysqli_stmt_execute($stmt))
	{
		$_SESSION["message"] = "Database lookup fail";
		writeLog(mysqli_stmt_errno(),mysqli_stmt_error());
		mysqli_close($conn);
		header("Location: login.php");
	}
	
	$result = mysqli_stmt_get_result($stmt);
	
	if ($password = mysqli_fetch_array($result))
	{
		if ($password[0] == hash("ripemd160",$_REQUEST["password"]))
		{
			$_SESSION["logged-id"] = true;
			$returnpage = $_SESSION["returnpage"];
			unset($_SESSION["returnpage"]);
			mysqli_close($conn);
			$_SESSION["message"] = "";
			header("Location: order.php");
		}
		else
		{
			$_SESSION["message"] = "User ID or Password are incorrect";
			mysqli_close($conn);
			header("Location: login.php");
		}
	}
	else
	{
		$_SESSION["message"] = "User ID or Password are incorrect";
		mysqli_close($conn);
		header("Location: login.php");
	}
	
	

?>