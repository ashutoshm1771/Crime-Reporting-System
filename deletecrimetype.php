<?php
include("config.php");

$crimetype = $_GET['crimetype'];
$deleteUserQuery = "delete from mstr_crimetype where crime_type = '".$crimetype."'";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewcrimetype.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewcrimetype.php?msg=$msg");
}
?>