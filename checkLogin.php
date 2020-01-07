<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];

$selectLoginQuery = "select * from mstr_login where username = '".$username."' and password = '".$password."' ";

$msg = base64_encode("Registered Successfully");  
$rs = mysql_query($selectLoginQuery) or die(mysql_error());
$c=mysql_num_rows($rs);
$row = mysql_fetch_array($rs);
if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row[type];	
	header("location:home.php?msg=$msg");
}
else
{
	header("location:index.php?msg=Sorry!...Invalid User");
}
?>