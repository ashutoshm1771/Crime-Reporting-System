<?php include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	
	<?php /*<script  type="text/javascript" language="javascript" src="mootools.v1.11.js"></script>
<script  type="text/javascript" language="javascript" src="nogray_time_picker_min.js"></script>
<script  type="text/javascript" language="javascript">
	window.addEvent("domready", function (){
		//var tp1 = new TimePicker('time1_picker', 'time1', 'time1_toggler' );
		var tp2 = new TimePicker('time2_picker', 'time2', 'time2_toggler', {format24:false});
		var tp3 = new TimePicker('time3_picker', null, null, {visible:true, onChange:function(){
			if (this.time.hour < 12) var ampm = this.options.lang.am;
			else var ampm = this.options.lang.pm;
			
			var hour = this.time.hour%12;
			if (hour < 10) hour = "0"+hour;
			var minute = this.time.minute;
			if (minute < 10) minute = "0"+minute;
			$('time3_value').setHTML(hour+":"+minute+" "+ampm);
		}});
	});
</script>
<style type="text/css">
	 *{font-family:Arial, Helvetica, sans-serif;
		font-size:9pt;}
		
	/* table list */
	/*.table_list {border-collapse:collapse;
		border:solid #cccccc 1px;
		width:100%;}
	
	.table_list td {padding:5px;
		border:solid #efefef 1px;}
	
	.table_list th {background:#75b2d1;
		padding:5px;
		color:#ffffff;}
	
	.table_list tr.odd {background:#e1eff5;}
	
	.time_picker_div {padding:5px;
		border:solid #999999 1px;
		background:#ffffff;}
</style>
*/?>
	
	
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript" src="ui/jquery.jtimepicker.js"></script>
	<script type="text/javascript">
	$(function() {		
		$('#date').datepicker({
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
.style16 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%; font-size: 18px; }
.style19 {font-size: 11px; }
.style20 {font-size: 11%; }
-->
</style>
<div id="content">
      <div class="clear">
        <!--right-->
        <!--left-->
<div id="left">
    <div class="left-indent"><div class="clear">
    <div class="wrapper-box module_menu"><div class="border-top"><div class="border-bottom">
    <div class="border-left"><div class="border-right"><div class="corner-top-left">
    <div class="corner-top-right"><div class="corner-bottom-left">
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
	                 <li id="current" class="active item1">	<a href=""><span>Home</span></a></li>
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
        <form action="chkFIRreg1.php" method="post" enctype="multipart/form-data" name="form1">
		 <div>
		   <h2><span class="componentheading"><em>Step:1. Fill the following FIR  details:</em></span>
		   </span></h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="770" height="812" align="center" cellpadding="10" cellspacing="5">
             <tr>
               <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style3">First Name:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="35" >
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
			     <blockquote>
			       <p><span class="style19" style="color: #000000">Middle Name: </span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="35">
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
			     <blockquote>
			       <p><span class="style19" style="color: #000000">Last Name:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				           " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="30" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span>             
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="radio" name="gender" value="Male" />
                 Male</label>
                 <label>
                 <input type="radio" name="gender" value="Female" />
                 Female</label>
               </span> </td>
               </tr>
             <tr bgcolor="#993366">
               <td height="30" align="right" valign="middle" bgcolor="#FFFFFF">
			     
			       <p><span class="style19" style="color: #000000">Date of crime:</span>			           </p>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="date" id="date" readonly="yes">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('date');
				    f1.add(Validate.Presence,{failureMessage: " Please enter date"});				   
				 </script> 
                 </label>
               </span></td><br />
               </tr>
             <tr bgcolor="#999999">
               <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style3">Time of crime:</span></p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label></label>
                 <input type="text" name="time2" id="time2" />
                 <?php /*<a href="#" id="time2_toggler">Time</a>
               <div id="time2_picker" class="time_picker_div"></div>*/?>
                 </span></td>
             </tr>
             <tr>
               <td height="60" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style19" style="color: #000000"> Your Address:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					      // " Invalid Address"});
				 </script> 
                 </label>
               </span><span class="style15 style3">
                 <textarea name="address" cols="32" rows="3"  id="address"></textarea>
               </span></td>
               </tr>
             
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="city" size="1"  id="city" >
				  <option >----select----</option>
                   <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysql_query($cityQuery);
						  while($rowCity = mysql_fetch_array($rsCity))
						  {
						  ?>
                   <option value="<?php echo $rowCity['city_id']?>"><?php echo $rowCity['city_name']?></option>
                   <?php }?>
                   <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script>
                 </select>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Area Name:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="area" size="1"  id="area" >
				 <option>----select----</option>
                   <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysql_query($areaQuery);
						  while($rowArea = mysql_fetch_array($rsArea))
						  {
						  ?>
                   <option value="<?php echo $rowArea['area_id']?>"> <?php echo $rowArea['area_name']?></option>
                   <?php }?>
                   <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                 </select>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style19" style="color: #000000">Pin-code:</span></p>
			       </blockquote></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <input name="pincode" type="text" id="pincode" maxlength="6">
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
			       <p><span class="style19" style="color: #000000">Contact number: </span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="contactno" id="contactno" maxlength="12">
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
			       <p><span class="style19" style="color: #000000">Email-id:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Crime Type: </span>             
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="crimetype" size="1"  id="crimetype" >
				 <option>----select----</option>
                   <?php
						  $crimetypeQuery = "select *from mstr_crimetype";
						  $rscrimetype = mysql_query($crimetypeQuery);
						  while($rowcrimetype = mysql_fetch_array($rscrimetype))
						  {
						  ?>
                   <option value="<?php echo $rowcrimetype['crime_id']?>"><?php echo $rowcrimetype['crime_type']?></option>
                   <?php }?>
                   <script type="text/javascript">
				    var f1 = new LiveValidation('crimetype');
				    f1.add(Validate.Presence,{failureMessage: "Please enter type of crime"});				   
				 </script>
                 </select>
               </span></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <p><span class="style3">Crime Location Address:</span>               </p>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><script type="text/javascript">
				    var f1 = new LiveValidation('crimelocation');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime location"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>			   <textarea name="crimelocation" cols="32" rows="3"  id="crimelocation"></textarea></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <p><span class="style3">Choose Id-Proof:</span>                 </p>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="idproof" size="1"  id="idproof" >
				   <option value="" selected="selected">----select----</option>
                   <option value="Election Card">Election Card</option>
                   <option value="PAN Card">PAN Card</option>
                   <option value="License Card">License Card</option>
                   <option value="Electricity Bill">Electricity Bill</option>				 		
				 <script type="text/javascript">
				    var f1 = new LiveValidation('idproof');
				    f1.add(Validate.Presence,{failureMessage: "Please enter identification proof"});				   
				 </script> 
                 </select>
               </span></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <p><span class="style3">Number of Id-Proof:</span>                 </p>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><label>
                <input type="text" name="idproofno" id="idproofno" maxlength="12">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('idproofno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
               </label></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <p><span class="style3">Brief description of incident:</span>                 </p>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF">
			   <textarea name="crimedesc" cols="32" rows="3"  id="crimedesc"></textarea>
			   <script type="text/javascript">
				    var f1 = new LiveValidation('crimedesc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime description"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					  //     " Invalid Address"});
				 </script>			   </td>
             </tr>
             <tr bgcolor="#999999">
               <td height="18" align="right" valign="middle" bgcolor="#FFFFFF">             
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
             </tr>
             <tr bgcolor="#999999">
               <td height="32" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style19" style="color: #000000">Photo of crime location:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><input name="photo1" type="file" id="photo1" size="35" /></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="32" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <p><span class="style19" style="color: #000000">Photo of crime location:</span>			           </p>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="photo2" type="file" id="photo2" size="35">
                 </label></span></td>
             </tr>
           </table>
		  <p>&nbsp;</p>
		    <input name="reset" type="reset" class="header-button" value="Reset" />
		    <input name="next" type="submit" class="header-button" id="next" value="Next"/>          
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