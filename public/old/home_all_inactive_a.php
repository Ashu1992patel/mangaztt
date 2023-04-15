<?php
	session_start();
	include("functions.php");
	if(!isset($_SESSION["admin"])){
		redirect('index.php');
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Mandap | Inactive Profiles</title>

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
.style26 {font-size: 16px}
.style28 {color: #FFFF00}
.style31 {font-size: 12px}
.style37 {
	font-size: 16px;
	font-weight: bold;
	color: #9A005A;
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
					if(isset($_SESSION["admin"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage_a.php' title='Manage Account' style='color: white;'><u>".$_SESSION["admin"]["uid"]."</u></a>! &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
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
                <td><table width="99%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="7"><img src="images/spacer.gif" width="1" height="4" /></td>
                  </tr>
                  
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              
              <tr>
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="20%" valign="top" class="sidelink"><style type="text/css">

<!--

.style1 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #9A005A;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #9A005A;
}
a:hover {
	text-decoration: none;
	color: #505050;
}
a:active {
	text-decoration: none;
	color: #9A005A;
}
.style17 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {
	font-size: 12px;
	color: #9A005A;
}
A.service:link{color:#ffffff;text-decoration:none;cursor:default;FONT-SIZE:12px; font-weight:bold;}
A.service:visited{color:#ffffff;text-decoration:none;cursor:default;FONT-SIZE:12px; font-weight:bold;}
A.service:hover{color:#ffff00;text-decoration:none;cursor:hand;FONT-SIZE:12px; font-weight:bold;}
-->
</style>
<script language="javascript" type="text/javascript">
function checkOK(){
if (confirm("Do you want to Delete the member(s) Profile? If you press Yes then you can not access this profile.\nIt will completely remove from our database!"))
	return true;
else
	return false;
}

function CheckBlank(){
				
			if (formbyid.txtLoginId.value==""){
			alert("Please enter Matrimony Id!");
			formbyid.txtLoginId.focus();
			return false;
			}
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



</script>
<table width="190" cellpadding="2" cellspacing="0">
   
  <tr>
    <td height="25" bgcolor="#9A005A"><p class="style17">Profile Search </p></td>
  </tr>
  
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="admin.php"  class="blink2">Home</a></p></td>
  </tr>
  
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_quick_search_a.php"  class="blink2">Quick Search</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_advance_search_a.php"  class="blink2">Advance Search</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_all_active_a.php"  class="blink2">All Active Profiles</a></p></td>
  </tr>
   <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_all_inactive_a.php"  class="blink2">All Inactive Profiles</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="delete_a.php"  class="blink2">Delete a Profile</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="manage_a.php" class="blink2">Change Password</a></p></td>
  </tr>
  <tr>
    <td height="66" align="left" valign="top" class="sachingray"><form ondragstart="return false" onselectstart="return false" oncontextmenu="return false" action="" method="post" name="search_by_id" id="formbyid" style="margin-left:0; margin-right:0; margin-bottom:0; margin-top:">
      <p align="left"><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;<span class="style2">&nbsp;<span class="style4">View profile by ID</span></span><br />
        &nbsp; &nbsp;
        <input tabindex="40" size="12" name="id" onkeydown="javascript: return chk4id();" onkeypress="javascript:return chk4schar();" />
        <input name="search" type="submit" id="submit1" accesskey="13" value="Go" onclick="return CheckBlank()"/>
        </p>
    </form></td>
  </tr>
  <tr>
    <td height="23" align="left" class="sachingray">&nbsp;</td>
  </tr>
</table>
</td>
<td width="80%" align="center" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="3">

<?php
$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
			


			extract($_POST);
			if(isset($search) || isset($show))
				include("search_by_id_a.php");
			else
				include("all_inactive_a.php");
			
		}
?>

</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td valign="top" class="style26">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      
      
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="images/down_bg.jpg" bgcolor="#A20055" class="style26" style="background-repeat:repeat-x"><table width="1002" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td height="24" align="center" valign="middle"><script src="downlink.js" type="text/javascript" language="javascript"></script></td>
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