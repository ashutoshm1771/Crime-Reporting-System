<?php
include("config.php");
$crimetype = $_POST['crimetype'];
$crimedesc = $_POST['crimedesc'];
$insertQuery = "insert into mstr_crimetype (crime_type,description) values ('".$crimetype."','".$crimedesc."')";

$msg = base64_encode("Inserted Successfully");
	
	if(mysql_query($insertQuery)) 
      {	  
		header("location:viewcrimetype.php?msg=$msg");	  
	   }
	else
	 {
		header("location:crimetype.php?msg=Not Inserted");
	  }
   
?>