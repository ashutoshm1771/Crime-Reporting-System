<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
include("sidebar.php");

$selectQuery = "select *from mstr_area ma,mstr_city  mc where ma.city_id=mc.city_id ";
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

 
      <h2 class="componentheading"><em>View Area Details: </em></h2>
      <p><a href="area.php" class="clear1 style7"><img src="images/addButton.png" /><span class="style15"> Add Area </span></a>  
        <?php base64_decode($_GET['msg'])?>
        </strong>      </p>
      <p>&nbsp;</p>
      <table width="76%" border="0" bgcolor="#FFFFFF">
	<tr>
		<td colspan="7" height="49" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/><span class="highlight"> View Area </span></td>
	</tr>
	<tr>
		<td height="5" colspan="7"></td>
	</tr>
	<tr >
	  <td width="3%">&nbsp;</td>
      <td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="28%" class="style4 tableHeading style2">&nbsp;Area Name</td>      
      <td width="32%" class="style4 tableHeading style2">City Name </td>
      <td width="11%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="14%" align="center" class="style4 tableHeading style2">Delete</td>
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
      <td align="left" >&nbsp;&nbsp;<?php echo $record["area_name"];?></td>      
      <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></td>
      <td align="center" ><a href="editarea.php?areaname=<?php echo $record["area_name"];?>">
	  <img title="Edit area" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletearea.php?areaname=<?php echo $record["area_name"];?>">
	  <img title="Delete area Details" src="images/delete.png" /></a></td>
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
      </div>
       </div>
	</div>
	</div>
	</div>
      <?php include("footer.php");?>
      </div>
</div>
</p>
