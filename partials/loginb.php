<?php

	/*session_start();
	include_once("config/config.php");

?>

<h2> Log in! </h2>
<form id="userLoginForm" method="POST">
	<table width="100%">
		<tr>
			<td width="15%">Username:</td>
			<td>
				<input type="text" value="testtest" placeholder="Enter Username" name="username" id="login_username">
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" value="testtest" placeholder="Enter Password" name="pass1" id="login_pass1">
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<input type="button" id="userLogin_btn" value="Login!">

				<input type="hidden" id="dataSource" name="dataSource" value="userLogin"/>
			</td>
		</tr>
	</table>
</form>