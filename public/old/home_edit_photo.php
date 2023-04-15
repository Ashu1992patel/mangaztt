<?php
	session_start();
	include("functions.php");
	if(!isset($_SESSION["me"])){
		redirect('index.php');
	}
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Mandap | Edit Photos</title>

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
        <td height="50" align="center" valign="middle" bgcolor="#87004F" class="phead">MangalMandap.com, the site where singles become couples. It's free to sign up, so Register NOW! </td>
      </tr>
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
                <td><table width="80%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="7"><img src="images/spacer.gif" width="1" height="4" /></td>
                  </tr>
                  <tr>
					<td width="10%" align="right" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td width="5%" align="left" valign="top"><a href="index.php" onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('home','','images/home_h.jpg',1)><img src=images/home.jpg name=home width=103 height=40 border=0 id=home/></a>                    </td>
                    <td width="5%" align="left" valign="top"><a href="registration.php" onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('reg','','images/registration_h.jpg',1)><img src=images/registration.jpg name=reg width=126 height=40 border=0 id=reg/></a>                    </td>
                    <td width="5%" align="left" valign="top"><a href="home_quick_search.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','images/p_search_h.jpg',1)"><img src="images/p_search.jpg" name="Image22" width="159" height="40" border="0" id="Image22" /></a></td>
                    <td width="5%" align="left" valign="top"><a href="membership.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','images/membership_h.jpg',1)"><img src="images/membership.jpg" name="Image23" width="133" height="40" border="0" id="Image23" /></a></td>
                    <td width="5%" align="left" valign="top"><a href="payment.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image24','','images/payment1_h.jpg',1)"><img src="images/payment1.jpg" name="Image24" width="167" height="40" border="0" id="Image24" /></a></td>
                    <td width="5%" align="left" valign="top"><a href="contact.php" onmouseout=MM_swapImgRestore() onmouseover=MM_swapImage('log','','images/contact_h.jpg',1)><img src=images/contact.jpg name=log width=160 height=40 border=0 id=log/></a>                    </td>
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
                <td valign="top">&nbsp;</td>
              </tr>
              
              <tr>
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="20%" valign="top" style="height: auto;" class="sidelink"><style type="text/css">

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
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_quick_search.php"  class="blink2">Quick Search</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_advance_search.php"  class="blink2">Advance Search</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_my_profile.php" class="blink2">My Profile</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="edit_profile.php" class="blink2">Edit Profile</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="home_edit_photo.php"  class="blink2">Upload Photographs</a></p></td>
  </tr>
  <tr>
    <td height="25" align="left" class="sachingray"><p><img src="images/arrows-2.jpg" width="8" height="8" />&nbsp;&nbsp;<a href="manage.php" class="blink2">Change Password</a></p></td>
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
			$check_sql="SELECT active FROM activate WHERE id=".$_SESSION["me"]["id"];
			$check=mysqli_fetch_assoc(mysqli_query($conn, $check_sql));
			if($check["active"]=="no")
			{
				echo "<div style='color: red; font-size: 125%;'>:-(  Your profile is not yet activated! Please confirm payment with the admin.</div>";
				echo '<script type="text/javascript">alert(":-(  Your profile is not yet activated! Please confirm payment with the admin.");</script>';
				
				
		extract($_POST);
		
		
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
			echo "<table class='results'>";
			
			$pic_sql="SELECT pic1, pic2, pic3 FROM images WHERE id=".$_SESSION["me"]["id"];
			$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
			
			echo "<tr><div style='color: purple; padding: 0 5px;' align='left'><strong><u>".$_SESSION["me"]["name"]."</u> (".$_SESSION["me"]["id"].")</strong></div></tr>";
			echo "<tr valign='top'>";
				
			echo "<br>";
				
			echo "<td><div class='image_box'><img src='".$pic["pic1"]."' class='image1' align='left' alt='Image Protected'></div></td>";
			echo "<td><div class='image_box'><center><img src='".$pic["pic2"]."' class='image1' alt='Image Protected'></center></div></td>";
			echo "<td><div class='image_box'><img src='".$pic["pic3"]."' class='image1' alt='Image Protected' align='right'></div></td></tr>";
			
			
		
			
		if(isset($upload))
		{
				
				extract($_POST);
				$check = getimagesize($_FILES["pic"]["tmp_name"]);
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}	
				
					
				$count = 1;
				$target_dir = "uploads/";
				foreach ($_FILES["pic"]["error"] as $key => $error) 
				{	
					$target_file = $target_dir . basename($_FILES["pic"]["name"][$key]);
		
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					if (file_exists($target_file)) {
						echo "Sorry, file ".basename($_FILES["pic"]["name"][$key])." already exists.<br>";
						$uploadOk = 0;
					} 
		
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
						echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
						$uploadOk = 0;
					}
					if($uploadOk == 1){
					if ($error == UPLOAD_ERR_OK)
					{
						$tmp_name = $_FILES["pic"]["tmp_name"][$key];
						$name = $_FILES["pic"]["name"][$key];
						move_uploaded_file($tmp_name, "uploads/$name");
						rename("uploads/".$name, "uploads/".$_SESSION["me"]["id"]."_".$count.".jpg");
			
						echo "<div style='color: green;'>Image ".$count.":  Uploaded Successfully!!!</div>";
						$tmp_field="uploads/".$_SESSION["me"]['id']."_".$count.".jpg";
						$tmp_sql="UPDATE images SET pic".$count."=\"".$tmp_field."\" WHERE id=\"".$_SESSION["me"]["id"]."\"";
						$count++;
						mysqli_query($conn, $tmp_sql);
					}
					}
				}
				
			
			mysqli_close($conn);
		}
		}
		
			include("edit_photo_form.php");
		
	
			}
			else
			{
				extract($_POST);
				if(isset($search) || isset($show))
					include("search_by_id.php");
				else
				{
		extract($_POST);
		
		
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
			echo "<table class='results'>";
			
			$pic_sql="SELECT pic1, pic2, pic3 FROM images WHERE id=".$_SESSION["me"]["id"];
			$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
			
			echo "<tr><div style='color: purple; padding: 0 5px;' align='left'><strong><u>".$_SESSION["me"]["name"]."</u> (".$_SESSION["me"]["id"].")</strong></div></tr>";
			echo "<tr valign='top'>";
				
			echo "<br>";
				
			echo "<td><div class='image_box'><img src='".$pic["pic1"]."' class='image1' align='left' alt='Image Protected'></div></td>";
			echo "<td><div class='image_box'><center><img src='".$pic["pic2"]."' class='image1' alt='Image Protected'></center></div></td>";
			echo "<td><div class='image_box'><img src='".$pic["pic3"]."' class='image1' alt='Image Protected' align='right'></div></td></tr>";
			
			
		
			
		if(isset($upload))
		{
				
				extract($_POST);
				$check = getimagesize($_FILES["pic"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}	
				
					
				$count = 1;
				$target_dir = "uploads/";
				foreach ($_FILES["pic"]["error"] as $key => $error) 
				{	
					$target_file = $target_dir . basename($_FILES["pic"]["name"][$key]);
		
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					if (file_exists($target_file)) {
						echo "Sorry, file ".basename($_FILES["pic"]["name"][$key])." already exists.<br>";
						$uploadOk = 0;
					} 
		
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
						echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
						$uploadOk = 0;
					}
					if($uploadOk == 1){
					if ($error == UPLOAD_ERR_OK)
					{
						$tmp_name = $_FILES["pic"]["tmp_name"][$key];
						$name = $_FILES["pic"]["name"][$key];
						move_uploaded_file($tmp_name, "uploads/$name");
						rename("uploads/".$name, "uploads/".$_SESSION["me"]["id"]."_".$count.".jpg");
			
						echo "<div style='color: green;'>Image ".$count.":  Uploaded Successfully!!!</div>";
						$tmp_field="uploads/".$_SESSION["me"]['id']."_".$count.".jpg";
						$tmp_sql="UPDATE images SET pic".$count."=\"".$tmp_field."\" WHERE id=\"".$_SESSION["me"]["id"]."\"";
						$count++;
						mysqli_query($conn, $tmp_sql);
					}
					}
				}
				
			
			mysqli_close($conn);
		}
		}
		
			include("edit_photo_form.php");
		
		
	}
			}
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