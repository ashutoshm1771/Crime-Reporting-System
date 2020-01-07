<?php
include("config.php");
$cityname = $_GET['cityname'];
$deleteUserQuery = "delete from mstr_city where city_name = '".$cityname."'";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewcity.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewcity.php?msg=$msg");
}
?>