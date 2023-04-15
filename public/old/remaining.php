<?php
	if(isset($_SESSION["me"]))
	{
		echo "<tr><td height='108' align='left' valign='top' background='#F2EDF3' style='background-repeat:repeat-x repeat-y;' bgcolor='#F2EDF3'><div style='background: #F2EDF3;'><div></div></td></tr>";
	}
	else{
		include("login_left.php");
	}
?>
              
              
            </table></td>
            <td width="76%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" align="left" valign="top"><img src="images/headerbox_L.jpg" width="18" height="81" /></td>
                <td width="96%" align="right" valign="top" background="images/headerbox_C.jpg"><?php
					if(isset($_SESSION["me"])){
						echo "<div style='float: left; margin-top: 15px;'>Welcome, <a href='manage.php' title='Manage Account' style='color: white;'><u>".$_SESSION["me"]["name"]."</u></a>! (".$_SESSION["me"]["id"].") &nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout' style='color: white;'>Logout</a></div>";
					}?>
					
					<img src="images/logo_name.jpg" width="262" height="81" /></td>
                
				<td width="2%" align="right" valign="top"><img src="images/headerbox_R.jpg" width="35" height="81" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    
                    <td width="56%" align="right" valign="top"><img src="images/slide1.jpg" style="border-radius:20px;" width="700" height="234" name="SlideShow" /></td>
                  </tr>
                </table></td>
                <td align="right" valign="top"><img src="images/presentation_shadow.jpg" width="35" height="234" /></td>
              </tr>
              <tr>
                <td align="left" valign="top"><img src="images/centerlink_L.jpg" width="18" height="108" /></td>
                <td align="left" valign="top" background="images/centerlink_bg.jpg" style="background-repeat:repeat-x;"><a target='_blank' href="registration.php"><img src="images/centerlink.jpg" width="617" height="97" border="0" usemap="#Map" /></a></td>
                <td align="right" valign="top"><img src="images/centerlink_R.jpg" width="35" height="108" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="507" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="13">&nbsp;</td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="204" align="left" valign="top">
				<img src="images/add3.jpg">
				  <!--<table width="94%" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="28" align="center" valign="top"><img src="images/tit_succes.jpg" width="210" height="23" /></td>
                  </tr>
                  <tr>
                    <td height="138" align="center" valign="top"style="background-image:url(images/bg_success.jpg); background-repeat:no-repeat; background-position:top;"><br />
					
					<img name=SP108678.jpg src=Photo06Oct12/W_P_368b7979dca7444ca25e11a6bb.png width='70' height='100' border='1'>&nbsp;<img name=SP110394.jpg src=http://www.managalmandap.com/photo/i.jpg width='70' height='100' border='1'>
                    <br />
                    <br />
                    <p><strong><font color="#8E2E39" size="2">
				Ku.Sonali Sonkusale<br>&amp;<br>Mr. Sandeep Gonnade</font></strong></p>
				<center><p><a href="successstoriesb034.php?mode=view" class="sitename">view more</a></p></center></td>
                 
				  </tr>
                </table>-->
								
				</td>
              </tr>
            </table></td>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="85%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="302" align="center" valign="middle" background="images/featuredprofile.jpg" style="background-image:url(images/featuredprofile.jpg); background-repeat:no-repeat;">
					  <table width="80%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="20">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" valign="top">
<style>
p {
	color:#333333;
	margin-top : 4px;
	margin-bottom : 3px;
	margin-left : 5px;
	margin-right : 5px;
	font-size : 12px;
	font-family : Arial,Tahoma,Verdana;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<table width="550" height="219" border="0" cellpadding="2" cellspacing="1">
  <tr>
    <td height="8" colspan="5" align="center" valign="top"></td>
  </tr>
  <tr>

<?php
						
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{	
			$random_sql="SELECT id FROM activate WHERE active='yes' ORDER BY RAND() LIMIT 10";
			$result=mysqli_query($conn, $random_sql);
			$count = 1;
			while($random=$result->fetch_assoc()){
				$detail_sql="SELECT name, city FROM profiles WHERE id=".$random["id"];
				$random_sql2="SELECT pic1 FROM images WHERE id=".$random["id"];
				$detail=mysqli_fetch_assoc(mysqli_query($conn, $detail_sql));
				$pic=mysqli_fetch_assoc(mysqli_query($conn, $random_sql2));
				
				if($count == 6){
				
					echo "</tr><tr>";
				}
				echo "<td width='110' height='104' align='center' valign='top'><a target='_blank' href='registration.php'><img src='".$pic["pic1"]."' width='65' height='80' border='1'></a><br>
    <font size='1' face='Tahoma' color='#FF3399'>".$detail["name"]."<br>".$random["id"]."<br>".$detail["city"]."</font></td>";
				$count++;
			}
			
			
		}
?>




  
    
	
    
		
  </tr>
  
</table>
</td>
                      </tr>
                    </table></td>
                  </tr>
                  
                  <tr>
                    <!--<td align="center"><p>&nbsp;&nbsp;<span class="style6">Primary Contact </span></p></td>-->
                  </tr>
                  <tr>
                    <td height="14" align="center" valign="top" class="borderbottom">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                      <tr>
                <td height="204" align="left" valign="top">
				
				  <table width="94%" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="28" align="center" valign="top"><img src="images/tit_succes.jpg" width="210" height="23" /></td>
                  </tr>
                 <tr>
                    <td height="8" align="center" valign="middle"></td>
                  </tr>
                  <tr>
                    <td height="138" align="center" valign="top"style="background-image:url(images/bg_success.jpg); background-repeat:no-repeat; background-position:top;"><br />
					
					<img src="images/succ1.jpg" width='115' height='105' border='1'>
                    <br />
                    <br />
                    <p><strong><font color="#8E2E39" size="2">
				Mrs.ANTIMA GAUTAM <br>&amp;<br>Mr. DIPESH GAUTAM</font></strong><br><font color="#8E2E39" size="2"><strong>10 : FEB : 2018</font></strong></p>
				</td>
                 
				  </tr>
				  
                </table>
								
				</td>
				<td height="204" align="left" valign="top">
				
				  <table width="94%" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="28" align="center" valign="top"><img src="images/tit_succes.jpg" width="210" height="23" /></td>
                  </tr>
                 <tr>
                    <td height="8" align="center" valign="middle"></td>
                  </tr>
                 
 <tr>
                    <td height="138" align="center" valign="top"style="background-image:url(images/bg_success.jpg); background-repeat:no-repeat; background-position:top;"><br />
					
					<img src="images/Succ2.jpg" width='115' height='105' border='1'>
                    <br />
                    <br />
                    <p><strong><font color="#8E2E39" size="2">
				Mrs.RUCHI BANSAL <br>&amp;<br>Mr. PUSHPAK SINGHAL</font></strong><br><font color="#8E2E39" size="2"><strong> JUNE : 2017</font></strong></p>
				</td>
                 
				  </tr>
				  
                </table>
							
				</td>
              </tr>
                    </table></td>
                  </tr>
                </table></td>
                <td width="13%" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right" valign="top"><a href="contact.php"><img src="images/franchise.jpg" width="173" height="151" border="0" /></a></td>
                  </tr>
                  <tr>
                    <td height="13" align="left" valign="top" style="background-repeat:no-repeat;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="23" align="left" valign="bottom" style="background-repeat:no-repeat;"><p class="style6"></p></td>
                  </tr>
                  <tr>
                    <td height="13" align="left" valign="top" style="background-repeat:no-repeat;"><form id="form1" name="form1" method="post" action="#">
                      <p>
                        
                        </p>
                    </form></td>
                  </tr>
                  <tr>
                    <td height="13" align="left" valign="top" style="background-repeat:no-repeat;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="110" align="center" valign="top" style="background-repeat:no-repeat;">
						<a href="registration.php"><img src="images/add1.jpg" width="160" height="300" /></a>
					</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" valign="middle">&nbsp;</td>
                  </tr>
                </table></td>
                <td width="2%" align="right" valign="top"><img src="images/spacer.gif" width="17" height="1" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr align="center" valign="middle">
        <td><img src="images/bottom_sep.jpg" width="954" height="3" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="images/down_bg.jpg" bgcolor="#A20055" style="background-repeat:repeat-x"><table width="1002" border="0" cellpadding="0" cellspacing="0">
      
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
	  <tr>
        <td height="24" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="24" align="center" valign="middle"><script src="downlink.js" type="text/javascript" language="javascript"></script></td>
      </tr>
      <tr>
         
      </tr>
    </table></td>
  </tr>
</table>