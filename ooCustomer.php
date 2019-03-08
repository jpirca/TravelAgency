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
	class Customer
	{
		private $CustomerId;
		private $CustFirstName;
		private $CustLastName;
		private $CustAddress;
		private $CustCity;
		private $CustProv;
		private $CustPostal;
		private $CustCountry;
		private $CustHomePhone;
		private $CustBusPhone;
		private $CustEmail;
		private $AgentId;
		private $CustLogin;
		private $CustPassword;
		
		public function __construct($CustomerId,$CustFirstName,$CustLastName)
		{
			$this->CustomerId = $CustomerId;
			$this->CustFirstName = $CustFirstName;
			$this->CustLastName = $CustLastName;
		}
		
		public function getCustomerId()
		{
			return $this->CustomerId;
		}
		
		public function setCustomerId($CustomerId)
		{
			$this->CustomerId = $CustomerId;
		}
		
		public function getCustFirstName()
		{
			return $this->CustFirstName;
		}
		
		public function setCustFirstName($CustFirstName)
		{
			$this->CustFirstName = $CustFirstName;
		}
		
		public function getCustLastName()
		{
			return $this->CustLastName;
		}
		
		public function setCustLastName($CustLastName)
		{
			$this->CustLastName = $CustLastName;
		}
	}



?>