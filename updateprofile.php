<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];

$bdate = $_POST['bdate'];
$m = substr($bdate,0,2);
$d = substr($bdate,3,2);
$y = substr($bdate,6,4);
$bdate =  $y."-".$m."-".$d;

$address =$_POST['address'];
$contactno = $_POST['contactno'];
$pincode = $_POST['pincode'];
$emailid= $_POST['emailid'];
$profilephoto =  "upload/".$_FILES['photo']['name'];
$city =$_POST['city'];
//$username=$_POST['username'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

			  
                    
   
$updateQuery = "update mstr_profile set where first_name = '".$firstname."', middle_name = '".$middlename."', last_name = '".$lastname."', gender = '".$gender."', Dob = '".$bdate."', address = '".$address."', contact_no = '".$contactno."', emailid = '".$emailid."', profile_photo = '".$profilephoto."', username = '".$username."', city_id = '".$city."', pincode = '".$pincode."'";
										
									              
											      											  
  if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewprofile.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updateprofile.php?msg=$msg");
}
?>