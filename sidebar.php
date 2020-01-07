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
	
	
	  <?php
	   if($_SESSION['type'] == "admin")
	   {?>
			 <li class="item2"><a href="viewarea.php"><span>View Area</span></a></li>
			 <li class="item2"><a href="viewcity.php"><span>View City</span></a></li>
			 <li class="item2"><a href="viewdesignation.php"><span>View Designation</span></a></li>
			 <li class="item2"><a href="viewcrimetype.php"><span>Different Type of Crime </span></a></li>
			 <li class="item2"><a href="viewpolice.php"><span>Police Station Details </span></a></li>
			 <li class="item59"><a href="viewofficer.php">Officer Details</a></li>
			 <li class="item60"><a href="manage_alluserprofile.php">Profiles of Users </a></li>
			 <li class="item61"><a href="manage_allarticle.php"><span>Articles Details</span></a></li>
			 <li class="item62"><a href="manage_missingcitizens.php"><span>All Missing Citizens</span></a></li>
		<?php }?>
	
	   <?php 
	      if($_SESSION['type'] == "Police Officer")
	      {?>
		  
		  <li class="item63"><a href="viewfir.php"><span>View FIR details </span></a></li>
		  <li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li>
		  <li class="item63"><a href=""><span> </span></a></li>
	          
	    
		<?php }?>      
	
	<?php 
	      if($_SESSION['type'] == "user")
	      {?>
		  
		  <li class="item63"><a href="FIRreg1.php"><span>Register Your FIR  </span></a></li>
		  <li class="item63"><a href="editFIRdetail.php"><span>Edit Your FIR details </span></a></li>
		  <li class="item63"><a href="viewmissing_citizen.php"><span>Missing Citizens </span></a></li> 
		  <li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li> 
	     
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