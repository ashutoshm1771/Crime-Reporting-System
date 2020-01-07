<?php
//include("sessionHandler.php");
include("header.php");
include("config.php");
$selectAllUserQuery = "select *from mstr_policestation mp,mstr_area a where a.area_id = mp.area_id";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>

 
      <h1>View policestationdetails </h1>  <a href="policestationdetail.php">Add police</a> | 
	  <?php base64_decode($_GET['msg'])?></strong>
      <table width="99%">
        <tr>
          <th colspan="8" class="first"><strong>List of Police Stations</strong></th>
        </tr>
		<tr>
	  <td colspan="7"><hr /></td>
	  </tr>
  
        <tr>
          	<td width="7%">No.</td>
			<td width="39%">policestation name</td>
			<td width="14%">areaname	</td>
			<td width="15%">address</td>
			<td width="11%">pincode</td>
			<td width="7%">Edit</td>
			<td width="7%">Delete</td>
        </tr>
        <?php
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	
	<tr>
		<td>
		<?php echo $i++; ?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["address"];?></td>
		<td><?php echo $record["pincode"];?></td>
		<td><a href="editpolicestation.php?psname=<?php echo $record["policestation_name"];?>">
		Edit</a>
		</td>
	    <td><a href="deletepolicestation.php?psname=<?php echo $record["policestation_name"];?>">       Delete</a></td>
  </tr>
	<tr>
	  <td colspan="7"><hr /></td>
	  </tr>
  
<?php
}
?>
</table>     
    </div>
  </div>
<?php include("footer.php");?>
