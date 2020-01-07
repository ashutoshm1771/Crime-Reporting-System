<?php
//session_start();
include("config.php");
$alertcityname = $_POST['city'];
$alerareaname = $_POST['area'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];


											  
	 $msg = base64_encode("Registered Successfully");

	
	mysql_query($insertQuery) or die("error in insert record");
	
	if(mysql_query($insertQuery))
	{
		  header("location:home.php?msg=$msg");	  
	 }
	else
	 {
		header("location:crimealert.php?msg=Not Registered");
	 }
 }
 else
 {
   echo "Error:Password missmatch";
  }
?>