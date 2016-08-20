<?php
/**
 * Lease Manager Handles Lease data
 */

class LeaseManager{
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

	public function createLease(){
		$leaseID = $this->dbCon->insertRecord( "leases",
									array("leaseName"),
									array(0)
									);
		return $leaseID;
	}

	public function save1b( $landlordName ){

		$this->dbCon->insertRecord( "leaseData",
									array("landlordName"),
									array($landlordName)
									);
		return "success";
	}

	public function get1b( $leaseID ){
		$rec = $this->dbCon->pullRecordWithParameters("leaseData", array("leaseID"=>$leaseID));

		return $rec;
	}



}
?>