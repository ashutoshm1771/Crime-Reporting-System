<?php
include("config.php");
$newareaname = $_POST['newareaname'];

$updateQuery = "update mstr_area set area_name = '".$newareaname."' where area_name='".$areaname."' ";

if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewarea.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:editarea.php?msg=$msg");
}
?>
