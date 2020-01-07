<?php include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
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
.style20 {font-size: 11px; color: #000000; }
-->
</style>
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
        <form action="chkmissingcitizen.php" method="post" enctype="multipart/form-data" name="form1">
		 <div>
		   <h2><span class="componentheading"><em>Missing Citizens </em></span></h2>
		   <h2><span class="componentheading"><em>(Information about Missing People):</em></span>
		     </h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="770" height="522" border="0" align="center" cellpadding="10" cellspacing="5">
             <tr>
               <td width="177" height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style20">First Name:</span></blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="35" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Firstname"});
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Middle Name: </span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Last Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
               <label>
               <input type="radio" name="gender" value="Male" />
               Male</label>
               <label>
               <input type="radio" name="gender" value="Female" />
               Female</label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Address:</span></td>
               <td align="left" bgcolor="#FFFFFF"><textarea name="address" cols="32" rows="3"  id="address"></textarea></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="city" size="1"  id="city" >
                   <option value="">----select----</option>
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
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Area Name:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="area" size="1"  id="area" >
                   <option value="">----select----</option>
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
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Date of missing:</span></td>
               <td align="left" bgcolor="#FFFFFF"><input type="text" name="date" id="date" readonly="yes" /></td>
               </tr>
             <tr bgcolor="#993366">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style3">Time of missing:</span></p>
                   </blockquote>
                 </blockquote>
               </blockquote></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <script type="text/javascript">
				    var f1 = new LiveValidation('date');
				    f1.add(Validate.Presence,{failureMessage: " Please enter date"});				   
				 </script>
                 </label>
                 <input type="text" name="time2" id="time2" />
                 <?php /*<a href="#" id="time2_toggler">Time</a>
               <div id="time2_picker" class="time_picker_div"></div>*/?>
               </span></td>
               </tr>
             <tr bgcolor="#999999">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p class="style3">Special Clue: </p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF">
			   <input type="text" name="specialclue" id="specialclue"/>
			    <script type="text/javascript">
				    var f1 = new LiveValidation('specialclue');
				    f1.add(Validate.Presence,{failureMessage: " Please enter specialclue description"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				    " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Address"});
				 </script>			   </td>
             </tr>
             <tr bgcolor="#999999">
               <td height="76" align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style3">Brief description of incident:</span>                 </p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF">
			   <textarea name="missingdesc" cols="32" rows="3"  id="missingdesc"></textarea>
			   <script type="text/javascript">
				    var f1 = new LiveValidation('missingdesc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter missing description"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Address"});
				 </script>			   </td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style19" style="color: #000000">Photo of missing person:</span>                 </p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><input name="photo" type="file" id="photo" size="35" /></td>
             </tr>
             <?php /*?><tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Choose Id-Proof: </span>             
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="idproof" size="1"  id="idproof" >
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
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Number of Id-Proof:</span>
               
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="idproofno" id="idproofno" maxlength="12">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('idproofno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script> 
                 </label>                 
               </span></td>
             </tr><?php */?>
           </table>
		  <p>&nbsp;</p>
		    <input name="reset" type="reset" class="header-button" value="Reset" />
		    <input name="submit" type="submit" class="header-button" id="submit" value="Submit"/>          
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