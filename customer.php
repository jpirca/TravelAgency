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

	include("ooCustomer.php");
	include("ooVipCustomer.php");
	
	
	
	function makePhonebookName($cust)
	{
		return  $cust->getCustLastName() . ", " .  $cust->getCustFirstName();
	}
	
	
	
	$customers = array();
	
		
	$customers[] = new Customer(1,"Fred","Smith");
	/*
	print("Custumer ID: " . $customers[0]->getCustomerId());
	print("<br />");
	print("Customer First Name: " . $customers[0]->getCustFirstName());
	print("<br />");
	print("Customer  Last Name: " . $customers[0]->getCustLastName());
	print("<br />");
	print("-----------------------------------------------------------------<br />");
	*/
	
	$customers[] = new Customer(2,"Jacob","Ho");
	/*
	print("Custumer ID: " . $customers[1]->getCustomerId());
	print("<br />");
	print("Customer First Name: " . $customers[1]->getCustFirstName());
	print("<br />");
	print("Customer  Last Name: " . $customers[1]->getCustLastName());
	print("<br />");
	print("-----------------------------------------------------------------<br />");
	*/
	
	$customers[] = new VIPCustomer(3, "Maria", "Jones", 10);
	
	foreach($customers as $customer)
	{
		print(get_class($customer));
		print("<br />");
		print("Custumer ID: " . $customer->getCustomerId());
		print("<br />");
		print("Customer First Name: " . $customer->getCustFirstName());
		print("<br />");
		print("Customer  Last Name: " . $customer->getCustLastName());
		print("<br />");
		if (get_class($customer) == "VIPCustomer")
		{
			print("Customer Discount: " . $customer->getDiscPercent());
			print("<br />");
		}
		print("-----------------------------------------------------------------<br />");
	}
	


	
	
	
	
	print("<ol>");
	print("<li>" .makePhonebookName($customers[0]) . "</li>");
	print("<li>" .makePhonebookName($customers[1]) . "</li>");
	print("<li>" .makePhonebookName($customers[2]) . "</li>");
	print("</ol>");
	
	
?>