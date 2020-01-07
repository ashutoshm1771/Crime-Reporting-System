<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
include("sidebar.php");

$selectAllUserQuery = "select *from mstr_policestation mp,mstr_area a where a.area_id = mp.area_id";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>
<style type="text/css">
<!--
@import url("css/template.css");
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 14px}
.style5 {
	font-size: 18px;
	font-weight: bold;
}
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
 
      <h1><span class="componentheading"><em>View Details of Police Stations: </em></span></h1>  
      <p><a href="policestationdetail.php">&nbsp;<img src="images/addButton.png" /><span class="style5">&nbsp;Add Police Station </span></a> 
          <?php base64_decode($_GET['msg'])?>
        </strong></p>
      <table width="99%">
        <tr>
          <th height="36" colspan="8" align="left" class="first"><span class="rowBorder">&nbsp;<img src="images/view.png" align="absbottom"/><span class="highlight"> View Police Station Details</span></span></th>
        </tr>
		<tr>
	  <td colspan="7"></td>
	  </tr>
  
        <tr>
          	<td width="8%" height="23"><span class="style4 tableHeading style2">&nbsp;Sr.No.</span></td>
			<td width="30%"><span class="style4 tableHeading style2">Policestation Name</span></td>
			<td width="16%"><span class="style4 tableHeading style2">Area Name</span>	</td>
			<td width="21%"><span class="style4 tableHeading style2">Address</span></td>
			<td width="11%"><span class="style4 tableHeading style2">Pincode</span></td>
			<td width="7%"><span class="style4 tableHeading style2">Edit</span></td>
			<td width="7%"><span class="style4 tableHeading style2">Delete</span></td>
        </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	
	<tr>
		<td align="center">
		<?php echo $i++; ?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["address"];?></td>
		<td><?php echo $record["pincode"];?></td>
		<td><a href="editpolicestation1.php?psname=<?php echo $record["policestation_name"];?>">
		<img title="Edit crime type" src="images/edit.png"  /></a>
		</td>
	    <td><a href="deletepolicestation.php?psname=<?php echo $record["policestation_name"];?>">
		<img title="Delete crime type Details" src="images/delete.png" /></a></td>
  </tr>
	<tr>
	  <td colspan="7"></td>
	  </tr>
  
<?php
}
?>
</table> 
<p>&nbsp;</p>
      <p>&nbsp;</p>
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