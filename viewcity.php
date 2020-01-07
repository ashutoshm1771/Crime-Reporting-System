<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
include("sidebar.php");

$selectQuery = "select *from mstr_city ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
//echo $selectQuery;
?>
<style type="text/css">
<!--
@import url("css/template.css");
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 14px}
.style7 {
	font-size: 12;
	font-weight: bold;
}
-->
</style>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<style type="text/css">
<!--
.style15 {font-size: 18px}
-->
</style>
<div id="content">
  <div class="clear">
        <!--right-->
        <!--left-->

	<div id="container" class="wrapper-container">
       <div class="corner-top-left">
       <div class="corner-top-right">
       <div class="corner-bottom-left">
       <div class="corner-bottom-right">

 
      <h2 class="componentheading"><em>View City Details: </em></h2>
      <p><a href="city.php" class="clear1 style7"><img src="images/addButton.png" /><span class="style15"> Add city</span></a>  
        <?php base64_decode($_GET['msg'])?>
        </strong>      </p>
      <p>&nbsp;</p>
      <table width="76%" border="0" bgcolor="#FFFFFF">
	<tr>
		<td colspan="6" height="49" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/><span class="highlight"> View City </span></td>
	</tr>
	<tr>
		<td height="5" colspan="6"></td>
	</tr>
	<tr >
	  <td width="5%">&nbsp;</td>
      <td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="49%" class="style4 tableHeading style2">&nbsp;City Name</td>      
      <td width="17%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="17%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="6" height="5"></td>
</tr>
<tr>
	<td colspan="6" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="6" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr >
      <td >&nbsp;</td>
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></a></td>      
      <td align="center" ><a href="editcity.php?cityname=<?php echo $record["city_name"];?>">
	  <img title="Edit City" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletecity.php?cityname=<?php echo $record["city_name"];?>">
	  <img title="Delete City Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    <tr  >
      <td colspan="8" >&nbsp;</td>
    </tr>
  </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </div>
       </div>
	</div>
	</div>
	</div>
      <?php include("footer.php");?>
      </div>
</div>
</p>
