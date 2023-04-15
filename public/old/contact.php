<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Mandap | Contact Us</title>

<link href="style.css" type="text/css" rel="stylesheet" />

<script type="text/JavaScript">
<!--
function MM_preloadimages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadimages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.style4 {color: #FFFF00; font-size:10px;}
.style6 {
	color: #5E0038;
	font-size: 14px;
}
.style9 {font-size: 11px}
-->
</style>
</head>

<body onload=MM_preloadimages('images/p_search_h.jpg','images/membership_h.jpg','images/payment1_h.jpg')>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" background="images/top_bg.jpg" bgcolor="#EAE4E6" style="background-repeat:repeat-x;"><table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="mainborder">
      
      <tr>
        <td background="images/header_bg.jpg" style="background-repeat:repeat-x;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="2%" height="81" align="left" valign="top" bgcolor="#F2EDF3"><img src="images/header_bg.jpg" width="22" height="81" /></td>
            <td width="98%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" align="right" valign="top"><img src="images/headerbox_L.jpg" width="18" height="81" /></td>
                <td width="96%" align="right" valign="top" background="images/headerbox_C.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr><td width="99%" valign="top">&nbsp;<?php
				  if(isset($_SESSION["me"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage.php' title='Manage Account' style='color: white;'><u>".$_SESSION["me"]["name"]."</u></a>! (".$_SESSION["me"]["id"].") &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
					}
					if(isset($_SESSION["admin"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage.php' title='Manage Account' style='color: white;'><u>".$_SESSION["admin"]["uid"]."</u></a>! &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
					}?></td>
                    <td width="99%" valign="bottom">&nbsp;</td>
                    <td width="1%" align="right" valign="top"><img src="images/logo_name.jpg" width="262" height="81" /></td>
                  </tr>
                </table></td>
                <td width="2%" align="right" valign="top"><img src="images/headerbox_R.jpg" width="35" height="81" /></td>
              </tr>
              
              
            </table></td>
          </tr>
          <tr>
            <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="left" valign="top" bgcolor="#FFFFFF"><table width="98%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="99%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="7"><img src="images/spacer.gif" width="1" height="4" /></td>
                  </tr>
                  <tr>
                    <td width="12%" align="left" valign="top"><a href=index.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('home','','images/home_h.jpg',1)><img src=images/home.jpg name=home width=103 height=40 border=0 id=home/></a>                    </td>
                    <td width="12%" align="left" valign="top"><a href=registration.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('reg','','images/registration_h.jpg',1)><img src=images/registration.jpg name=reg width=126 height=40 border=0 id=reg/></a>                    </td>
                    <td width="15%" align="left" valign="top"><a href=memberlogin.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('log','','images/login_h.jpg',1)><img src=images/login.jpg name=log width=108 height=40 border=0 id=log/></a>                    </td>
                    <td width="16%" align="left" valign="top"><a href="partnersearch.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','images/p_search_h.jpg',1)"><img src="images/p_search.jpg" name="Image22" width="159" height="40" border="0" id="Image22" /></a></td>
                    <td width="14%" align="left" valign="top"><a href="Membership.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','images/membership_h.jpg',1)"><img src="images/membership.jpg" name="Image23" width="133" height="40" border="0" id="Image23" /></a></td>
                    <td width="17%" align="left" valign="top"><a href="payment.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image24','','images/payment1_h.jpg',1)"><img src="images/payment1.jpg" name="Image24" width="167" height="40" border="0" id="Image24" /></a></td>
                    <td width="14%" align="left" valign="top"><a href=contact.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('log','','images/contact_h.jpg',1)><img src=images/contact.jpg name=log width=160 height=40 border=0 id=log/></a>                    </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><img src="images/title_contact.jpg" width="215" height="44" /></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="61%"><table width="79%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><p class="twobig">Head Office</p></td>
                      </tr>
                      <tr>
                        <td colspan="2"></td>
                        </tr>
                      <tr>
                        <td colspan="2"><img src="images/hori_sap.jpg" width="400" height="1" /></td>
                        </tr>
                      <tr>
                        <td colspan="2"><p><strong>Mangal Mandap.com</strong></p></td>
                        </tr>
                      <tr>
                        <td width="7%" align="center" valign="middle"><img src="images/add_icon.jpg" width="25" height="26" /></td>
                        <td width="93%"><p>                     
                      
                         
                          Madan Mahal Road Jabalpur (MP) 482001</p>
                          </td>

                      </tr>
                      <tr>
                        <td align="center" valign="middle"><img src="images/phone_icon.jpg" width="25" height="23" /></td>
                        <td><p>
                          Mobile: +91-7354933132</p></td>
                      </tr


                      <tr>
                        <td align="center" valign="middle"><img src="images/web_icon.jpg" width="25" height="22" /></td>
                        <td><p>E-mail: <a href="mailto:mangalmandap2016@gmail.com" class="forgot">mangalmandap2016@gmail.com</a></p></td>
  

                   

                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                         
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="39%" align="center" valign="top"><img src="images/contactus.jpg" width="307" height="256" /></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      
      
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="images/down_bg.jpg" bgcolor="#A20055" style="background-repeat:repeat-x"><table width="1002" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="24" align="center" valign="middle"><script src="downlink.js" type="text/javascript" language="javascript"></script></td>
      </tr>
      <tr>
         
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57894cf03daf03937c742256/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>


</html>
