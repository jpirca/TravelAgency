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
	
	
	// Function dbconnect: Create the connection to the DB
	function dbconnect()
	{
		global $servername, $username, $password,$dbname;
		return mysqli_connect($servername,$username,$password,$dbname);
		
	}

	// Function writeLog: register any error into the log file
	function writeLog($error_num,$error_desc)
	{
		$msg = date("Y")."/".date("m")."/".date("d")."-".$error_num.":".$error_desc;
		$myfile = fopen("log/log.txt", 'a');
		fwrite($myfile,$msg);
		fclose($myfile); 
		
	}

	//Function insertAgent: Insert an agent into the database
	function insertAgent($agent)
	{
		
		$sql = "INSERT INTO `agents`(`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?,?,?,?,?,?,?)";
		
		$conn = dbconnect();
		
		if (!$conn)
		{
			writeLog(mysqli_connect_errno(),mysqli_connect_error());
			print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br />");
			exit();
		}
		
		$stmt = mysqli_prepare($conn,$sql);
		
		mysqli_stmt_bind_param($stmt,"ssssssi",$agent["AgtFirstName"],$agent["AgtMiddleInitial"],$agent["AgtLastName"],$agent["AgtBusPhone"],$agent["AgtEmail"],$agent["AgtPosition"],$agent["AgencyId"]);
		$result = mysqli_stmt_execute($stmt);
		
		if (!$result)
		{
			writeLog(mysqli_stmt_errno(),mysqli_stmt_error());
			print("Error: " . mysqli_stmt_error());
			mysqli_close($conn);
			return false;
		}
		
		mysqli_close($conn);
		return true;
		
		
	}
	
	//Function insertCustomers: Insert an customer into the database
	function insertCustomers($customer)
	{
		
		$sql = "INSERT INTO `customers`(`CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`, `CustLogin`, `CustPassword`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		
		$conn = dbconnect();
		
		if (!$conn)
		{
			writeLog(mysqli_connect_errno(),mysqli_connect_error());
			print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br />");
			exit();
		}
		$hPass = hash("ripemd160",$customer['password']);
		$stmt = mysqli_prepare($conn,$sql);
		
		$format_phone = array("(",")"," ","-",".");
		$phone1 = str_replace($format_phone,"",$customer['hPhone']);
		$phone2 = str_replace($format_phone,"",$customer['bPhone']);
		mysqli_stmt_bind_param($stmt,"ssssssssssiss",$customer['fName'],$customer['lName'],$customer['address'],$customer['city'],$customer['province'],$customer['postalC'],$customer['country'],$phone1,$phone2,$customer['email'],$customer['agent'],$customer['login'],$hPass);
		$result = mysqli_stmt_execute($stmt);
		
		if (!$result)
		{
			writeLog(mysqli_stmt_errno(),mysqli_stmt_error());
			print("Error: " . mysqli_stmt_error());
			mysqli_close($conn);
			return false;
		}
		
		mysqli_close($conn);
		return true;
		
		
	}


?>