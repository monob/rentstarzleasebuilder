<?php
	
	
	 //include_once('obj/dbcon.php');

	include_once("config/config.php");

	 
	// //echo ":)";
	// // //Array for results data that is sent back to 
	// // //front end
	   $result 	= array();


	// // //Switch Routes the request depending on the 
	// // //value of dataSource
	switch( $dataSource ){
		case "createLease":
			$result['status'] = "success";
			$result['data'] = $leaseMgr->createLease();
			break;
		case "1b":
			$landlord = $request["landlordName"];
			$result['status'] = $leaseMgr->save1b( $landlord );
			break;
		case "userRegistration":
			$result['test'] = $request['username'];
	 		$result['status'] 	 = $userMgr->registerUser( $request['username'], $request['password']);
			break;
		case "userLogin":
			$result['status'] 	 = $userMgr->loginUser( $request['username'], $request['password']);
			break;
		case "logout":
			$result['status'] 	 = $userMgr->logoutUser();
			break;
		case "userProfile":
			$result['status'] 	= $userMgr->setUserMetaData( "u_name", $request['u_name']);
			break;
		case "addProperty":
			$result['status'] 	= $propertyMgr->addProperty($request['propertyType'], $request['unit'], $request['location'], $request['rentalIncome'] );
			break;
		case "getLeaseData":

			break;
	}

	// // //This sends the result back to JS .done() method
    echo json_encode( $result );

?>