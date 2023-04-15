<?php
session_start();
	include("functions.php");
	
	if(isset($_SESSION["me"]))
		header('Location:home.php');
	else if(isset($_SESSION["admin"]))
		header('Location:admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MangalMandap | Marriage Center for India | Matrimonial website</title>
<META name="description" content="MangalMandap is an online Matrimonial portal where peoples find their prospective soulmate.The site where singles become couples.It's free to sign up,so Register NOW!">

<meta name="keywords" content="Mangal Mandap,Marriage Center for India,matchmaking, matrimony, matrimony portal, matrimony services, matrimony website,Free Online Indian matrimonial website, Matrimonial, shaadi, marriage,matrimony, vivah, Matrimonials for Central India, Agrawal , Brahmin ,Kayastha ,Rajput ,Punjabi Matrimony, Muslim, Sindhi, Marwari, Jaipur, Bhopal, Delhi, Jabalpur, Bilaspur, Lucknow, Bhilai, Agarwal bride, Brahmin bride, Kayastha bride, Rajput bride, Punjabi bride, Sindhi bride, Marwari bride, Agarwal groom, Brahmin groom, Kayastha groom, Rajput groom, Punjabi groom Sindhi groom, Marwari groom, Free Membership, paid Membership">

<link href="style.css" type="text/css" rel="stylesheet" />

<script src="slideshow.js" type="text/javascript"></script>

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



function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
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
.style1 {	color: #8A6676;
	font-weight: bold;
	font-size:12px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
}
.style3 {
	color: #8a6676;
	font-size: 11px;
	font-weight:bold;
}
.style2 {color: #CD3B79; font-size:12px;}
.style4 {color: #FFFF00; font-size:10px;}
.style5 {color: #E72A84}
.style6 {
	color: #C94668;
	font-weight: bold;
	font-size: 14px;
}
.style7 {font-size: 14px}
.style9 {font-size: 11px}

-->
</style>
</head>


              
				
<?php
	
	extract($_POST);
	
	if(isset($submit))
	{								
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
			$result= mysqli_query($conn, "select id from profiles where email='$email' or id='$email' and password='$password'");
			if(mysqli_num_rows($result)==0)
			{	include("top1.php");
				include("remaining.php");
				echo "<script language='Javascript' type='text/javascript'>alert(':-(  Invalid Login Details');</script>";
				
			}
			else
			{	
				include("start_session.php");
				die();								
								
			}
		}
	}
	else{
		include("top1.php");
		include("remaining.php");
	}
?>

				
				
				
				
				
	<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->			

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