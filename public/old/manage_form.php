<script language="JavaScript" type="text/javascript">

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
function validateFields()
{	frm=document.form1;
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
}

	
</script>


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
			$sql="SELECT password FROM profiles WHERE id=".$_SESSION["me"]["id"];
			$result=mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result)>0)
			{
				$old=mysqli_fetch_assoc($result);
				if($old["password"]==$old_pass)
				{
					$update="UPDATE profiles SET password='$password' WHERE id=".$_SESSION["me"]["id"];
					if(mysqli_query($conn, $update))
						echo "<script> alert('Password updated!');</script>";
				}
				else
					echo "<script> alert('Current Password Incorrect! Enter correct password.');</script>";
			}
		}
		
	}

?>
<form name="form1" method="post" action="" onsubmit="javascript:return validateFields()">

	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Current Password:</strong></p></td>
          <td height="24"><p><strong>
            <input name="old_pass" type="password" id="old_pass" size="28" maxlength="20" onkeypress="javascript: return chkspecialchars();" required/>
              </strong></p></td>
    </tr>
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>New Password:</strong></p></td>
          <td height="24"><p><strong>
            <input name="password" type="password" id="password" onkeydown="javascript: return chk4pass();" size="28" maxlength="20" required/>
              </strong><span class="style14" style="color: #666666; font-size: 10px;">Set Password more then 5 Characters </span></p></td>
    </tr>
	
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Confirm New Password:</strong></p></td>
          <td height="24"><p><strong>
            <input name="password1" type="password" id="password1" onkeydown="javascript: return chk4pass();" size="28" maxlength="20" required/>
              </strong></p></td>
    </tr>
	
	<tr valign="top">
        
		<br>
		<td></td>
		<td><p align="left"><input type="submit" name="submit" value="Done" onclick="javascript: return htplace()" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></p><</td>
	</tr>