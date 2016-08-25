<?php
/**
 * Lease Manager Handles Lease data
 */

class propertyManager{
	 private $dbCon 				= false;
	 private $db 					= false;
	 private $sysMgr 				= false;
	 private $data 					= false;
	 public $sessionID 				= "";
	 private $sessionTimeOut 		= 5400; // 1.5 hrs
	 private $userRecord			= array();
	 private $userID 				= 0;


	public function __construct(){
		$this->dbCon = new dbCon();
	}

	public function addProperty( $propertyType, $unit, $location, $rentalIncome){
		$rec = $this->dbCon->insertRecord( "propertyData",
									array("propertyType, unit,location, rentalincome"),
									array($propertyType, $unit, $location, $rentalIncome)
									);
		return $rec;
	}

	public function removeProperty( $propertyID ){

	}

	public function updateProperty($propertyID){

	}

	public function getProperties(){
		
	}

	// public function ( $ ){

	// 	$this->dbCon->insertRecord( "propertyData",
	// 								array("propertytype, unit, rental income, location"),
	// 								array($propertytypeunitrentalincomelocation)
	// 								);
	// 	return "success";
	// }

	// public function ( $ ){
	// 	$rec = $this->dbCon->pullRecordWithParameters("property", array(""=>$));

	// 	return $rec;
	// }
}



}
?>