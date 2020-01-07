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
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$crimelocation=$_POST['crimelocation'];
$idproof = $_POST['idproof'];
$crimetype=$_POST['crimetype'];
$idproofno= $_POST['idproofno'];
$crimedesc=$_POST['crimedesc'];
$crimephoto1 =  "upload/".$_FILES['photo1']['name'];
$crimephoto2 =  "upload/".$_FILES['photo2']['name'];


if((move_uploaded_file($_FILES['photo1']['tmp_name'],$crimephoto1)) &&
   (move_uploaded_file($_FILES['photo2']['tmp_name'],$crimephoto2)))
 {
    
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."',
											  '".$contactno."','".$emailid."',
											  '".$_SESSION['username']."','".$city."',
											  '".$pincode."' )";
	  $msg = base64_encode("Registered Successfully");
	//echo "$insertQuery";
	  if(mysql_query($insertQuery))
	  {
		$getidQuery = "select *from mstr_profile order by id desc limit 1";
	    $rsgetid = mysql_query($getidQuery);
		  while($rowgetid = mysql_fetch_array($rsgetid))
		  {
		   $reg_id = $rowgetid['id'];          
		   $_SESSION['reg_id']=$reg_id;	   
		   $_SESSION['date']=$date;
		   $_SESSION['time2']=$time2;
		   $_SESSION['area_id']=$areaname;
		   $_SESSION['crimedesc']=$crimedesc;
		   $_SESSION['crimetype']=$crimetype;
		   $_SESSION['idproof']=$idproof;
		   $_SESSION['idproofno']=$idproofno;
		   $_SESSION['crimephoto1']=$crimephoto1;
		   $_SESSION['crimephoto2']=$crimephoto2;
		   $_SESSION['crimelocation']=$crimelocation;
		   }
	
	  header("location:FIRreg2.php?msg=$msg");	  
	   }
	  else
	   {
		header("location:FIRreg1.php?msg=Not Registered");
	    }
      /*$_SESSION['reg_id'] = $reg_id;*/
	 // $reg_id = mysql_insert_id('id');
  }
else
{
echo "Error in uploading photo";
}
?>