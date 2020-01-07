<?php
//session_start();
include("config.php");
$pstationname = $_POST['psname'];
$areaname = $_POST['area'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];
$sdate = $_POST['sdate'];
$contactperson =$_POST['contactperson'];
/*$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];


	$insertloginQuery = "insert into mstr_login(username,password) 
	                                   values ('".$username."','".$password."')";*/	
	$insertpsQuery = "insert into mstr_policestation (area_id,address,contact_no,
	                                                  Email_id,contact_person,starting_date,
													  policestation_name,city_id)
	                                   values('".$areaname."','".$address."','".$contactno."',
									   '".$emailid."','".$contactperson."','".$sdate."',
									   '".$pstationname."','".$city."')";
   
	
	$msg = base64_encode("Registered Successfully");
	//echo "$insertpsQuery";
	if(mysql_query($insertpsQuery))
	{
		  header("location:home.php?msg=$msg");	  
	 }
	else
	 {
		header("location:officerdetail.php?msg=Not Registered");
	 }
?>