<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
include("sidebar.php");

$selectAllUserQuery = "select * from mstr_officer mo,mstr_designation md,mstr_policestation mp where                        mo.poilcestation_id=mp.poilcestation_id and mo.desi_id=md.desi_id";
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
 
      <h1><span class="componentheading"><em>View Details of Officers: </em></span></h1>  
      <p><a href="officerdetail.php">&nbsp;<img src="images/addButton.png" /><span class="style5">&nbsp;Add Officer</span></a> 
          <?php base64_decode($_GET['msg'])?>
        </strong></p>
      <table width="99%">
        <tr>
          <th height="38" colspan="8" align="left" class="first"><span class="rowBorder">&nbsp;<img src="images/view.png" align="absbottom"/><span class="highlight">&nbsp; View Officer Details</span></span></th>
        </tr>
        <tr>
          	<td width="9%" height="37"><span class="style4 tableHeading style2">&nbsp;Sr.No.</span></td>
			<td width="15%"><span class="style4 tableHeading style2">User Name </span></td>
			<td width="12%"><span class="style4 tableHeading style2">Join Date </span>	</td>
			<td width="11%"><span class="style4 tableHeading style2">Last Date </span></td>
			<td width="20%"><span class="style4 tableHeading style2">Policestation Name</span></td>
			<td width="20%"><span class="style4 tableHeading style2">Designation Name </span></td>
			<td width="6%"><span class="style4 tableHeading style2">Edit </span></td>
			<td width="7%"><span class="style4 tableHeading style2">Delete </span></td>
        </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $i++;?></td>
		<td><?php echo $record["username"];?></td>
		<td><?php echo $record["Jdate"];?></td>
		<td><?php echo $record["Ldate"];?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["desi_name"];?></td>
		<td><a href="editofficer1.php?username=<?php echo $record["username"];?>"><img title="Edit crime type" src="images/edit.png"  /></a></td>
	    <td><a href="deleteofficer.php?username=<?php echo $record["username"];?>"> <img title="Delete crime type Details" src="images/delete.png" /></a></td>
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