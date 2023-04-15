<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Mandap | Partner Search</title>

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

function CheckBlank(){
				
			if (form1.txtLoginId.value==""){
			alert("Please enter Matrimony Id!");
			form1.txtLoginId.focus();
			return false;
			}
}
//-->
</script>
<style type="text/css">
<!--
.style4 {color: #FFFF00; font-size:10px;}
.style9 {
	color: #710143;
	font-weight: bold;
}
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
                  <tr>
				  <td width="99%" valign="top">&nbsp;<?php
					if(isset($_SESSION["me"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage.php' title='Manage Account' style='color: white;'><u>".$_SESSION["me"]["name"]."</u></a>! (".$_SESSION["me"]["id"].") &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
					}
					if(isset($_SESSION["admin"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage.php' title='Manage Account' style='color: white;'><u>".$_SESSION["admin"]["uid"]."</u></a>! &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
					}?></td>
                    
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
                <td align="left" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
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
                <td><img src="images/title_ps.jpg" width="268" height="43" /></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="78%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                      <tr>
                        <td colspan="2" align="left" valign="top"><p class="style9"> Our various search tools will make your partner search much faster and easier. Go ahead and enjoy your search. </p></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      
                      
                      <tr>
                        <td width="15%" align="center" valign="middle"><img src="images/quickSicon.jpg" width="65" height="50" /></td>
                        <td width="85%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="17"><p class="twobig">Quick Search </p></td>
                          </tr>
                          <tr>
                            <td> <p>Search based on the&nbsp;<span class="style9"> 5 most relevant</span>&nbsp;criteria that you would look for in a partner. </p></td>
                          </tr>
                          <tr>
                            <td><p><a href="home_quick_search.php"><img src="images/qsearch.jpg" width="46" height="21" border="0" /></a></p></td>
                          </tr>
                          
                        </table></td>
                      </tr>
					  
					  <tr>
                        <td colspan="2" align="left" valign="top" class="borderbottom">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
					  
					  <tr>
                        <td align="center" valign="middle"><img src="images/advanceSicon.jpg" width="50" height="50" /></td>
                        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="17"><p class="twobig">Advance Search </p></td>
                          </tr>
                          <tr>
                            <td><p> Search prospective partners based on the&nbsp;<span class="style9">12 most important</span><strong>&nbsp;</strong>criteria that you would look for in a partner. </p></td>
                          </tr>
                          <tr>
                            <td><p><a href="advancesearch.php"><img src="images/qsearch.jpg" width="46" height="21" border="0" /></a></p></td>
                          </tr>
                          
                        </table></td>
                      </tr>
                      
                     
                     
                      <tr>
                        <td colspan="2" align="left" valign="top" class="borderbottom">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                     
                      
                      <tr>
                        <td align="center" valign="middle"><img src="images/profileSicon.jpg" width="70" height="60" /></td>
                        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="17"><p class="twobig">Search by Profile ID </p></td>
                          </tr>
                          <tr>
                            <td><form action="search_by_id.php" method="post" name="form1" id="form1" onsubmit="return CheckBlank()">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                
                                <tr>
                                  <td width="18%" align="left" valign="middle"><p><input name="id" id="txtLoginId" tabindex="40" size="20" accesskey="13" onkeypress="javascript:return chkspecialchars()" /></p></td>
                                  <td width="82%" colspan="2" align="left" valign="middle"><p>
                                      
                                    Directly search member of a perticular   Id.</p></td>
                                </tr>
								    <tr>
                            <td><p><input name="go" type="image" class="t2" accesskey="13" tabindex="32" title="Login" src="images/qsearch-2.jpg"/></p></td>
                          </tr>
                              </table>
                            </form></td>
                          </tr>
                      
                        </table></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      
                    </table></td>
                    <td width="22%" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      
                      <tr>
                        <td align="right" valign="top"><p><img src="images/add3.gif" width="185" height="410" /></p></td>
                      </tr>
                      
                    </table></td>
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

 /partnersearch.asp by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 08:31:10 GMT -->
</html>