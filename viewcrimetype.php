<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
include("sidebar.php");

$selectQuery = "select *from mstr_crimetype ";
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
.style8 {font-size: 18px}
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

 
      <h2 class="componentheading">View Types of Crime Details </h2>
      <p><a href="crimetype.php" class="clear1 style7"> <img src="images/addButton.png" /><span class="style8">Add Crime Type</span> </a> 
          <?php base64_decode($_GET['msg'])?>
        </strong></p>
      <table width="79%" border="0" bgcolor="#FFFFFF">
	<tr>
		<td colspan="7" height="31" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/><span class="highlight"> View Different Types of Crime </span></td>
	</tr>
	<tr>
		<td height="5" colspan="7"></td>
	</tr>
	<tr >
	  <td width="5%" height="28">&nbsp;</td>
      <td width="10%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="28%" class="style4 tableHeading style2">&nbsp;Crime Type Name </td>      
      <td width="34%" class="style4 tableHeading style2">Description</td>
      <td width="11%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="12%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="7" height="5"></td>
</tr>
<tr>
	<td colspan="7" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="7" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysql_fetch_array($resultSet))
	{
	?>
    <tr >
      <td >&nbsp;</td>
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" ></a>&nbsp;&nbsp;<?php echo $record["crime_type"];?></td>      
      <td align="left" >&nbsp;<?php echo $record["description"] ;?></td>
      <td align="center" ><a href="editcrimetype.php?crimetype=<?php echo $record["crime_type"];?>">
	  <img title="Edit crime type" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletecrimetype.php?crimetype=<?php echo $record["crime_type"];?>">
	  <img title="Delete crime type Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    <tr  >
      <td colspan="9" >&nbsp;</td>
    </tr>
  </table>
   <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
