<?php 
include("sessionHandler.php");

include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<style type="text/css">
<!--
.style3 {color: #000000}
.style15 {font-size: 18px}
.style16 {color: #FFFFFF}
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
        <form action="chkPIforward.php" method="post" name="emailForm" id="emailForm" class="form-validate">
		<div class="contact_email">
		  <p>&nbsp;</p>
			<p><span class="componentheading"><em>Forwarding Message to the Officer:</em></span>
			<br></p>
			    <table width="596" height="290">
                  <tr>
                    <td width="202" height="59" align="right"><br />
                      <span class="style15">Police Officer Name:</span>
                      </label></td>
                    <td width="378"><span class="style15 style3">&nbsp;
                      <select name="officer" class="list"  id="officer"  >
                        <option >-------select-------</option>						
                        <?php
						  $officerQuery = "select *from mstr_officer where username<> '".$_SESSION['username']."' ";
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
                    </span></td>
                  </tr>
                  <tr>
                    <td height="171" align="right"><span class="style15">Enter your Message:</span></td>
                    <td>&nbsp;&nbsp;
                      <textarea cols="50" rows="10" name="msg" id="msg" class="inputbox required" >
                    </textarea></td>
                  </tr>
                  <tr>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;
                      <p><button type="submit" class="button validate png style16">Send</button>
                       </p></td>
                  </tr>
                </table>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			<label for="contact_subject">&nbsp;</label>
			    <span class="style15">
			    <label id="contact_textmsg" for="contact_text">&nbsp; </label>
			    </span>
			    <p><span class="style15">			      </span><br>
			      <br>
			      </p>
			    </div>
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