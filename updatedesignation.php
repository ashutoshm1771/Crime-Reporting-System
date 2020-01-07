<?php
include("config.php");
$desiname = $_POST['designation'];
$newdesiname = $_POST['newdesignation'];

$updateQuery = "update mstr_designation set desi_name = '".$newdesiname."' where desi_name='".$desiname."' ";

if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewdesignation.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:editdesignation.php?msg=$msg");
}
?>
