<?php
include("config.php");

$areaname = $_POST['area'];
$city_id = $_GET['city'];
$insertQuery = "insert into mstr_area(area_name) values ('".$areaname."') where city_id = '".$city_id."' ";

//echo $insertQuery;
$msg = base64_encode("Registered Successfully");
	
	if(mysql_query($insertQuery)) 
 {
	header("location:viewarea.php?msg=$msg");	  
}
	else
	 {
		header("location:area.php?msg=Not Registered");
	  }

?>