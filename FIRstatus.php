<?php include("header.php"); ?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<script type="text/javascript" src="javascript/jquery.js"></script>
<link rel="stylesheet"  type="text/css" href="facebox/facebox.css" media="screen" />
<script type="text/javascript" src="facebox/facebox.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loading_image : 'facebox/loading.gif',
        close_image : 'facebox/closeButton.png'
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
.style19 {font-size: 11px; }
-->
</style>
<div id="content">
  <div class="clear">
    <!--right-->
    <!--left-->
    <div id="left">
      <div class="left-indent">
        <div class="clear">
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
                                    <li id="current" class="active item1"> <a href=""><span>Home</span></a></li>
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
              <form action="chkFIRstatus.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h2><span class="componentheading style6"><span class="style10"> Edit  your FIR Details:</span> </span></h2>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="609" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">Name: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="name" type="text" id="name" size="35" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Suspect Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="suspectname" type="text" id="suspectname" size="35" />
                    </span></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Victim Name:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="victimname" type="text" id="victimname" size="35" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="30" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Date:</span> </td>
                    <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3"> </span></td>
                    <td width="74" align="right" bgcolor="#FFFFFF"><span class="style3">Time:</span></td>
                    <td width="296" align="left" bgcolor="#FFFFFF"><input type="text" name="time" id="time"/>
                    </td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Gender:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3"> <span class="style3">
                      <input name="gender" type="text" id="gender" size="24" />
                    </span> </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Your Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <textarea name="address" cols="32" rows="3"  id="address"></textarea>
                    </span></td>
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">City:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="city" type="text" id="city" size="24" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input type="text" name="contactno" id="contactno" maxlength="12" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Crime Location Address:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><textarea name="crimelocation" cols="32" rows="3"  id="crimelocation"></textarea>
                    </td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Choose Id-Proof:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="idproofname" type="text" id="idproofname" size="24" />
                    </span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">Crime Type: </span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="crimetype" type="text" id="crimetype" size="24" />
                    </span></td>
                  </tr>
                  <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Number of Id-Proof:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><input type="text" name="idproofno" id="idproofno" maxlength="12" />
                    </td>
                  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Brief description of incedent:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><textarea name="crimedesc" cols="32" rows="3"  id="crimedesc"></textarea>
                    </td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Photo of crime location:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3"> <a href="registration.php" rel="facebox" title="Click to see photo">
                      <input name="crimephoto1" type="text"  size="35" />
                    </a> </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="32" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Photo of crime location:</span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="crimephoto2" type="text" id="crimephoto2" size="35" />
                    </span></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <input name="OK" type="button" class="header-button" id="OK" value="OK"/>
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