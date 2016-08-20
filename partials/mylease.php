<?php

	session_start();
	include_once("config/config.php");

?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
		<body>
<div class="jumbotron">
  <h2>Lease Builder</h1>
  
  
</div>

	<div>
	<?php
       	 // echo "Hello World!";
		   if( isset( $_SESSION['sessionID'] ) ){?>

		<nav class="navbar navbar-inverse"><div class="  btn-group" role="group" aria-label="...">
          
          <button type="button" id="createleasebutton"> <a href="createlease.html">create lease </button>
         
         <button type="button" id="editbutton">edit</button>
         
         <button type="button" id="myleasebutton">my lease</button>
         
         <button type="button" id="mytenantbutton">my tenants</button>
         
         <button type="button" id="mybuilding">my buildings</button>
         
         <button type="button" id="totalincombutton" >total income</button>
    </div>
  
       </nav>
       <?php
		   // echo "<a id='logoutLink'>log out</a> | Welcome you are logged in";
		    
             include("partials/login.php");
		   // include("partials/profile.php");

		    /*include("rental_partial/landlordinfo1B.php");*/
		   }else{ 
		   
		  

		    include("partials/register.php");

		   

		    //include("partial/login.php");

		   

		   }
       ?>
		</div>
           


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>