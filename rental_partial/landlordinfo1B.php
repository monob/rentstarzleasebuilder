
<?php

	session_start();
	include_once("config/config.php");

	$landlordName 		= "Al";
	$tenantName 		= "Michael";
	$propertyAddress 	= "25 Chapel Apt. 430";
	$propertyCity 		= "New York";

?>




<input type="text" id="landlordName">
<input type="button" id="1b"/>


<p style="color:white;">This Rental Agreement or Residential Lease shall evidence the complete terms and conditions under which the parties whose signatures appear below have agreed. Landlord/,label Name *
				 shall be referred to as "OWNER" and Tenant(s)/Lessee, <?php echo $tenantName; ?>, shall be referred to as "RESIDENT." As consideration for this agreement, OWNER agrees to rent/lease to RESIDENT and RESIDENT agrees to rent/lease from OWNER for use solely as a private residence, the premises located at <?php echo $propertyName; ?> in the city of <?php echo $propertyCity; ?>
</p>
