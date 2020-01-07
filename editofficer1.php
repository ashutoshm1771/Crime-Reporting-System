<?php include("header.php");
      include("config.php");
$username = $_GET['username'];
$selectQuery = "select *from mstr_officer mo,mstr_profile mp where mp.username = '".$username."' and mp.username = mo.username ";
//echo $selectQuery;

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewofficer.php");

?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {		
		$('#sdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});	
	</script>
<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
-->
</style>
<div id="content">
  <div class="clear">
    <!--right-->
    <!--left-->
    <div id="left">
      <div class="left-indent">
        <div class="clear">
          <div class="wrapper-box module_menu">
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
                                    <li id="current" class="active item1"> <a href="">
									<span>Home</span></a></li>
                                    <li class="item2"><a href=""><span>Get Crime Alert </span></a></li>
                                    <li class="item59"><a href="">Register Your FIR </a></li>
                                    <li class="item60"><a href="viewpolice.php">Police Station </a></li>
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
    <div id="container" class="wrapper-container">
      <div class="corner-top-left">
        <div class="corner-top-right">
          <div class="corner-bottom-left">
            <div class="corner-bottom-right">
   <form action="chkPolicestationdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h2><span class="componentheading style6">
				  <span class="style10"><span class="componentheading"><em>Edit Information of Officer:</em></span></span></span> </h2>
                </div>
                <table width="770" height="563" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td height="64" colspan="2" align="left" bgcolor="#FFFFFF"><p class="rowBorder">&nbsp;</p>
                    <p class="rowBorder">&nbsp; <img src="images/view.png" align="absbottom"/> <span class="highlight">Edit  Information of Officer </span></p></td>
                  </tr>
                  <tr>
                    <td width="165" height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">First Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="fname" type="text" id="fname" size="35" value="<?php echo $record["first_name"]; ?>" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   //failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Firstname"});
				 </script>
                    </span></td>
                  </tr>

                  <tr bgcolor="#993366">
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Middle Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="mname" type="text" id="mname" size="35"  value="<?php echo $record["middle_name"]; ?>"/>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Middlename"});
				 </script>
                      </label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="lname" type="text" id="lname" size="35" value="<?php echo $record["last_name"]; ?>" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:"Invalid Lastname"});
				 </script>
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>/>
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>/>
                        Female</label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>
                      </label>
                    </span><span class="style15 style3">
                      <textarea name="address" cols="32" rows="3"  id="address"><?php echo $record["address"]; ?></textarea>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="city" size="1"  id="city" >
                        <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                        <option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>> <?php echo $rowCity['city_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});		   
				      </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Pin-code:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="pincode" type="text" id="pincode" maxlength="6"  value="<?php echo $record["pincode"]; ?>"/>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="emailid" type="text" id="emailid" size="35" maxlength="254" value="<?php echo $record["emailid"]; ?>" />
                        <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>                    </td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="23" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Joining Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="jdate" id="jdate"  value="<?php echo $record["Jdate"]; ?>"/></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="24" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ldate" id="ldate"  value="<?php echo $record["Ldate"]; ?>"/></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Police station name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="psname" size="1"  id="psname" >
                        <?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysql_query($psQuery);
						  while($rowPs = mysql_fetch_array($rsPs))
						  {
						  ?>
                 <option value="<?php echo $rowPs['policestation_id']?>"<?php if($record["poilcestation_id"]==$rowPs['poilcestation_id']) echo "selected"; ?>> 
				 <?php echo $rowPs['policestation_name']?></option>
                 <?php }?>
                        <script type="text/javascript">
				  //var f1 = new LiveValidation('psname');
				    //f1.add(Validate.Presence,{failureMessage: "Please enter police station name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Designation Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="designation" size="1"  id="designation" >
                        <?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysql_query($desigQuery);
						  while($rowDesig = mysql_fetch_array($rsDesig))
						  {
						  ?>
                   <option value="<?php echo $rowDesig['desi_id']?>"<?php if($record["desi_id"]==$rowDesig['desi_id']) echo "selected"; ?>>  
				   <?php echo $rowDesig['desi_name']?></option>
                   <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <input name="reset" type="reset" class="header-button" value="Reset" />
                <input name="update"  type="submit" class="header-button" id="update" value="Update"/>
                <p>&nbsp;</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <?php include("footer.php");?>
      </div>
</div>
</p>
    

</body></html>