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

if($password == $rpassword)
{
 if(move_uploaded_file($_FILES['photo']['tmp_name'],$profilephoto))
   {
   
   										  
	$insertloginQuery = "insert into mstr_login(username,password) 
	                                   values ('".$username."','".$password."')";
   
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,Dob,address,
	                                       contact_no,emailid,profile_photo,username,city_id,pincode)
											values('".$firstname."','".$middlename."','".$lastname."',
									               '".$gender."','".$bdate."','".$address."',
											      '".$contactno."','".$emailid."','".$profilephoto."',
									               '".$username."','".$city."','".$pincode."' )";
											  
    //echo $insertQuery;
	//echo $insertloginQuery;
	$msg = base64_encode("Updated Successfully");
	
	if((mysql_query($insertloginQuery)) && (mysql_query($insertQuery)))
	  {
	    $_SESSION['username']=$username;
		header("location:home.php?msg=$msg");	  
	   }
	else
	 {
		header("location:viewprofile1.php?msg=Not Updated");
	  }
   }
  else
  {
    echo "Error in uploading photo";
   }
 }  
else
 {
   echo "Error:Password missmatch";
  }
?>