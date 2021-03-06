<?php 
	/**
	 * Config.php includes source code from objects and other methods needed in the back end
	 * It also initializes objects and variables needed in the back end such as $postdata
	 */
	//Begin a session observer
	session_start();
	//Include Objects and other methods source code
	 include_once("utilities/utilities.php");
	 include_once("obj/dbcon.php");
	 include_once("obj/SystemManager.php");
	 include_once("obj/userManager.php");
	 include_once("obj/LeaseManager.php");
	 include_once("obj/propertyManager.php");
	 
	// //Capture ALL POST data and put into $POSTPARAMS array
	 if(!empty($_POST)){
	 	foreach ($_POST as $key => $value){
    		$POSTPARAMS[ $key ] = $value;      
     	} 
	}
	// //View all captured POST data
	//print_r($POSTPARAMS);
	// //Grab the data Array from JSON
	$request 		= $POSTPARAMS[ 'data' ];
	// //Grab the dataSource signal from JSON
    $dataSource		= $POSTPARAMS[ 'dataSource' ];
	// //Instantiate Back-end Objects
	$dbCon 			= new dbCon('localhost', 'root', 'root', 'rentstarzleasebuilder');  
	$sysMgr 		= new SystemManager();
	$userMgr 		= new UserManager();
	$leaseMgr 		= new LeaseManager();
	$propertyMgr 	= new propertyManager();
?>