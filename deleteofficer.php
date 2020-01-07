<?php
include("config.php");
$username = $_GET['username'];
$deleteUserQuery = "delete from mstr_officer where username = '".$username."' ";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewofficer.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewofficer.php?msg=$msg");
}
?>