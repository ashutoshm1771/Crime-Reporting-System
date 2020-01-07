<?php 
ob_start();
include("header.php");
include("config.php");
//include("sidebar.php");
$areaname = $_GET['areaname'];
$selectQuery = "select *from mstr_area where area_name = '".$areaname."' ";


$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
	//header("location:viewcity.php");
?>

<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
<div id="content">
  <div class="clear">
        <!--right-->
        <!--left-->
<div id="left">
    <div class="left-indent"><div class="clear">
    <div class="wrapper-box module_menu"><div class="border-top"><div class="border-bottom">
    <div class="border-left"><div class="border-right"><div class="corner-top-left">
    <div class="corner-top-right"><div class="corner-bottom-left">
    <div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
    <div class="box-title">
    <div class="border1-top">
    <div class="border1-bottom">
    <div class="border1-left">
    <div class="border1-right">
    <div class="corner1-top-left">
    <div class="corner1-top-right">
    <div class="corner1-bottom-left">
    <div class="corner1-bottom-right clear">
                                                                        
	<h3>Main menu</h3>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
                                                                        
    <div class="main-box">
    <div class="clear">
	<ul class="menu">
	                 <li id="current" class="active item1">	<a href=""><span>Home</span></a></li>
	                 <li class="item2"><a href=""><span>Get Crime Alert </span></a></li>
					 <li class="item59"><a href="">Register Your FIR </a></li>
					 <li class="item60"><a href="">Police Station </a></li>
					 <li class="item61"><a href=""><span>Contact Us</span></a></li>
					 <li class="item62"><a href=""><span>Search</span></a></li>
					 <li class="item63"><a href=""><span>What's New? </span></a></li>
	</ul>
	</div>
    </div>
    </div>
    </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
    </div>

	<div class="wrapper-box module s1">
	<div class="border-top">
	<div class="border-bottom">
	<div class="border-left">
	<div class="border-right">
	<div class="corner-top-left">
	<div class="corner-top-right">
	<div class="corner-bottom-left">
	<div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
	<div class="box-title">
    <div class="border1-top">
	<div class="border1-bottom">
	<div class="border1-left">
	<div class="border1-right">
	<div class="corner1-top-left">
	<div class="corner1-top-right">
	<div class="corner1-bottom-left">
	<div class="corner1-bottom-right clear">
	
	<h3>Popular</h3>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="main-box">
	<div class="clear">
	  <ul class="mostread s1">
	    <li class="mostread s1"><a href="" class="mostread s1">Emergancy Contact Numbers</a></li>
	    <li class="mostread s1"><a href="" class="mostread s1">FIR Registration Guidelines</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1"> Where should I report a crime? </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What is Section 144 ?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">For Recruitement </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in faulty Investigation?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in Police Harassement?</a></li>
		</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	
<body>
<div id="container" class="wrapper-container">
       <div class="corner-top-left">
       <div class="corner-top-right">
       <div class="corner-bottom-left">
       <div class="corner-bottom-right">
	   
<h1><span class="componentheading"><em>Edit Area </em>:</span></h1>
<p>&nbsp;</p>

<form name="editarea" action="updatearea.php" method="post">
<table width="67%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="6" height="36" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> <span class="highlight">Edit Area Name </span></td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="35">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old Area Name</span>:</td>
	<td width="23%" ><input  readonly="yes" type="text" id="area" name="area" value="<?php echo $record["area_name"]; ?>"/>		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('area');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid area name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="34">&nbsp;</td>
  	<td width="27%" class="formField">New Area Name: </td>
	<td width="23%" >
	<input type="text" id="newareaname" name="newareaname" />
	<script type="text/javascript">
				var f1 = new LiveValidation('newareaname');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new area name"});

			</script>	</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="207" colspan="4"></td>
</tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    </div>  
    </div>
    </div>
    </div>
    </div>
  </p>
  <p>&nbsp;</p>
</form>	

	<?php include("footer.php"); ?>
	 </div>
</div>
</p>  
</body>
</html>