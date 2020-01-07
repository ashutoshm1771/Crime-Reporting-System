<?php
include("config.php");
$cityname = $_POST['cityname'];

$updateQuery = "update mstr_city set city_name = '".$cityname."' where city_name='".$cityname."' ";

if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewcity.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:editcity.php?msg=$msg");
}
?>
