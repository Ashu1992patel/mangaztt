<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--  Wed, 03 Jun 2015 08:31:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Mandap | Membership</title>
<META name="description" content="MangalMandap is an online Matrimonial portal where peoples find their prospective soulmate.The site where singles become couples.It's free to sign up,so Register NOW!">

<meta name="keywords" content="Mangal Mandap,Marriage Center for India,matchmaking, matrimony, matrimony portal, matrimony services, matrimony website,Free Online Indian matrimonial website, Matrimonial, shaadi, marriage,matrimony, vivah, Matrimonials for Central India, Agrawal , Brahmin ,Kayastha ,Rajput ,Punjabi Matrimony, Muslim, Sindhi, Marwari, Jaipur, Bhopal, Delhi, Jabalpur, Bilaspur, Lucknow, Bhilai, Agarwal bride, Brahmin bride, Kayastha bride, Rajput bride, Punjabi bride, Sindhi bride, Marwari bride, Agarwal groom, Brahmin groom, Kayastha groom, Rajput groom, Punjabi groom Sindhi groom, Marwari groom, Free Membership, paid Membership">

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
.style9 {
	color: #710143;
	font-weight: bold;
	font-size: 13px;
}
.style8 {color: #333333}
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
            <td align="left" valign="top" bgcolor="#FFFFFF"><table width="99%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="7"><img src="images/spacer.gif" width="1" height="4" /></td>
                  </tr>
                  <tr><center>
                    <td align="right" valign="top"><a href=index.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('home','','images/home_h.jpg',1)><img src=images/home.jpg name=home width=103  align="right" height=40 border=0 id=home/></a>
                    </td>
                    <td  width="5%" align="left" valign="top"><a href=registration.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('reg','','images/registration_h.jpg',1)><img src=images/registration.jpg  align="right" name=reg width=126 height=40 border=0 id=reg/></a>
                    </td>
                   
                    <td width="5%" align="left" valign="top"><a href="partnersearch.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','images/p_search_h.jpg',1)"><img src="images/p_search.jpg"  align="right" name="Image22" width="159" height="40" border="0" id="Image22" /></a></td>
                    <td width="5%" align="left" valign="top"><a href="membership.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','images/membership_h.jpg',1)"><img src="images/membership.jpg" name="Image23" width="133" height="40" border="0" id="Image23" /></a></td>
                    <td width="5%" align="left" valign="top"><a href="payment.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image24','','images/payment1_h.jpg',1)"><img src="images/payment1.jpg" name="Image24" width="167" height="40" border="0" id="Image24" /></a></td>
                    <td width="5%" align="left" valign="top"><a href=contact.php onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('log','','images/contact_h.jpg',1)><img src=images/contact.jpg name=log width=160 height=40 border=0 id=log/></a>
                    </td>
					<td width="5%">&nbsp;</td></center>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><img src="images/title_membership.jpg" width="239" height="43" /></td>
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
                        <td width="100%" align="left" valign="top">
                          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>&nbsp;</td>
                              <td><p><span class="redhead style8"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Membership Scheme for Search Life Partner</strong></span></p></td>
                            </tr>
                            <tr>
                              <td width="3%">&nbsp;</td>
                              <td width="97%">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td valign="top">
                                  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="24" background="images/left.php" style="background-repeat:repeat-y">&nbsp;</td>
                                      <td width="548" valign="top" bgcolor="#FFE8FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td colspan="2" valign="top"><p class="twobig"><strong>
                                                Free Membership Plan
                                            </strong></p></td>
                                          </tr>
                                          <tr>
                                            <td width="58%" valign="top"><p class="style9">
                                                
                                            </p></td>
                                            <td width="42%" align="right" valign="top"><p class="style9">
                                                
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top"><p class="style9">
                                                
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top"><p>
                                                <p><img src=images/arrows.jpg width=8 height=8/> You can Add and Manage your displayed profiles.</p><p><img src=images/arrows.jpg width=8 height=8/>&nbsp;Edit your profile.</p><p><img src=images/arrows.jpg width=8 height=8/>&nbsp;Add Your 3 Pics</p>
                      
                                            </p></td>
                                          </tr>
                                          
                                          <tr>
                                            <td colspan="2" valign="top"><p align="justify">Your profile will be available to all our paid and free members. There will be one way traffic. Our paid members can get your details from&nbsp;<span class="sitename">MangalMandap.com</span>&nbsp;and can contact you. If you want to get contact details of our members you can get our membership plan . </p>                                              </td>
                                          </tr>
                                          <tr>
                                            <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p><a href="payment.php"><img src="images/joinnow.jpg" width="83" height="18" border="0" /></a></p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                      </table></td>
                                      <td width="24" background="images/right.php" style="background-repeat:repeat-y">&nbsp;</td>
                                    </tr>
                                  </table>
                                
                                  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="24" background="images/left.php" style="background-repeat:repeat-y">&nbsp;</td>
                                      <td width="548" valign="top" bgcolor="#FFE8FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td colspan="2" valign="top"><p class="twobig"><strong>
                                                Golden Membership Plan
                                            </strong></p></td>
                                          </tr>
                                          <tr>
                                            <td width="58%" valign="top"><p class="style9">
                                                Duration - 3 Months
                                            </p></td>
                                            <td width="42%" align="right" valign="top"><p class="style9">
                                                Costs Rs. 8000/-
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top"><p class="style9">
                                                Total Contact - 70
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top">
                                                <p><img src=images/arrows.jpg width=8 height=8/>Get additional 70 verified contact details directly from our website www.managalmandap.com Your profile will be available to all our paid and free members. Our paid members can get your details from MangalMandap.com and can contact you. And you can also to get contact details of your desired profile.</p>
                                            </td>
                                          </tr>
                                          
										  
										  
                                          <tr>
                                            <td colspan="2" valign="top"><p align="justify">Your profile will be available to all our paid and free members. There will be one way traffic. Our paid members can get your details from&nbsp;<span class="sitename">MangalMandap.com</span>&nbsp;and can contact you. If you want to get contact details of our members you can get our membership plan . </p></td>
                                          </tr>
                                          <tr>
                                            <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p><a href="payment.php"><img src="images/joinnow.jpg" width="83" height="18" border="0" /></a></p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                      </table></td>
                                      <td width="24" background="images/right.php" style="background-repeat:repeat-y">&nbsp;</td>
                                    </tr>
                                  </table>
								  
								  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="24" background="images/left.php" style="background-repeat:repeat-y">&nbsp;</td>
                                      <td width="548" valign="top" bgcolor="#FFE8FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td colspan="2" valign="top"><p class="twobig"><strong>
                                                Golden Super Membership Plan
                                            </strong></p></td>
                                          </tr>
                                          <tr>
                                            <td width="58%" valign="top"><p class="style9">
                                                Duration - 6 Months
                                            </p></td>
                                            <td width="42%" align="right" valign="top"><p class="style9">
                                                Costs Rs. 16000/-
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top"><p class="style9">
                                                Total Contact - 140
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top">
                                                <p><img src=images/arrows.jpg width=8 height=8/>Get additional 140 verified contact details directly from our website www.managalmandap.com Your profile will be available to all our paid and free members. Our paid members can get your details from MangalMandap.com and can contact you. And you can also to get contact details of your desired profile.</p>
                                            </td>
                                          </tr>
                                          
										  
										  
                                          <tr>
                                            <td colspan="2" valign="top"><p align="justify">Your profile will be available to all our paid and free members. There will be one way traffic. Our paid members can get your details from&nbsp;<span class="sitename">MangalMandap.com</span>&nbsp;and can contact you. If you want to get contact details of our members you can get our membership plan . </p></td>
                                          </tr>
                                          <tr>
                                            <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p><a href="payment.php"><img src="images/joinnow.jpg" width="83" height="18" border="0" /></a></p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                      </table></td>
                                      <td width="24" background="images/right.php" style="background-repeat:repeat-y">&nbsp;</td>
                                    </tr>
                                  </table>
								  
								  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="24" background="images/left.php" style="background-repeat:repeat-y">&nbsp;</td>
                                      <td width="548" valign="top" bgcolor="#FFE8FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td colspan="2" valign="top"><p class="twobig"><strong>
                                                Diamond Membership Plan
                                            </strong></p></td>
                                          </tr>
                                          <tr>
                                            <td width="58%" valign="top"><p class="style9">
                                                Duration - 12 Months
                                            </p></td>
                                            <td width="42%" align="right" valign="top"><p class="style9">
                                                Costs Rs. 21000/-
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top"><p class="style9">
                                                Total Contact - 200
                                            </p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top">
                                                <p><img src=images/arrows.jpg width=8 height=8/>Get additional 200 verified contact details directly from our website www.managalmandap.com Your profile will be available to all our paid and free members. Our paid members can get your details from MangalMandap.com and can contact you. And you can also to get contact details of your desired profile.</p>
                                            </td>
                                          </tr>
                                          
										  
										  
                                          <tr>
                                            <td colspan="2" valign="top"><p align="justify">Your profile will be available to all our paid and free members. There will be one way traffic. Our paid members can get your details from&nbsp;<span class="sitename">MangalMandap.com</span>&nbsp;and can contact you. If you want to get contact details of our members you can get our membership plan . </p></td>
                                          </tr>
                                          <tr>
                                            <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p><a href="payment.php"><img src="images/joinnow.jpg" width="83" height="18" border="0" /></a></p></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                                          </tr>
                                      </table></td>
                                      <td width="24" background="images/right.php" style="background-repeat:repeat-y">&nbsp;</td>
                                    </tr>
                                  </table>
                                
                                  </td>
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
