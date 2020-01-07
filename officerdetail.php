<?php include("header.php"); ?>

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
		$('#jdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});
	$(function() {		
		$('#ldate').datepicker({
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
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
.style21 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%; font-size: 18px; }
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
                                    <li id="current" class="active item1"> <a href=""><span>Home</span></a></li>
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
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">FIR Registration Guidelines</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Joomla! Overview</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Extensions</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">What's New in 1.5?</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Welcome to Joomla!</a></li>
                                    <li class="mostread s1"><a 	href=""	class="mostread s1">Content Layouts</a></li>
                                    <li class="mostread s1"><a 	href="5" class="mostread s1">Joomla! Features</a></li>
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
              <form action="chkOfficerdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h2><span class="componentheading"><em>Information about Officer:</em></span></h2>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="556" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">First Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="fname" type="text" id="fname" size="35" />
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
				  <tr>
	<td height="5" colspan="6" ></td>
</tr>

                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Middle Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="mname" type="text" id="mname" size="35" />
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
	<td height="5" colspan="6" ></td>
</tr>
                  <tr>
                    <td height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input name="lname" type="text" id="lname" size="35" />
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
				   <tr>
	<td height="2" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="radio" name="gender" value="Male" />
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" />
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
                    <textarea name="address" cols="32" rows="3"  id="address"></textarea>
                    </span></td>
                  </tr>
				   <tr>
	<td height="5" colspan="6" ></td>
</tr>
                   <tr bgcolor="#993366">
                     <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City</span>:</td>
                     <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                       <select name="city" size="1"  id="city" >
                         <option>----select----</option>
						 <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                         <option value="<?php echo $rowCity['city_id']?>"> <?php echo $rowCity['city_name']?></option>
                         <?php }?>
                         <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});		   
				       </script>
                       </select>
                     </span></td>
                   </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Pin-code:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="pincode" type="text" id="pincode" maxlength="6" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>
                    </span></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <input type="text" name="contactno" id="contactno" maxlength="12" />
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
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
                        <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>                    </td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Joining Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="jdate" id="jdate" /></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Last Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ldate" id="ldate" /></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Police station name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="psname" size="1"  id="psname"  >
                        <option>--------------select------------</option>
						<?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysql_query($psQuery);
						  while($rowPs = mysql_fetch_array($rsPs))
						  {
						  ?>
                        <option value="<?php echo $rowPs['poilcestation_id']?>"> 
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
                        <option>----select----</option>
						<?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysql_query($desigQuery);
						  while($rowDesig = mysql_fetch_array($rsDesig))
						  {
						  ?>
                        <option value="<?php echo $rowDesig['desi_id']?>"> <?php echo $rowDesig['desi_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                </table>
                
                <div>
                  <h2>&nbsp;&nbsp;<span class="componentheading"><em>Log in information:</em></span></h2>
                </div>
                <p>&nbsp;</p>
                <table width="643">
                  <tr bgcolor="#993366">
                    <td width="173" height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Choose login name:</span> </td>
                    <td width="458" align="left" bgcolor="#FFFFFF"><span class="style15">
                      <label>
                      <input name="loginname"  id="loginname" type="text" size="24" />
                      <script type="text/javascript">
				    //var f1 = new LiveValidation('loginname');
				    //f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script>
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="33" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="password"  type="password" id="password" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="30" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Re-Type Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="rpassword"  type="password" id="rpassword" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>
                    </span></td>
                  </tr>
                  <tr align="right" valign="middle" bgcolor="#FFFFFF">
                    <td height="28" colspan="2"><input name="reset2" type="reset" class="header-button" value="Reset" />
                        <input name="Submit" type="submit" class="header-button"  value="Submit" /></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
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