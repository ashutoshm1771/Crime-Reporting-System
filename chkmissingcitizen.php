<?php 
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];

$date = $_POST['date'];
$m = substr($date,0,2);
$d = substr($date,3,2);
$y = substr($date,6,4);
$date =  $y."-".$m."-".$d;

$time2 = $_POST['time2'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$areaname = $_POST['area'];
$city =$_POST['city'];

$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$missingdesc=$_POST['missingdesc'];
$specialclue=$_POST['specialclue'];
$photo =  "upload/".$_FILES['photo']['name'];


if(move_uploaded_file($_FILES['photo']['tmp_name'],$photo))  
 {
    $insertQuery = "insert into mstr_missingcitizen(first_name,middle_name,last_name,date,time,gender,address,
	                                         contact_no,description,special_clue,email_id,username,city_id,area_id,photo) 
		                              values ('".$firstname."','".$middlename."','".$lastname."','".$date."',
									          '".$time2."','".$gender."','".$address."','".$contactno."','".$missingdesc."',
											  '".$specialclue."','".$emailid."','".$_SESSION['username']."','".$city."',
											  '".$areaname."','".$photo."')";
	  $msg = base64_encode("Registered Successfully");
	//echo "$insertQuery";
	  if(mysql_query($insertQuery))
	  {
		header("location:home.php?msg=$msg");	  
	   }
	  else
	   {
		header("location:missing_citizen.php?msg=Not Registered");
	    }
  }
else
{
echo "Error in uploading photo";
}
?>