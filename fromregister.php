<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link type="text/css" href="css/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.datepicker.js"></script>
	
	<link type="text/css" href="" rel="stylesheet" />
<script type="text/javascript">
	$(function() {
		$("#d").datepicker({showOn: 'button', buttonImage: 'images/datepicker.gif', buttonImageOnly: true});
	});
	$(function() {
		$("#p11").progressbar({
			value: 37
		});
	});
	</script>


</head>
<? include("haheader.php")?>;
<body>
<script type="text/javascript">
function validation()
{
   var name=document.fromregister.txtUserName.value;
   var pwd=document.fromregister.pwd1.value;
   var pwd11=document.fromregister.pwd2.value;

   if(name=="")
   {
     
	  document.getElementById("myMessage").innerHTML="Please enter user name";
	  document.fromregister.pwd.value=="";
	  document.getElementById("myMessage").innerHtml="Please enter password";
	  return false;
	}
	
	if(pwd=="")
   {
     
	  document.getElementById("myMessage1").innerHTML="Please enter password";
	  return false;
	}
	
	if(pwd11=="")
   {
     
	  document.getElementById("myMessage2").innerHTML="Please retype password";
	  return false;
	}
}
</script>
	

<form name="fromregister" action="detail.php" method="GET">

<h1 align="center">REGISTRATION FORM</h1>
<font  face="Verdana, Arial, Helvetica, sans-serif" size="4"> Please fill up the following form for registration:</font>
<br />
  
  
  <table border="0"> 
<tr>
     <td>Username: </td>
     <td><input type="text" name="txtUserName"  value="superadmin" onblur="return validation()"  title="Please enter your name"/>
	 <p id="myMessage"> </p>
	 </td>
	 
<tr/>
      
<tr>
     <td>Password:</td>
     <td><input type= "password" name="pwd1" value="superadmin"  onblur="return validation()" />
	 <p id="myMessage1"> </p></td>
<tr/>


<tr>
      <td>Confirm Password:</td> 
	  <td><input type="password" name="pwd2"  value="superadmin" onblur="return validation()"/>
	  <p id="myMessage2"> </p></td> 
<tr/>


<tr>
      <td>E-Mail ID:</td>  
	  <td><input type="text" name="txtemailid" /></td> 
</tr>


<tr>
       <td>Address: </td> 
	   <td><textarea name="trAddr" ></textarea></td> 
</tr>

<tr>
       <td>Date of Birth: </td> 
	   <td><input type="text" name="d" id="d" /></td> 
	   
</tr>

<tr>
        <td>Gender : </td> 
		<td> Male <input type="radio" name="gender"  value="male" />
         Female <input type="radio" name="gender"  value="female"/>
		 </td> 
</tr>

<tr>
		 
      <td>State:</td> 
	  <td><select name="salStateName" >
        <option value="delhi"> Delhi</option>
        <option value="mumbai"> Mumbai</option>
        <option value="chennai"> Chennai</option>
        <option value="panjab"> Panjab</option>
        <option value="kolkatta"> Kolkatta</option>
      </select></td> 
 </tr>
 
 <tr>
        <td>Hobbies:</td>  
		<td>Cricket<input type="checkbox" name="chkHobbies" value="cricket"/>
          Chess<input type="checkbox" name="chkHobbies" value="chess" />
		  Reading<input type="checkbox" name="chkHobbies" value="reading" />
		 Movie<input type="checkbox" name="chkHobbies"  value="movie"/>
		 </td> 
</tr>		 
</table>
<br />
<br />

<input type="submit" onclick="return Validation()" value="Login" name="p11" id="p11"	 />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value=" Reset" />
	 
</form>		 
</body>
</html>
