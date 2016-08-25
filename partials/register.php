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
	<fieldset id="login" title="register info">
		<legend>register</legend>
	<ol>
			<li>
				<label for="myname">First name *</label>
				<input type="text" name="Firstname" id="firstname" title="Please enter your username." autofocus placeholder="First name" required />
			</li>
			
			
          <li>
				<label for="myname">Last name *</label>
				<input type="text" name="Lastname" id="lastname" title="Please enter your lastname." autofocus placeholder="last name" required />
			</li>
			

           <li>
				<label for="myname">User name *</label>
				<input type="text" name="username" id="user_name" title="Please enter your username." autofocus placeholder="User name" required />
			</li>

           <li>
				<label for="myname">Email *</label>
				<input type="text" name="username" id="Email" title="Please enter email." autofocus placeholder="Email" required />
			</l>
			
         
           <li>
				<label for="password">Password</label>
				<input type="password" name="pass1" id="pass1" />
		    </li>
		
            <li>
				<label for="password">Password</label>
				<input type="password" name="pass2" id="pass2" placeholder="re-enter password" name="pass2"
				/>
		
        
             <li>
        	<input type="button" id="userReg_btn" value="Sign up!">
           </li>
	</ol>

		
	


	</fieldset>
 </form>
</body>
</html>