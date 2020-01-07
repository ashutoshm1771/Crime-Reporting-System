<?php
include("sessionHandler.php");
include("config.php");

$fromOfficer = $_POST['officer'];
$msgDescription = $_POST['msg'];


$insertFIRforward = "insert into fir_forward (username,description,dt_time,`from`)
                     values ('".$fromOfficer."','".$msgDescription."',now(),
					 '".$_SESSION['username']."')";
					 
$msg = base64_encode("Registered Successfully");

//echo 	$insertFIRforward;	


$updateQuery = "update fir_forward set status = 1";

		 
 if(mysql_query($insertFIRforward) && mysql_query($updateQuery))
   {
 	header("location:home.php?msg=$msg");
    }
else
{
	header("location:PIforward.php?msg=Sorry!...Fill The Detail..");
}
?>