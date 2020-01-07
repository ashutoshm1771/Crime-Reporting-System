<?php include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
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
        <form action="chkFIRreg3.php" method="post" enctype="multipart/form-data" name="form1">
		 <div>
		   <h2><span class="componentheading style6">
		   <span class="style10">Step:3. Fill the following FIR  details(Information about victim):</span></span>
		   </h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="524" height="324" border="0" align="center" cellpadding="10" cellspacing="5">
             <tr>
               <td width="105" align="right" valign="middle" bgcolor="#FFFFFF">
               <td colspan="3" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Firstname"});
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="right"  bgcolor="#FFFFFF"><p style="color: #000000">From:</p>
                 <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <select name="officer" class="list"  id="officer"  >
                   <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                   <?php
						  $officerQuery = "select *from mstr_officer mo,mstr_designation md 
						                   where md.desi_id = mo.desi_id ";
						  $rsOfficer = mysql_query($officerQuery);
						  while($rowOfficer = mysql_fetch_array($rsOfficer))
						  {
						  ?>
                   <option value="<?php echo $rowOfficer['username']?>"> <?php echo $rowOfficer['username']?></option>
                   <?php }?>
                   <script type="text/javascript">
				          //var f1 = new LiveValidation('officer');
				          //f1.add(Validate.Presence,{failureMessage: "Please enter officer name"});				   
				        </script>
                 </select>
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
               <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">             
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
             </tr>
             <tr>
               <td height="60" align="left" valign="middle" bgcolor="#FFFFFF"><span style="color: #000000">Enter Your Massege:</span>
               <td width="315" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <textarea name="address" cols="60" rows="10"  id="address"></textarea>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:" Invalid Address"});
				 </script>
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
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
               <td colspan="3" align="left" bgcolor="#FFFFFF"><script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>				</td>
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
		    <input name="submit" type="submit" class="header-button" id="submit" value="Send"/>          
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