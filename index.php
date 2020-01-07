
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>

<style type="text/css">
#newsticker-demo { 
width:310px; 
background:#EAF4F5; 
padding:5px 5px 0; 
font-family:Verdana,Arial,Sans-Serif;
font-size:12px;
margin:20px auto;
}

#newsticker-demo a { text-decoration:none; }
#newsticker-demo img { border: 2px solid #FFFFFF; }

#newsticker-demo .title {
text-align:center;
font-size:14px;
font-weight:bold;
padding:5px;
}

.newsticker-jcarousellite { width:300px; }
.newsticker-jcarousellite ul li{ list-style:none; display:block; padding-bottom:1px; margin-bottom:5px; }
.newsticker-jcarousellite .thumbnail { float:left; width:110px; }
.newsticker-jcarousellite .info { width:190px; }
.newsticker-jcarousellite .info span.cat { display: block; font-size:10px; color:#808080; }

.clear { clear: both; }

</style>

  <title>Welcome to the Crime Reporting System</title>
  <?php include("facebox.php"); ?>
  <script type="text/javascript" src="files/mootools.js"></script>
  <script type="text/javascript" src="files/caption.js"></script>
<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js"></script>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">

<script src="javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>


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
		<li class="item54"><a href="registration.php"><span>Join Us </span></a></li>
		<li class="item55"><a href="#"><span>Get Crime Alert </span></a></li>
		<li class="item56"><a href="#"><span>Register FIR </span></a></li>
		<li class="item57"><a href="viewmissing_citizen.php"><span>Services</span></a></li>
		<li class="item58"><a href="econtact.php"><span>Emergancy Contacts</span></a></li>
		<li class="item53"><a href="aboutus.php"><span>About Us</span></a></li>
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
    <div id="content">
      <div class="clear">
        <!--right-->
            <div id="right">
              <div class="right-indent"><div class="clear">
                 <div class="wrapper-box module-login">
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
                                                                        
	          <h3>Login form</h3>
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
	   <form action="checkLogin.php" method="post" name="login" class="form-login">
             <label for="mod_login_username"> Username </label>
             <input name="username" id="username" class="inputbox" alt="username" type="text">
	         <script type="text/javascript">
				 var f1 = new LiveValidation('username');
				 f1.add(Validate.Presence,{failureMessage: " Please enter username"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows                     only characters"});
				 f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid                 username"});
	         </script>
             <label for="mod_login_password"> Password </label>
             <input id="password" name="password" class="inputbox" alt="password" type="password">
             <script type="text/javascript">
				 var f1 = new LiveValidation('password');
				 f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows only characters"});
				 //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid password"});
	         </script>
	         <div class="indent-button">
             <input name="Submit" class="button png" value="Log in" type="submit">
	         </div>   
             <div class="logform-indent">
             <p> <a href=""> Forgot your password?</a> </p>
             <p> <a href=""> Forgot your username?</a> </p>
             </div>
     
             <p class="form-indent1"> No Account Yet? <a href="registration.php"> Create an account</a> </p>
             <input name="option" value="com_user" type="hidden">
             <input name="task" value="login" type="hidden">
             <input name="return" value="L2pvb21sYV8yNTQ2Ni8jY29udGVudA==" type="hidden">
      </form>
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

    <div class="wrapper-box module s2">
    <div class="border-top">
    <div class="border-bottom">
    <div class="border-left">
    <div class="border-right">
    <div class="corner-top-left">
    <div class="corner-top-right">
    <div class="corner-bottom-left">
    <div class="corner-bottom-right clear">
    <div class="wrapper-box-indent" style="height:358px">
	<div class="box-title">
    <div class="border1-top">
    <div class="border1-bottom">
    <div class="border1-left">
    <div class="border1-right">
    <div class="corner1-top-left">
    <div class="corner1-top-right">
    <div class="corner1-bottom-left">
    <div class="corner1-bottom-right clear">
                                                                        
	<h3>Newsflash</h3>
     
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
	
	<div id="newsticker-demo">    
    <div class="newsticker-jcarousellite">
		<ul>
            <li>
				<div class="thumbnail">
					<img src="images/1.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and the Lady</a>
					<span class="cat">Category: Illustrations</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
			
            <li>
				<div class="thumbnail">
					<img src="images/2.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?family_of_colors">The Family of Colors</a>
					<span class="cat">Category: Creatures</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
            <li>
				<div class="thumbnail">
					<img src="images/3.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?teddybear_mac">Teddy Bear and MacBook</a>
					<span class="cat">Category: Photos</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
			<li>
				<div class="thumbnail">
					<img src="images/4.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?rainbow_butterfly">Rainbow Butterfly</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
			<li>
				<div class="thumbnail">
					<img src="images/5.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
			<li>
				<div class="thumbnail">
					<img src="images/6.jpg"><div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				</div>
				
				<div class="clear"></div>
			</li>
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
	</div>
    </div>
    
	<!--left-->
    <div id="left">
    <div class="left-indent"><div class="clear">
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
	                 <li class="item2"><a href="#"><span>Free FIR Registration </span></a></li>
	                 <li class="item2"><a href="#"><span>Get Free Crime Alert </span></a>!!!</li>
					 <li class="item2"><a href="viewmissing_citizen.php"><span>Missing Citizens </span></a></li>
					 <li class="item2"><a href="econtact.php"><span>Important Contacts </span></a></li>					 
					 <li class="item60"><a href="registration.php"><span>Join with Us </span></a></li>
					 <li class="item61"><a href="aboutus.php"><span>About Us</span></a></li>				 					 
					 <li class="item63"><a href="#"><span>What's New? </span></a></li>
	                
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
	<div class="wrapper-box-indent" style="height:400px">
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
	    <li class="mostread s1"><a href="econtact.php" class="mostread s1">Emergancy Contact Numbers</a></li>
	    <li class="mostread s1"><a href="articles/FAQ2.php" class="mostread s1">FIR Registration Guidelines</a></li>
		<li class="mostread s1"><a 	href="articles/FAQ3.php" class="mostread s1"> Where should I report a crime? </a></li>
		<li class="mostread s1"><a 	href="articles/FAQ4.php" class="mostread s1">What is Section 144 ?</a></li>
		<li class="mostread s1"><a 	href="articles/FAQ5.php" class="mostread s1">For Recruitement </a></li>
		<li class="mostread s1"><a 	href="articles/FAQ6.php" class="mostread s1">What to do in faulty Investigation?</a></li>
		<li class="mostread s1"><a 	href="articles/FAQ7.php" class="mostread s1">What to do in Police Harassement?</a></li>
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
    <div class="clear">
    
	<table class="blog" cellpadding="0" cellspacing="0">
	<tbody>	
	<tr><td valign="top">
	<div>
	<div class="wrapper-title">
	<div class="bull-title "></div>
	</div>
	
	
	<div class="article-indent">
	<div class="clear">
	<table class="contentpaneopen">
	<tbody>
	<tr>
	  <td width="120" height="98" valign="top" bordercolor="#000000"><img width="120" height="109" src="images/Lalit-Modi3.jpg" />&nbsp;</td>
	  <td width="332" colspan="2" valign="top"><h3><a href="http://news.bbc.co.uk/2/hi/south_asia/8638958.stm" onmousedown="return   clk(this.href,'news_result','','res','1','','0CDAQqQIwAA')">India IPL   chief <em>Lalit Modi</em> probed over corruption</a></h3>
	    Investigators have questioned the chief of the Indian Premier League   (IPL) over allegations of corruption linked to the lucrative cricket   tournament. 
	    <div> </div></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td colspan="2"><div class="border-link"> 
	<a href="articles/article_lalitmodi.html" rel="facebox" class="readon">Read More</a> </div></td>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
	<div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
	</div>	
	</td>
	</tr>
	
	<tr>
	<td valign="top">
	<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr><td class="article_column" valign="top" width="100%"><div class="article-indent">
      <div class="clear">
        <table class="contentpaneopen">
          <tbody>
            <tr>
              <td width="120" height="98" valign="top" bordercolor="#000000"><img width="120" height="109" src="images/modi.jpg" />&nbsp;</td>
              <td width="332" colspan="2" valign="top"><h3><a href="http://news.bbc.co.uk/2/hi/south_asia/8638958.stm" onmousedown="return   clk(this.href,'news_result','','res','1','','0CDAQqQIwAA')">Gujarat Chief minister <em>Narendra Modi</em> getting SIT summense</a></h3>
                Investigators have questioned the chief of the Indian Premier League   (IPL) over allegations of corruption linked to the lucrative cricket   tournament.
                <div> </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2"><div class="border-link">
			   <a href="articles/article_narendramodi.html" rel="facebox" class="readon">Read More</a> </div></td>
            </tr>
          </tbody>
        </table>
      </div>
	  </div>
	  <div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
	    <div class="article-indent">
          <div class="clear">
            <table class="contentpaneopen">
              <tbody>
                <tr>
                  <td width="120" height="98" valign="top" bordercolor="#000000"><img width="120" height="109" src="images/GUN5.jpg" />&nbsp;</td>
                  <td width="332" colspan="2" valign="top"><h3><a href="http://news.bbc.co.uk/2/hi/south_asia/8638958.stm" onmousedown="return   clk(this.href,'news_result','','res','1','','0CDAQqQIwAA')">Gujarat Chief minister<em>Narendra Modi</em> getting SIT summense</a></h3>
                   Investigators have questioned the chief of the Indian Premier League   (IPL) over allegations of corruption linked to the lucrative cricket   tournament.
                    <div>
					 
					</div></td>
                </tr>
				
                <tr>
				
                  <td>&nbsp;</td>
                  <td colspan="2"><div class="border-link">
				   <a href="articles/article_naksalvad.html" rel="facebox" class="readon">Read More</a> </div></td>
                </tr>
              </tbody>
            </table>
          </div>
	      </div></td>
	
	</tr>
	</tbody></table>
	</td>
	</tr>
	
	</tbody></table>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

      </div>
    </div>
    <!--footer-->
    <div class="footer clear">
    	<span>Crime Reporting of Gujarat &copy; 2010  |  <a href="#">Privacy Policy</a></span> Crime Reporting is for registering FIR any time and any where in Gujarat released under HCL Info System.. &nbsp;&nbsp;&nbsp;<!--{%FOOTER_LINK} -->
    </div>
</div>
<!--osc3.template-help.com -->


</body></html>