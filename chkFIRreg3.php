<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$city =$_POST['city'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
/*$idproofname1 = $_POST['idproof'];
$idproofno1= $_POST['idproofno'];*/

    $insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."','".$contactno."',
											  '".$emailid."','".$_SESSION['username']."',
											  '".$city."','".$pincode."' )";
	//$insertQuery1 = "insert into fir_details (id_proof,id_proof_no) values ('".$idproofname1."','".$idproofno1."');    //$victim_id = mysql_insert_id();
    //$_SESSION['victim_id'] = $victim_id;
	$msg = base64_encode("Your FIR Registered Successfully");
	//echo "$insertfirQuery";
	
	if(mysql_query($insertQuery))
	{   
		$getidQuery = "select *from mstr_profile order by id desc limit 1";
	    $rsgetid = mysql_query($getidQuery);
	    while($rowgetid = mysql_fetch_array($rsgetid))
	    {
	      $victim_id = $rowgetid['id'];     //mysql_insert_id("id")get last inserted value;  
	      $_SESSION['victim_id'] = $victim_id;    
	      $insertfirQuery = "insert into fir_details (date,time,description,crime_id,id_proof,
		                                              id_proof_no,crimephoto1,crimephoto2,
													  crimelocation,reg_id,claim_id,victim_id,area_id,dt_time,last_datetime,status) 
	                                       values ('".$_SESSION['date']."','".$_SESSION['time2']."',
										           '".$_SESSION['crimedesc']."',
												   '".$_SESSION['crimetype']."',
												   '".$_SESSION['idproof']."',
												   '".$_SESSION['idproofno']."',
												   '".$_SESSION['crimephoto1']."',
												   '".$_SESSION['crimephoto2']."',
												   '".$_SESSION['crimelocation']."',
												   '".$_SESSION['reg_id']."',
												   '".$_SESSION['claim_id']."',
												   '".$_SESSION['victim_id']."',
												   '".$_SESSION['area_id']."',now(),now() + 1,0)";					   
         }
		//echo 	$insertfirQuery;
		if(mysql_query($insertfirQuery))
		{
		    header("location:home.php?msg=$msg");	  
	    }
	 }	
	else
	{
		//echo "$insertfirQuery";
		header("location:FIRreg3.php?msg=FIR not registered");
	}	
?>