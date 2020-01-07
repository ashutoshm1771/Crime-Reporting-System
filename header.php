<?php 
session_start();
include("config.php")?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <title>Welcome to the  Crime Reporting System</title>
  
  <script type="text/javascript" src="files/mootools.js"></script>
  <script type="text/javascript" src="files/caption.js"></script>
  
  <!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js"></script>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
</head>
<body id="body">
<div class="main">
	<!--header-->
    <div class="row-logo clear">
     <div class="fright">       
	   
     </div>
     <div class="fleft">
       <h1 id="logo"> <a href="" title="business"><img src="images/crimesolutions_logo1.jpg" 
	                   alt="logo" width="251" height="95" title="business" /></a> </h1>
     </div>
   </div>
	
	<div class="header-box clear">		
	<object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="881" height="276">
       <param name="src" value="files/flashbanner.swf" />
       <embed src="files/flashbanner.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="881" height="276"></embed>
     </object>
	</div>
        
		<div class="row-top-menu wrapper-top-menu clear">
    	<div class="border-top">
        	<div class="border-bottom">
            	<div class="border-left">
                	<div class="border-right">
                    	<div class="corner-top-left">
                        	<div class="corner-top-right">
                            	<div class="corner-bottom-left">
                                	<div class="corner-bottom-right clear">
                                    	<div class="module">
        <ul class="menu-nav">
		<li class="item53"><a href="home.php"><span>Home</span></a></li>        
		<li class="item55"><a href="crimealert.php"><span>Get Crime Alert</span></a></li>
		<li class="item56"><a href="FIRreg1.php"><span>Register FIR </span></a></li>
		<li class="item57"><a href="viewmissing_citizen.php"><span>Services</span></a></li>
		<li class="item58"><a href="econtact.php"><span>Emergancy Contacts</span></a></li>
		<li class="item53"><a href="aboutus.php"><span>About Us</span></a></li>
		
		<?php if(isset($_SESSION['username'])) {?>
		
		<li class="item58"><a href="logout.php"><span>Logout</span></a></li>
		<?php } else {?>
				<li class="item58"><a href="index.php"><span>Login</span></a></li>
		<?php }?>
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
    <!--content-->