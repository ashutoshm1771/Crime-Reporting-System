<?php
include("config.php");
$pstationname = $_GET['psname'];
$deleteUserQuery = "delete from mstr_policestation where policestation_name = '".$pstationname."' ";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewpolice.php?msg=$msg");
}
?>