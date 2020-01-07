<?php 
session_start();
include("config.php");

$changephoto =  "upload/".$_FILES['photo']['name'];
//$changephoto_path = $_GET['changephoto_path'];

if(move_uploaded_file($_FILES['photo']['tmp_name'],$changephoto))
   {
     $updatephoto = "update mstr_profile set profile_photo = '".$changephoto."' where 
                  username = '".$_SESSION['username']."' ";

		if(mysql_query($updatephoto))
		{	
			$msg = base64_encode("Photo Uploaded Successfully");
			header("location:viewprofile1.php?msg=$msg");
		}
		else
		{
			$msg = base64_encode("Sorry Photo Not Uploaded");
			header("location:changephoto.php?msg=$msg");
		}
		
	}

else
{
  echo "Error in uploading photo";
}
?>
