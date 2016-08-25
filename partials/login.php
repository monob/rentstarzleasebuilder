<?php

	session_start();
	include_once("config/config.php");

?>
<title> Log in </title>
<link rel="stylesheet" href="css/normalize.css"/>
<link rel="stylesheet" href="css/mystyle.css" />
 
	
	
	<meta charset="utf-8" />
	<title>log in</title>
	
	

<!--[if lt IE 8]>
	<style>
		legend {
			display: block;
			padding: 0;
			padding-top: 30px;
			font-weight: bold;
			font-size: 1.25em;
			color: #FFD98D;
			margin: 0 auto;
		}
	</style>
<![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>


<form id="myform" class="group" action="#" method="POST">
	<fieldset id="login" title="Login Info">
		<legend>Login Info</legend>
		<ol>
			<li>
				<label for="myusername">User Name *</label>
				<input type="text" name="user_name" id="user_name" title="Please enter your username." autofocus placeholder="username" required />
			</li>
			
			<li>
				<label for="mypassword">Password</label>
				<input type="password" name="mypassword" id="login_pass1" />
			</li>
		
           <li>
				<input type="button" id="userLogin_btn" value="Login!">

				<input type="hidden" id="dataSource" name="dataSource" value="userLogin"/>
			</li>
		

		</ol>

		<?php
			/*	if(isset($_SESSION['userID'])){
					echo "logged in";
				}else{
					echo "not logged in";
				}
		*/?>  
          
			
	</fieldset>
 </form>
</body>
</html>