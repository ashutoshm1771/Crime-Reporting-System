<?php
include("config.php");
$crimetype = $_POST['crimetype'];
$oldcrimedesc = $_POST['oldcrimedesc'];

$newcrimetype = $_POST['newcrimetype'];
$newcrimedesc = $_POST['newcrimedesc'];

$updateQuery = "update mstr_crimetype set crime_type = '".$newcrimetype."' and description = '".$newcrimedesc."' 
                  where crime_type = '".$crimetype."' and description = '".$oldcrimedesc."' ";

if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewcrimetype.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:editcrimetype.php?msg=$msg");
}
?>
