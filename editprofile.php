<?php 
include("header.php"); ?
include("config.php");
$username = $_GET['username'];
$selectQuery = "select * from mstr_profile  username = '".$username."' ";
//echo $selectQuery;

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewprofile.php");

?>?>
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
		$('#bdate').datepicker({
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

<?php /* FOR GREYBOX USE
<script type="text/javascript" src="javascript/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="greybox/gb_styles.css" media="screen" />
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('a[rel*=greybox]').greybox({
        loading_image : 'greybox/indicator.gif',
        close_image : 'greybox/g_close.gif'
      })
    })
  </script>
  <link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.accordion.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {
		$("#accordion").accordion();
	});
	</script>*/?>
	

<body>
<h1>profile Information</h1>
        <form action="updateprofile.php" method="post"  enctype="multipart/form-data" name="">
		 <div>
		   <h2><span class="componentheading style6"><span class="style10">Profile Details</span></span></h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="565" border="0" align="center" cellpadding="10" cellspacing="20">
             <tr>
               <td width="211" align="right" valign="middle" bgcolor="#FFFFFF">
			     <span class="style3">First Name:</span>
               <td width="543" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                <input type="text" value="<?php echo $record["first_name"]; ?>" 
			       name="fname" id="fname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Firstname"});
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Middle Name: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                <input type="text" value="<?php echo $record["middle_name"]; ?>" 
			       name="mname" id="mname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Last Name:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" value="<?php echo $record["last_name"]; ?>" 
			       name="lname" id="lname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				       "It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Birth-date:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" readonly="yes" value="<?php echo $record["Dob"]; ?>" 
			       name="bdate" id="bdate" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('bdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Birth date"});				   
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Gender:</span>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male">Male</label>            
                 <label>
                   <input type="radio" name="gender" value="Female">Female</label>
                 </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Address:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <TEXTAREA ROWS="5" COLS="30" name="address" id="address" style="background-color: #EEEEEE"><?php echo $record["address"]; ?></TEXTAREA>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Address"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
               <select name="city" size="1"  id="city" >
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>"><?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>
							<?php echo $rowCity['city_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script> 
                 </select>
			   </span></td>
             </tr>
             
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Pin-code:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">                
                  <input type="text" maxlength="6" value="<?php echo $record["pincode"]; ?>" 
			       name="pincode" id="pincode" />				 
				 <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>                 
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Contact number: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                  <input type="text" maxlength="12" value="<?php echo $record["contact_no"]; ?>" 
			       name="contactno" id="contactno" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Email-id:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                <input type="text" value="<?php echo $record["emailid"]; ?>" name="emailid"  maxlength="254"/>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Your recent photo:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
               <input type="text" value="<?php echo $record["profile_photo"]; ?>" name="photo" 
			   size="40"/>
                 </label>
				 </span></td>
             </tr>
           </table>
		  <p>&nbsp;</p>
		  <div>
		    <h2>&nbsp;&nbsp;<span class="style16"> Step:2. Fill the following Log-in details:</span></h2>
		  </div>             
           <p>&nbsp;</p>            
           
           <table width="565" align="center" cellpadding="10" cellspacing="20">
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Choose login name:</span>
               <td width="379" align="left" bgcolor="#FFFFFF"><span class="style15">
                 <label>
                 <input type="text" value="<?php echo $record["username"]; ?>" 
			       name="loginname" id="loginname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script> 
                 </label>
               </span></td>
             </tr>
			  <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">
                   <input type="text" size="24" value="<?php echo $record["password"]; ?>" 
			       name="password" id="password" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
               </span></td>
             </tr>
			 <tr bgcolor="#993366">
               <td height="39" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Re-Type Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">              
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
               </span></td>
             </tr>
			 <tr align="right" valign="middle" bgcolor="#FFFFFF">
			 <td>&nbsp;</td>
			 <td><input name="Submit" type="submit" class="header-button"  value="Update" /></td>
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
    <!--footer-->
    <div class="footer clear">
    	<span>Business © 2009  |  <a href="#">Privacy Policy</a></span>
    	<a href="http://www.joomla.org/">Joomla!</a> is Free Software 
released under the GNU/GPL License. &nbsp;&nbsp;&nbsp;<!--{%FOOTER_LINK} -->
    </div>
</div>
<!--osc3.template-help.com -->


</body></html>