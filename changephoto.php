<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>

<body>

<form id="" name="" method="post"  enctype="multipart/form-data" action="uploadphoto.php">
  <label></label>
  <p></p>
  <p></p>
  
<table width="593" height="102">
  <tr>
    <td width="144" height="39" align="right"><span class="style1">Upload</span>:</td>
    <td width="239">
	<input name="photo"  id="photo" type="file" />
	<script type="text/javascript">
				var f1 = new LiveValidation('photo');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				//f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				//f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new city name"});

			</script>	</td>
    <td width="188">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="upload" type="submit" id="upload" value="Upload" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
