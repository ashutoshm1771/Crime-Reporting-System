<?php 
session_start();
include("header.php");
include("config.php");
include("facebox.php");
include("sidebar.php");

$selectQuery = "select * from mstr_profile  where username = '".$_SESSION['username']."' ";
//echo $selectQuery;

$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);

if(mysql_num_rows($rs)==0)
	header("location:viewprofile.php");
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
	
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style16 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%; font-size: 18px; }
.style19 {font-size: 11px; }
.style20 {font-size: 11%; }
-->
</style>

<div id="content">
      <div class="clear">
        <!--right-->
        <!--left-->                                                                                                                                                                                                                                                                             <div id="container" class="wrapper-container">
       <div class="corner-top-left">
       <div class="corner-top-right">
       <div class="corner-bottom-left">
       <div class="corner-bottom-right">
        <form action="updateprofile.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		   <h2><span class="componentheading"><em> Update your profile:</em></span></h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="753" border="0" cellpadding="0" cellspacing="0">
             <tr>
               <td width="115" rowspan="11" align="right" valign="middle" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["profile_photo"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" rel="facebox">
				   Change Photo</a>                           
               <td width="122" height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">First Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="516" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="40" value="<?php echo $record["first_name"]; ?>" >
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
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Middle Name: </span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="40" value="<?php echo $record["middle_name"]; ?>">
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
               <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Last Name:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="40" value="<?php echo $record["last_name"]; ?>">
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Birth-date:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="bdate" id="bdate" readonly="yes" value="<?php echo $record["Dob"]; ?>">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('bdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Birth date"});				   
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Gender:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>>Male</label>            
                 <label>
                   <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>>Female</label>
                 </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000"> Address:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <textarea name="address" cols="40" rows="5"  id="address"><?php echo $record["address"]; ?></textarea>
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
               <td align="right" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style19" style="color: #000000">City:</span></p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
               <select name="city" size="1"  id="city" >
				<option>-----select-----</option>
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>>
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Pin-code:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">                
                 <input name="pincode" type="text" id="pincode" maxlength="6" value="<?php echo $record["pincode"]; ?>">						 
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Contact number: </span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>">
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Email-id:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
               <input name="emailid" type="text" id="emailid" size="40" maxlength="254" value="<?php echo $record["emailid"]; ?>"/>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
             </tr>
           </table>
		  <p>&nbsp;</p>
		  <div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
		  <p>&nbsp;</p>
		  <div>
		    <h2>&nbsp;&nbsp;<span class="componentheading"><em> Update Log-in details:</em></span></h2>
		  </div>             
           <p>&nbsp;</p>            
           
           <table width="688" cellpadding="0" cellspacing="0">
             <tr bgcolor="#993366">
               <td width="91" align="right" bgcolor="#FFFFFF">               
               <td width="153" height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Choose login name:</span>
               <td width="442" align="left" bgcolor="#FFFFFF"><span class="style15">
                 <label>
                 <input name="loginname"  id="loginname" type="text" size="24" value="<?php echo $record["username"]; ?>">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script> 
                 </label>
               </span></td>
             </tr>
			  <tr bgcolor="#999999">
			    <td align="right" bgcolor="#FFFFFF">              
			    <td height="31" align="right" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Old Password:</span>              
			    <td align="left" bgcolor="#FFFFFF"><span class="style15">
			      <input name="oldpwd"  type="text" id="oldpwd" value="<?php echo $record["password"]; ?>" size="24"  readonly="yes" />
			    </span></td>
			    </tr>
			  <tr bgcolor="#999999">
			    <td align="right" bgcolor="#FFFFFF">                
               <td height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">New Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">
                 <input name="password"  type="password" id="password" size="24"  />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
               </span></td>
             </tr>
			 
			  <tr bgcolor="#993366">
			    <td align="right" bgcolor="#FFFFFF">                
               <td height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Re-Type New Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">              
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
               </span></td>
             </tr>
			 
			  <tr align="right" bgcolor="#FFFFFF">
			  <td colspan="3"><input name="reset" type="reset" class="header-button" value="Reset" />
			    <input name="Submit" type="submit" class="header-button"  value="Update" /></td>
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