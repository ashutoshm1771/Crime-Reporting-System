<?php
include("config.php");

$deleteUserQuery = "delete from mstr_area where area_name = '".$areaname."' ";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewarea.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewarea.php?msg=$msg");
}
?>