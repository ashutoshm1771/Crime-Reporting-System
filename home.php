<?php
session_start(); 
include("header.php");
include("sidebar.php");
?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">

    <div id="content">
		<div class="clear">
		<!--right-->
	
        
		<div id="container" class="wrapper-container">
		<div class="corner-top-left">
		<div class="corner-top-right">
		<div class="corner-bottom-left">
		<div class="corner-bottom-right">
		  <div class="clear">
										
		<table width="96%" cellpadding="0" cellspacing="0" class="blog">
		<tbody>
		<tr><td valign="top">
		<div>
		<div class="wrapper-title">
		<div class="bull-title ">
		<table width="658" class="contentpaneopen">
		<tbody>
		<tr>
		<td width="650" height="89" class="contentheading">
		<h1>Welcome, <?php echo $_SESSION['username']; ?>[<?php echo $_SESSION[type]?>]</h1>
		 <p>&nbsp;</p>
		 <p><?php //echo base64_decode($_GET[msg]);?>
		 <a href="viewprofile1.php"><input name="viewprofile"  type="button" class="header-button"  value="Edit Profile" />
		 </a></p>
		 </tr>
		</tbody>
		</table>
        </div>
        </div>
        <div class="article-indent">
        <div class="clear">
        <table width="633" class="contentpaneopen">
        <tbody><tr>
        <td width="625" colspan="2" valign="top">
		<strong>Nonummy hendrerit maurihasellus portausce suscipitent</strong> 
		        Here you can varius mumc natoque penatibus magnis parturient montes nascetur 
				ridiculus mulla duseugiat.Nonummy hendrerit maurihasellus portausce 
				suscipitent va mumciis natoque penatibus magnis.
                <div>
		</div>
		</td>
        </tr>
        <tr>
        <td colspan="2"><div class="border-link"> <a href="" class="readon">Read More</a> 
		</div></td>
        </tr>
        </tbody>
		</table>
        </div>
        </div>
        
		<div class="article-separator-indent"><span class="article_separator">&nbsp;</span></div>
 		</div>	                                       
	    </td>
		</tr>

		<tr>
		<td valign="top">
		<table cellpadding="0" cellspacing="0" width="100%">
		<tbody>
		<tr>
        <td class="article_column" valign="top" width="100%"><div class="article-indent">
        <div class="clear">
            <table width="643" class="contentpaneopen">
                                                <tbody><tr>
                    <td width="743" colspan="2" valign="top"><div class="col-box 
col-separator clear"><img src="files/MainGujarat.jpg"
 class="img-indent" alt="" /></div>
<div>                    </div></td>
                </tr>
                                                <tr>
                    <td colspan="2"><div class="border-link"> <a 
href=""
 class="readon">
                            Read More                            </a> </div></td>
                </tr>
                            </tbody></table>
        </div>
    </div>
    <div class="article-separator-indent"><span 
class="article_separator">&nbsp;</span></div>
                                                
					             </td>
						
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
    <?php  include("footer.php");?>