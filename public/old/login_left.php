<tr>
                <td height="108" align="left" valign="top" background="images/login_bg.jpg" style="background-repeat:no-repeat;"bgcolor="#F2EDF3">
				<form action="index.php" method="post" name="loginForm" id="loginForm" onsubmit="return validateFields()">
                    <table width="200" border="0" align="left" cellpadding="1" cellspacing="1">
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2" valign="bottom">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2" valign="bottom">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" valign="bottom"><span class="style3">Login ID : </span></td>
                        <td height="19" colspan="2" align="left" valign="bottom"><font size="1" face="Arial, Helvetica, sans-serif">
                          <input name="email" title="Enter your email id or your mangal mandap profile id" placeholder="Email / Profile ID" style="height:13px; width:110px;" onkeypress="javascript:return chk4schar();" onkeydown="javascript: return chk4id();" size="16" maxlength="60" />
                        </font></td>
                      </tr>
                      <tr>
                        <td height="22" align="right" valign="bottom" class="style3">Password : </td>
                        <td height="19" colspan="2" align="left" valign="bottom"><input name="password" placeholder="******" type="password" style="height:13px; width:110px;"  onkeydown="javascript: return chk4pass();" size="16" maxlength="14" />                        </td>
                      </tr>
                      <tr>
                        <td width="71" height="22">&nbsp;</td>
                        <td width="26" valign="bottom"><input name="submit" value="" type="submit" title="Login" accesskey="13" style=" border: 0px; background-image: url('images/go.jpg'); background-repeat: no-repeat; background-size: 35px 20px; width:35px; height:20px;" alt="Member Login" class="t1" /></td>
                        <td width="93" valign="bottom"><a href="forgotPassword.php" class="forgot"> </a></td>
                      </tr>
                    </table>
                </form></td>
</tr>