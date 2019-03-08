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

// Class agent - used for fill the select combo to create new customer
class agent
{
	private $agentId;
	private $agtFirstName;
	private $agtMiddleInitial;
	private $agtLastName;
	private $agtBusPhone; 
	private $agtEmail;
	private $agtPosition;
	private $agencyId;
	
	public function __construct($agentId,$agtFirstName,$agtMiddleInitial,$agtLastName,$agtBusPhone,$agtEmail,$agtPosition,$agencyId)
	{
		$this->agentId = $agentId;
		$this->agtFirstName = $agtFirstName;
		$this->agtMiddleInitial = $agtMiddleInitial; 
		$this->agtLastName = $agtLastName;
		$this->agtBusPhone = $agtBusPhone;
		$this->agtEmail = $agtEmail;
		$this->agtPosition = $agtPosition;
		$this->agencyId = $agencyId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
	}
	
	public function getAgtFirstName()
	{
		return $this->agtFirstName;
	}
	
	public function setAgtFirstName($agtFirstName)
	{
		$this->agtFirstName = $agtFirstName;
	}
	
	public function getAgtMiddleInitial()
	{
		return $this->agtMiddleInitial;
	}
	
	public function setAgtMiddleInitial($agtMiddleInitial)
	{
		$this->agtMiddleInitial = $agtMiddleInitial;
	}
	
	public function getAgtLastName()
	{
		return $this->agtLastName;
	}
	
	public function setAgtLastName($agtLastName)
	{
		$this->agtLastName = $agtLastName;
	}
	
	public function getAgtBusPhone()
	{
		return $this->agtBusPhone;
	}
	
	public function setAgtBusPhone($agtBusPhone)
	{
		$this->agtBusPhone = $agtBusPhone;
	}
	
	public function getAgtEmail()
	{
		return $this->agtEmail;
	}
	
	public function setAgtEmail($agtEmail)
	{
		$this->agtEmail = $agtEmail;
	}
	
	public function getAgtPosition()
	{
		return $this->agtPosition;
	}
	
	public function setAgtPosition($agtPosition)
	{
		$this->agtPosition = $agtPosition;
	}
	
	public function getAgencyId()
	{
		return $this->agencyId;
	}
	
	public function setAgencyId($agencyId)
	{
		$this->agencyId = $agencyId;
	}
	
}


?>