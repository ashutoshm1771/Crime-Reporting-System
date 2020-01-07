<?php 
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];

$jdate = $_POST['jdate'];
$m = substr($jdate,0,2);
$d = substr($jdate,3,2);
$y = substr($jdate,6,4);
$jdate =  $y."-".$m."-".$d;

$ldate= $_POST['ldate'];
$m = substr($ldate,0,2);
$d = substr($ldate,3,2);
$y = substr($ldate,6,4);
$ldate =  $y."-".$m."-".$d;

$psname =$_POST['psname'];
$designation = $_POST['designation'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

$updateloginQuery = "update mstr_login set username = '".$username."', password = '".password."' where username = '".username."'";

$updateQuery = "update mstr_officer set username = '".$username."', Jdate = '".$jdate."',
Ldate = '".$ldate."',desi_id = '".$designation."',policestation_id = '".$psname."' where username = '".username."' ";

$updateQuery1 = "update mstr_profile set  first_name = '".$firstname."', middle_name = '".$middlename."', 
last_name = '".$lastname."', gender = '".$gender ."', contact_no = '".$contactno."', emailid = '".$emailid."', 
city_id = '".$city ."', pincode = '".$pincode."' username = '".username."' ";

    mysql_query($updateloginQuery) or die("Error in login entry values");
	mysql_query($updateQuery) or die("error in insert updation");

if(mysql_query($updateQuery1))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewofficer.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updateofficer.php?msg=$msg");
}
?>
