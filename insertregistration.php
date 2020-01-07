<?
include("config.php");
$firstname = $_POST['txtFirstName'];
$middlename = $_POST['txtMiddletName'];
$lastname = $_POST['txtLasttName'];
$gender = $_POST['Gender'];
$address =$_POST['txtadress'];
$contactno = $_POST['txtContactNo'];
$EmailID = $_POST['txtEmailID'];
$profilephoto = $_POST['txtProfilePhoto'];

$insertQuery = "insert into mstr_profile values('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$address."','".$contactno."','".$EmailID."','".$profilephoto ."'  )";


$msg = base64_encode("Registered Successfully");

if(mysql_query($insertQuery))
{
	
	header("location:home.php?msg=$msg");
}
else
{
	header("location:profile.php?msg=Not Registered");
}
?>