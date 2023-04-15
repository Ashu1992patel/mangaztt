<?php
session_start();
include("functions.php");
if(isset($_SESSION["me"])){
	echo "<script> alert('Already logged in!!!');</script>";
	redirect("home.php");
}elseif(isset($_SESSION["admin"])){
	echo "<script> alert('Already logged in!!!');</script>";
	redirect("admin.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MangalMandap | Marriage Center for India | Matrimonial website</title>
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

function chk4id()
{
	//alert (event.keyCode);
	if ((event.keyCode==9)||(event.keyCode==8)||(event.keyCode==50)||(event.keyCode==46)||(event.keyCode==189)||(event.keyCode==190)||(event.keyCode==110)||(event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 96 && event.keyCode <= 105)||(event.keyCode >= 65 && event.keyCode <= 90)||(event.keyCode >= 37 && event.keyCode <= 40))
	{ 
		event.returnValue = true;
	}
	else
	{
		event.keyCode=0;
		event.returnValue = false;
	} 
}

function chk4schar()
{
	//alert (event.keyCode);
	if ((event.keyCode >= 33 && event.keyCode <= 42)||(event.keyCode==189)||(event.keyCode==94)||(event.keyCode==45))
	{ 
		event.keyCode=0;
		event.returnValue = false;
	}
	else
	{
		event.returnValue = true;
	} 
}

function chk4pass()
{
	//alert(event.keyCode);
	if ((event.keyCode==222)||(event.keyCode==189)||(event.keyCode==109)||(event.keyCode==32)||(event.keyCode==186))
	{ 
		event.keyCode=0;
		event.returnValue = false;
	}
	else
	{
		//alert(event.keyCode);
		event.returnValue = true;
	} 
}

function validateFields(){
			frm=document.loginForm;
			
			if (frm.email.value==""){
			alert("Please enter your Login/E-mail Id!");
			frm.email.focus();
			return false;
			}
			/*else
				{
				var main_email=frm.email				
				if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(main_email.value))){
	 			alert('Please Enter a valid Email Address!');
	 			main_email.focus();
	 			return false;
				}
	 		}*/
					
			if (frm.password.value==""){
			alert("Please enter your password!");
			frm.password.focus();
			return false;
			}
			else
			{
				var pass =new String(frm.password.value);
				if (pass.length<4){
				alert("Password must have minimum 4 characters");
				frm.password.focus();
				return false;
				}
			}
}

//-->
</script>
<style type="text/css">
<!--
.style4 {color: #FFFF00; font-size:10px;}
.style7 {font-size: 13px}
-->
</style>
</head>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false" onload=MM_preloadimages('images/p_search_h.jpg','images/membership_h.jpg','images/payment1_h.jpg')>
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
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="62%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                      <tr>
                        <td width="100%" align="left" valign="top"><p class="onebig1"> Administrator Login here </p></td>
                      </tr>
                      <tr>
                        <td align="center" valign="middle">
						<form action="start_session1.php" id="loginForm" name="loginForm" method="post"  onsubmit="return validateFields()">
                          <table cellspacing="0" cellpadding="0" width="80%" align="center" 
            border="0">
                            <tbody>
                              <tr>
                                <td colspan="3" align="left"><p>
                                  
                                </p></td>
                                </tr>
                              <tr>
                                <td align="right">&nbsp;</td>
                                <td colspan="2" align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="right"><p align="right" class="style5"><strong>Login ID :&nbsp; </strong></p></td>
                                <td colspan="2" align="left"><p><font face="Arial, Helvetica, sans-serif" size="1">
                                    <input name="uid" id="email" tabindex="1" size="16" onkeydown="javascript: return chk4id();" onkeypress="javascript:return chk4schar();"/>
                                </font></p></td>
                              </tr>
                              <tr>
                                <td align="right">&nbsp;</td>
                                <td colspan="2" align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="22" align="right"><p align="right" class="style3"><strong>Password : &nbsp;</strong></p></td>
                                <td height="22" colspan="2" align="left"><p><font face="Arial, Helvetica, sans-serif" 
                  size="1">
                                    <input name="pass" type="password" id="password" tabindex="2" onkeydown="javascript: return chk4pass();" size="16" maxlength="14" />
                                </font></p></td>
                              </tr>
                              <tr>
                                <td align="right" >&nbsp;</td>
                                <td align="left">&nbsp;</td>
                                <td align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="26%" height="15" align="right" ><p>
                                    </div>
                                </p></td>
                                <td width="7%" align="left"><p>
                                  <input title="Login" accesskey="13" 
                  onclick="return validateFields()" tabindex="3" type="submit" 
                  src="images/go1.gif" name="login"  value="Login" width="14" height="14" border="0" style="border:none"/>
                                </p></td>
                                <td width="67%" align="left"><p></p></td>
                              </tr>
                              <tr>
                                <td height="15" align="right" >&nbsp;</td>
                                <td colspan="2" align="left">&nbsp;</td>
                              </tr>
                              <tr>
                                
                              </tr>
                            </tbody>
                          </table>
                        </form></td>
                      </tr>
					  
					  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td>&nbsp;</td>
              </tr>
                      
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
                      
                    </table></td>
                    <td width="38%" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      
                      <tr>
                        <td align="center" valign="middle"><p><img src="images/contact_img.jpg" width="327" height="236" /></p></td>
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


</html>