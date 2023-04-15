<?php
session_start();
include("functions.php");
	
	//if(isset($_SESSION["me"]))
	  //header('Location:home.php');
		
?>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangal Ma (Marriage Center for Central  India)</title>

<link href="style.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript">
function htplace()
		{
		document.form1.ht.value=document.form1.height.options[document.form1.height.selectedIndex].text;
		//alert(document.form1.ht.value);
		true;
		}

function validateFields()
{
	frm=document.form1;		
	//alert(document.form1.gender.value);
	
	if (frm.email.value=="")
	{
		alert("Please enter your E-mail Id!");
		frm.email.focus();
		return false;
	}
	else
	{
		var main_email=frm.email				
		if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(main_email.value))){
		alert('Please Enter a valid Email Address!');
		main_email.focus();
		return false;
		}
	 }
				
	if (frm.password.value==""){
	alert("Please enter your password!");
	frm.password.focus();
	return false;
	}
	else
	{
		var pass =new String(frm.password.value);
		if (pass.length<5){
		alert("Password must have minimum 5 characters");
		frm.password.focus();
		return false;
		}
	}
	
	if (frm.password1.value==""){
	alert("Please enter your confirm password!");
	frm.password1.focus();
	return false;
	}
	else
	{
		var cpass =new String(frm.password1.value);
		if (cpass.length<5){
		alert("Confirmation Password must have minimum 5 characters!");
		frm.password.focus();
		return false;
		}
	}	
	if (frm.password.value!=frm.password1.value){	
		alert("Password confirmation is wrong!");
		frm.password1.focus();
		return false;
	}
	
		
	if (frm.name.value==""){
	alert("Please enter your name!");
	frm.name.focus();
	return false;
	}
	
	if (frm.day.value=="0" || frm.month.value=="0" || frm.year.value=="0"){
	alert("Please enter your age or select your Date of birth!");
	frm.txtage.focus();
	return false;
	}
	
	if (frm.height.value==0){
			alert("Please select your height!");
			frm.height.focus();
			return false;
			}
			
	if ((frm.status[0].checked==false)&&(frm.status[1].checked==false)&&(frm.status[2].checked==false)&&(frm.status[3].checked==false))  {
	alert("Please select your marital status!");
	//frm.status.focus();
	return false;
	}
	
	if((frm.children.value=="1") || (frm.children.value=="2") || (frm.children.value=="3") || (frm.children.value=="4") || (frm.children.value=="Above")){
	//alert(frm.living.value);
	if (frm.living.value==""){
		alert("Please select childrenren living status!");
		return false;
		}
	}
	
	if (frm.religion.value=="0"){
	alert("Please select your religion!");
	frm.religion.focus();
	return false;
	}
	
	if (frm.caste.value=="0"){
			alert("Please Select Caste!");
			frm.caste.focus();
			return false;
			}
			
		if (frm.language.value=="0"){
			alert("Please Select Mother Tongue!");
			frm.language.focus();
			return false;
			}	
				
			if (frm.education.value=="0"){
			alert("Please select Educational detail!");
			frm.education.focus();
			return false;
			}
			
			if (frm.occupation.value=="0"){
			alert("Please select your Occupation!");
			frm.occupation.focus();
			return false;
			}
			
			if (frm.salary.value=="0"){
			alert("Please enter your anual income!");
			frm.salary.focus();
			return false;
			}
			
					
if ((frm.employed_in[0].checked==false)&&(frm.employed_in[1].checked==false)&&(frm.employed_in[2].checked==false)&&(frm.employed_in[3].checked==false)&&(frm.employed_in[4].checked==false)){
	alert("Please select option for employement!");
	//frm.employed_in.focus();
	return false;
	}
	
	if (frm.state.value=="0"){
	alert("Please select your Residing state!");
	frm.state.focus();
	return false;
	}
	
	if (frm.city.value==""){
	alert("Please enter City name!");
	frm.city.focus();
	return false;
	}
	
	if (frm.address.value==""){
	alert("Please enter your permanent Address!");
	frm.address.focus();
	return false;
	}
	
	if (frm.mob.value==""){
	alert("You should mention atleast one contct No.!");
	frm.mob.focus();
	return false;
	}
	
	if (frm.chkTerms.checked){
		return true;
		}
	else
		{
		alert("Please check the terms and conditions!");
		frm.chkTerms.focus();
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
		
function chknum()
	{
		if (event.keyCode>=48 && event.keyCode<=57) 
		{ 
		event.returnValue = true;
		}
		else
		{
			event.returnValue = false;
		}
	}

function chkspecialchars(){
		if ((event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 97 && event.keyCode <= 122)||(event.keyCode >= 65 && event.keyCode <= 90)||(event.keyCode ==95)||(event.keyCode ==32)||(event.keyCode ==46))
		{ 
		event.returnValue = true;
		}
		else
		{
			//alert(event.keyCode);
			event.keyCode=0;
			event.returnValue = false;
		}
	}

function ChkMarriedOption()
{
	if (document.form1.status[0].value=="Never Married")
		{
			document.form1.living[0].disabled=true;
			document.form1.living[1].disabled=true;
			document.form1.children.disabled=true;
		}
		return true;	
}

function childrenenable()
{
			document.form1.living[0].disabled=false;
			document.form1.living[1].disabled=false;
			document.form1.children.disabled=0;
			
		return true;
}	

function setLiving()
{
		if (document.form1.children.value!="None")
		{
			document.form1.living[0].checked=true;
		}
		else
		{
			document.form1.living[0].checked=false;
			document.form1.living[1].checked=false;
		}
		return true;
}	


</script>
<script type="text/JavaScript">




function MM_preloadimages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadimages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

</script>
<style type="text/css">
<!--
.style4 {color: #FFFF00; font-size:10px;}
.style12 {font-weight: bold}
.style13 {color: #B40703}
.style14 {color: #666666; font-size: 10px; }
.style16 {font-weight: bold; font-size: 9px; }
.style18 {font-weight: bold}
.style21 {font-weight: bold}
.style27 {	font-size: 12;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {font-size: 10px}
-->
</style>



</head>

<body>








                  
                    
					<?php
						
							include("top.php");
							$children= 0;
							$living = "N/A";
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
								$result= mysqli_query($conn, "select * from profiles where email='$email'");
								if(mysqli_num_rows($result)>0)
								{
									echo "<div style='color: red; font-size: 130%;'><br>:-(<br>This E-mail is already registered with us!!! Use a different one.</div>";
									include("reg_form.php");
								}
								else
								{	
									$dob=$year."-".$month."-".$day;
									
							
									if(($status == "never married") || $children == 0)
										$add = "INSERT INTO profiles (email,password,name,gender,dob,height,status,religion,caste,subcaste,manglik,language,education,education_detail,occupation,occupation_detail,salary,employed_in,state,city,address,mob,mob2,country,citizenship)VALUES ('$email','$password','$name','$gender','$dob','$height','$status','$religion','$caste','$subcaste','$manglik','$language','$education','$education_detail','$occupation','$occupation_detail','$salary','$employed_in','$state','$city','$address','$mob','$mob2','$country','$citizenship')";
									else
										$add = "INSERT INTO profiles (email,password,name,gender,dob,height,status,children,living,religion,caste,subcaste,manglik,language,education,education_detail,occupation,occupation_detail,salary,employed_in,state,city,address,mob,mob2,country,citizenship)VALUES ('$email','$password','$name','$gender','$dob','$height','$status','$children','$living','$religion','$caste','$subcaste','$manglik','$language','$education','$education_detail','$occupation','$occupation_detail','$salary','$employed_in','$state','$city','$address','$mob','$mob2','$country','$citizenship')";
									if($conn->query($add) === TRUE)
									{	
										echo "<div class='confirm'>Congratulations!!! You've been registered successfully!</div>";
										echo "<div class='error'>:-( Your profile is not yet activated! Confirm payment to activate your profile and get contact numbers.</div>";
										echo "<div class='confirm'>But, you can still carry on with rest of profile creation, while we are waiting for your payment confirmation...</div>";
										
										include("registered.php");
										
										include("reg_form2.php");

									}
									else
										echo "Error: ".$add."<br>".$conn->error;
				
								}
								}
								mysqli_close($conn);
							}
							else
							{
								include("reg_form.php");
							}
							
							include("bottom.php");
?>
					
					
					
					
					
                  
                  
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
