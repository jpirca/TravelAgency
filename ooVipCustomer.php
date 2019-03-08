<?php
//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 20, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 
?>
<?php

	include_once ("ooCustomer.php");

	class VIPCustomer extends Customer
	{
		private $DiscPercent;
		
		public function __construct($CustomerId,$CustFirstName,$CustLastName,$DiscPercent)
		{
			parent::__construct($CustomerId,$CustFirstName,$CustLastName);
			$this->DiscPercent = $DiscPercent;
		}
		
		public function getDiscPercent()
		{
			return $this->DiscPercent;
		}
		
		public function setDiscPercent($DiscPercent)
		{
			$this->DiscPercent = $DiscPercent;
		}
	}

?>