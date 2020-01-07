<?php 
include("header.php"); ?>


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
@import url("css/template.css");
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
	   
	   <html>
	   <body>
        <form action="chkdesignation.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		   <h2>&nbsp;</h2>
		 </div>             
           <p class="componentheading"><em>Add Designation:</em></p>
           <table width="70%" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="6" height="27" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/><span class="highlight"> Add Crime Type </span></td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="9" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Designation Name</span>:</td>
	<td width="23%" ><input type="text" id="designation" name="designation" />		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('designation');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid designation name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%">&nbsp;</td>
	<td width="23%" >
	  </td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><a href="viewdesignation.php"><input name="Cancel" type="button" class="header-button"  id="Cancel" value="Cancel"/></a>
	<input name="save" type="submit" class="header-button"  id="save" value="Save"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
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
        </form> 
		 </div>  
    </div>
    </div>
    </div>
    </div>
	   <?php include("footer.php"); ?>
</div>
</div>
       </body></html>