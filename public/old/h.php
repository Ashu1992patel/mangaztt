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
					}?><img src="images/logo_name.jpg" width="262" height="81" /></td>
                
				<td width="2%" align="right" valign="top"><img src="images/headerbox_R.jpg" width="35" height="81" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="44%" height="234" align="center" valign="middle"><form action="home_quick_search.php" method="post" name="quickSearch" id="quickSearch" style="margin:0px;">
                      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="3">
                        <tr>
                          <td width="42%" align="right" valign="middle"><span class="style1">Looking 
                            for</span> &nbsp;</td>
                          <td height="26" colspan="2" align="left" valign="middle">
						  <select name="gender" class="t1" id="sex" style="WIDTH: 110px;">
                              <option value="female" selected="selected">Bride</option>
                              <option value="male">Groom</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle"><strong class="style1">Age Between</strong>&nbsp;</td>
                          <td height="26" colspan="2" align="left" valign="middle"><select name="agefrom" class="t1" style="WIDTH: 44px">
                              <option>18</option>
                              <option>19</option>
                              <option selected="selected">20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                              <option>25</option>
                              <option>26</option>
                              <option>27</option>
                              <option>28</option>
                              <option>29</option>
                              <option>30</option>
                              <option>31</option>
                              <option>32</option>
                              <option>33</option>
                              <option>34</option>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                              <option>44</option>
                              <option>45</option>
                              <option>46</option>
                              <option>47</option>
                              <option>48</option>
                              <option>49</option>
                              <option>50</option>
                              <option>51</option>
                              <option>52</option>
                              <option>53</option>
                              <option>54</option>
                              <option>55</option>
                              <option>56</option>
                              <option>57</option>
                              <option>58</option>
                              <option>59</option>
                              <option>60</option>
                              <option>61</option>
                              <option>62</option>
                              <option>63</option>
                              <option>64</option>
                              <option>65</option>
                              <option>66</option>
                              <option>67</option>
                              <option>68</option>
                              <option>69</option>
                              <option>70</option>
                            </select>
                              <font color="#666666" size="2" face="Verdana,Tahoma">to</font> <font size="1" face="Verdana, Arial, sans-serif, Tahoma">
                              <select name="ageto" class="t1" style="WIDTH: 44px">
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option selected="selected">25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                                <option>61</option>
                                <option>62</option>
                                <option>63</option>
                                <option>64</option>
                                <option>65</option>
                                <option>66</option>
                                <option>67</option>
                                <option>68</option>
                                <option>69</option>
                                <option>70</option>
                                <option>71</option>
                                <option>72</option>
                                <option>73</option>
                                <option>74</option>
                                <option>75</option>
                                <option>76</option>
                                <option>77</option>
                                <option>78</option>
                                <option>79</option>
                                <option>80</option>
                                <option>81</option>
                                <option>82</option>
                                <option>83</option>
                                <option>84</option>
                                <option>85</option>
                                <option>86</option>
                                <option>87</option>
                                <option>88</option>
                                <option>89</option>
                                <option>90</option>
                              </select>
                            </font></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle"><strong class="style1">of Religion</strong>&nbsp;</td>
                          <td height="26" colspan="2" align="left" valign="middle">
						  <select name="religion" class="t1" style="width:110px;">
                              <option selected="selected">Hindu</option>
                              <option>Muslim</option>
                              <option>Christian</option>
                              <option>Jain</option>
                              <option>Sikh</option>
                              <option>Buddhist</option>
                              <option>Parsi</option>
                              <option>Jewish</option>
                              <option>Other</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle"><strong class="style1">Mother Tongue</strong>&nbsp;</td>
                          <td height="26" colspan="2" align="left" valign="middle">
						  <select name="language" class="t1" id="mtongue" style="width:110px;">
                              <option selected="selected">Any</option>
                              <option>Aka</option>
                              <option>Arabic</option>
                              <option>Assamese</option>
                              <option>Awadhi</option>
                              <option>Bengali</option>
                              <option>Bhojpuri</option>
                              <option>Bhutia</option>
                              <option>Chatlisgarhi</option>
                              <option>Chinese</option>
                              <option>Dogri</option>
                              <option>English</option>
                              <option>French</option>
                              <option>Garhwali</option>
                              <option>Garo</option>
                              <option>Gujarati</option>
                              <option>Haryanvi</option>
                              <option>Hindi</option>
                              <option>Kakbarak</option>
                              <option>Kanauji</option>
                              <option>Kannada</option>
                              <option>Kashmiri</option>
                              <option>Khandesi</option>
                              <option>Khasi</option>
                              <option>Konkani</option>
                              <option>Koshali</option>
                              <option>Kumoani</option>
                              <option>Kutchi</option>
                              <option>Lepcha</option>
                              <option>Magahi</option>
                              <option>Maithili</option>
                              <option>Malay</option>
                              <option>Malayalam</option>
                              <option>Manipuri</option>
                              <option>Marathi</option>
                              <option>Marwari</option>
                              <option>Miji</option>
                              <option>Mizo</option>
                              <option>Monpa</option>
                              <option>Nepali</option>
                              <option>Oriya</option>
                              <option>Persian</option>
                              <option>Punjabi</option>
                              <option>Rajasthani</option>
                              <option>Russian</option>
                              <option>Sanskrit</option>
                              <option>Santhali</option>
                              <option>Sindhi</option>
                              <option>Spanish</option>
                              <option>Swedish</option>
                              <option>Tamil</option>
                              <option>Tagalog</option>
                              <option>Telugu</option>
                              <option>Tulu</option>
                              <option>Urdu</option>
                              <option>Other</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle">&nbsp;</td>
                          
                          <td width="49%" height="26" align="left" valign="middle"><input name="submit" type="image" type="submit" class="t2"  src="images/go.jpg" align="absmiddle" width="40" height="20" border="no" /></td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center" valign="middle">&nbsp;</td>
                        </tr>
                        
                      </table>
                    </form></td>
                    <td width="56%" align="right" valign="top"><img src="images/slide1.jpg" width="381" height="234" name="SlideShow" /></td>
                  </tr>
                </table></td>
                <td align="right" valign="top"><img src="images/presentation_shadow.jpg" width="35" height="234" /></td>
              </tr>
              <tr>
                <td align="left" valign="top"><img src="images/centerlink_L.jpg" width="18" height="108" /></td>
                <td align="left" valign="top" background="images/centerlink_bg.jpg" style="background-repeat:repeat-x;"><img src="images/centerlink.jpg" width="617" height="97" border="0" usemap="#Map" /></td>
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
				<img src="images/add3.gif">
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
			$random_sql="SELECT id FROM activate WHERE active='yes' ORDER BY RAND() LIMIT 5";
			$result=mysqli_query($conn, $random_sql);
			while($random=$result->fetch_assoc()){
				$detail_sql="SELECT name, city FROM profiles WHERE id=".$random["id"];
				$random_sql2="SELECT pic1 FROM images WHERE id=".$random["id"];
				$detail=mysqli_fetch_assoc(mysqli_query($conn, $detail_sql));
				$pic=mysqli_fetch_assoc(mysqli_query($conn, $random_sql2));
				
				echo "<td width='110' height='104' align='center' valign='top'><a href='registration.php'><img src='".$pic["pic1"]."' width='65' height='80' border='1'></a><br>
    <font size='1' face='Tahoma' color='#FF3399'>".$detail["name"]."<br>".$random["id"]."<br>".$detail["city"]."</font></td>";
			}
			echo "</tr><tr>";
			$random_sql="SELECT id FROM activate WHERE active='yes' ORDER BY RAND() LIMIT 5";
			$result=mysqli_query($conn, $random_sql);
			while($random=$result->fetch_assoc()){
				$detail_sql="SELECT name, city FROM profiles WHERE id=".$random["id"];
				$random_sql2="SELECT pic1 FROM images WHERE id=".$random["id"];
				$detail=mysqli_fetch_assoc(mysqli_query($conn, $detail_sql));
				$pic=mysqli_fetch_assoc(mysqli_query($conn, $random_sql2));
				
				echo "<td width='110' height='104' align='center' valign='top'><a href='registration.php'><img src='".$pic["pic1"]."' width='65' height='80' border='1'></a><br>
    <font size='1' face='Tahoma' color='#FF3399'>".$detail["name"]."<br>".$random["id"]."<br>".$detail["city"]."</font></td>";
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
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <!--<td align="center"><p>&nbsp;&nbsp;<span class="style6">Primary Contact </span></p></td>-->
                  </tr>
                  <tr>
                    <td height="14" align="center" valign="top" class="borderbottom">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                      <!--<tr>
                        <td width="25%" height="122" align="left" valign="top"><p><strong>Head Office </strong></p>
                            <p align="justify"><span class="style5">MangalMandap.com</span><br />
                              <span class="style9">_________________,  
_________________, 
_________________</span></p>
                          <p align="justify"><span class="style9">Phone: +91-_________________<br />
                            Mobile: +91-_________________</span><br />
                          </p></td>
                        <td width="25%" align="left" valign="top"><p><strong>_________________ Branch</strong></p>
                            <p align="justify"><span class="style5">MangalMandap.com</span><br />
                              <span class="style9">_________________, <br />
                              _________________</span></p>
                          <p class="style9">Phone: +91-_________________<br />
                            Mobile: +91-_________________</p></td>
                        <td width="25%" align="left" valign="top"><p><strong>_________________ Branch</strong></p>
                            <p><span class="style5">MangalMandap.com</span><br />
                              <span class="style9">_________________</span></p>
                            <p><span class="style9">Phone: +91-_________________<br />
Mobile: +91-_________________</span>_________________<br />
                              </p></td>
                      </tr>-->
                    </table></td>
                  </tr>
                </table></td>
                <td width="13%" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right" valign="top"><a href="franchisee.php"><img src="images/franchise.jpg" width="173" height="151" border="0" /></a></td>
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
						<a href="affiliate.php"> <button type="button"><p class="style6">Affiliate Login</p></button></a>
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