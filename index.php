<?php

	session_start();
	include_once("config/config.php");

?>
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="css/custom.css"/>
	    <link rel="stylesheet" href="css/mystyle.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8" />
	   <title> Lease builder </title>
        

	</head>
		<body>
<div class="jumbotron">
  <h2>Lease Builder</h1>
  
  
</div>

	<div>
	<?php
       	 // echo "Hello World!";
		   if( isset( $_SESSION['sessionID'] ) ){?>

		<nav class="navbar navbar-inverse"><div class="  btn-group" role="group" aria-label="...">
          
          <button type="button" id="createleasebutton""> create lease </button>
         
         <button type="button" id="editbutton">edit</button>
         
         <button type="button" id="myleasebutton">my lease</button>
         
         <button type="button" id="mytenantbutton">my tenants</button>
         
         <button type="button" id="myproperties">my Properties</button>
         
         <button type="button" id="totalincombutton" >total income</button>
    
        <button type ="button" id="logoutLink"> logged out </button>
    
      


    </div>
  
       </nav>
       <?php
		    //echo "<a id='logoutLink'>log out</a> | Welcome you are logged in";
		    
           //include("partials/login.php");
		// include("partials/profile.php");

		    /*include("rental_partial/landlordinfo1B.php");*/
		   }else{ 
		   
		  

		    include("partials/register.php");

		   

		  //include("partials/login.php");

		   

		   }
       ?>
		</div>
           


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>