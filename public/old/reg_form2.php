<form name="comp_profile" method="post" action="registration2.php">

	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Physical Detail </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr valign="top">
        <td height="30" align="right"><p><strong>Physical Status </strong></p></td>
        <td height="30"><p><strong>
			<input name="physical" type="radio" id="physical" tabindex="0" value="Normal" required/>Normal &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="physical" type="radio" id="physical" tabindex="0" value="Physically challenged" required/>Physically Challenged &nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Blood Group: </strong></p></td>
        <td height="30"><p><strong>
        <select name="blood_group" type="text" id="blood_group" tabindex="0" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
			<option value="Not mentioned" selected="selected">- Select -</option>
			<option>O+</option>
			<option>A+</option>
			<option>B+</option>
			<option>O-</option>
			<option>A-</option>
			<option>AB+</option>
			<option>B-</option>
			<option>AB-</option>
			<option>A1B+</option>
			<option>A1B-</option>
			<option>A2B+</option>
			<option>A2B-</option>
			<option>A1+</option>
			<option>A1-</option>
			<option>A2+</option>
			<option>A2-</option>
		</select><span>(Optional)</span>
           
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Body Type: </strong></p></td>
        <td height="30"><p><strong>
        <input name="body_type" type="radio" id="body_type" tabindex="0" value="Average" />Average &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="body_type" type="radio" id="body_type" tabindex="0" value="Athletic" />Athletic &nbsp;&nbsp;&nbsp;&nbsp;
		<input name="body_type" type="radio" id="body_type" tabindex="0" value="Slim" />Slim &nbsp;&nbsp;&nbsp;&nbsp;
		<input name="body_type" type="radio" id="body_type" tabindex="0" value="Heavy" />Heavy &nbsp;&nbsp;&nbsp;&nbsp;
		<span>(Optional)</span>
		</td>
	</tr>
	
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Weight</strong></p></td>
          <td height="24"><p><strong>
            <input name="weight" type="text" id="weight" size="10" maxlength="30" onkeypress="javascript: return chkspecialchars();"/>
              </strong>(in kg) <span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>Skin Complexion</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="complexion" name="complexion" onchange="javascript:return htplace()" onblur="javascript:return htplace()" >
                <option value=" " selected="selected">- Select -</option>
                <option>Very fair</option>
                <option>Fair</option>
                <option>Wheatish</option>
                <option>Wheatish Brown</option>
                <option>Brown</option>
				<option>Dark</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Socio-Religious Background </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Eating Habits </strong></p></td>
        <td height="30"><p><strong>
			<input name="diet" type="radio" id="diet" tabindex="0" value="Vegetarian" selected="selected" required/>Vegetarian &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="diet" type="radio" id="diet" tabindex="0" value="Non vegetarian" required/>Non vegetarian &nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Gotra</strong></p></td>
          <td height="24"><p><strong>
            <input name="gotra" type="text" id="gotra" size="15" maxlength="30" onkeypress="javascript: return chkspecialchars();" />
              </strong><span>(Optional)</span></p></td>
    </tr>
	
	<tr>
        <td height="24" align="right"><p class="style18"><strong>Star</strong></p></td>
        <td align="left">
			<select name="star" id="star">
				<option selected="selected" value=" ">- Optional -  
                
				</option><option>Anuradha / Anusham / Anizham 
                </option><option>Ardra / Thiruvathira 
                </option><option>Ashlesha / Ayilyam 
                </option><option>Ashwini / Ashwathi 
                </option><option>Bharani 
                </option><option>Chitra / Chitha 
                </option><option>Dhanista / Avittam 
                </option><option>Hastha / Atham 
                </option><option>Jyesta / Kettai 
                </option><option>Krithika / Karthika 
                </option><option>Makha / Magam 
                </option><option>Moolam / Moola 
                </option><option>Mrigasira / Makayiram 
                </option><option>Poorvabadrapada / Puratathi 
                </option><option>Poorvapalguni / Puram / Pubbhe 
                </option><option>Poorvashada / Pooradam 
                </option><option>Punarvasu / Punarpusam 
                </option><option>Pushya / Poosam / Pooyam 
                </option><option>Revathi 
                </option><option>Rohini 
                </option><option>Shatataraka / Sadayam / Satabishek 
                </option><option>Shravan / Thiruvonam 
                </option><option>Swati / Chothi 
                </option><option>Uttarabadrapada / Uthratadhi 
                </option><option>Uttarapalguni / Uthram 
                </option><option>Uttarashada / Uthradam 
                </option><option>Vishaka / Vishakam 
                </option>
			</select><span>(Optional)</span>
		</td>
    </tr>
	
	<tr>
          <td height="24" align="right"><p class="style18"><strong>Rashi / Moon Sign</strong></p></td>
          <td align="left">
			<select name="rashi" id="rashi" style="font-size:8.5pt">
				<option selected="selected" value="0">- Optional -  
                
				</option><option>Dhanu (Sagittarius) 
                </option><option>Kanya (Virgo) 
                </option><option>Kark (Cancer) 
                </option><option>Kumbh (Aquarius) 
                </option><option>Makar (Capricorn) 
                </option><option>Meen (Pisces) 
                </option><option>Mesh (Aries) 
                </option><option>Mithun (Gemini) 
                </option><option>Simha (Leo) 
                </option><option>Tula (Libra) 
                </option><option>Vrishabh (Taurus) 
                </option><option>Vrishchik (Scorpio) 
                </option>
			</select><span>(Optional)</span></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Time of Birth</strong></p></td>
          <td height="24"><p><strong>
            <select name="hrs" style="font-size:8.5pt">
				<option>00</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>
			  Hrs
			<select name="mins" style="font-size:8.5pt">
				<option>00</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
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
			</select>	
              Mins
			<select name="secs" style="font-size:8.5pt">
				<option>00</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
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
			</select>
              Secs
			<select name="ampm" style="font-size:8.5pt">
				<option>am</option>
				<option>pm</option>
			</select>
			  </strong><span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Birth Place</strong></p></td>
          <td height="24"><p><strong>
            <input name="bop" type="text" id="bop" size="30" maxlength="30" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Family Details </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Family Values </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Orthodox" />Orthodox &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Traditional" />Traditional &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Moderate" />Moderate &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Liberal" />Liberal &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Family Type </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Joint" />Joint &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Nuclear" />Nuclear &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Other" />Other &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Family Status </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Rich / affulent" />Rich &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Upper middle class" />Upper middle class &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Middle class" />Middle class &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Brothers</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="brothers" name="brothers" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Sisters</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="sisters" name="sisters" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Brothers Married</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="bro_married" name="bro_married" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Sisters Married</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="sis_married" name="sis_married" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Father's Occupation</strong></p></td>
          <td height="24"><p><strong>
            <input name="father_occupation" type="text" id="father_occupation" size="30" maxlength="1000" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Mother's Occupation</strong></p></td>
          <td height="24"><p><strong>
            <input name="mother_occupation" type="text" id="mother_occupation" size="30" maxlength="1000" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Ancestral / Family Origin</strong></p></td>
          <td height="24"><p><strong>
            <input name="origin" type="text" id="origin" size="30" maxlength="1000" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	
	
	 <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">About Family<span>(Optional)</span></strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr>
        <td height="77" align="right" valign="top"><p class="style21"><strong>About Family</strong></p></td>
        <td align="left"><p>
            <textarea name="about_fam" cols="30" rows="4" maxlength="1000" class="forminput"  style="margin: 0px; width: 448px; height: 201px;"  onkeypress="javascript: return chkspecialchars();"></textarea>
        </p></td>
   </tr>
	
	
	
	
	
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Partner Preference <span>(Optional)</span></strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	<tr>
                                <td align="right"><p class="style18"><strong>Age Between</strong></p></td>
                                <td align="left"><p><font size="1" face="Verdana, Arial, sans-serif, Tahoma">
                                  <select style="WIDTH: 44px" name="p_agefrom">
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
                                  <font color="#000000" size="1" face="Verdana, Arial, sans-serif, Tahoma">to</font>
                                  <select style="WIDTH: 44px" name="p_ageto">
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option selected="selected">28</option>
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
                                </font></p></td>
    </tr>
	<tr valign="top">
                          <td height="26" align="right"><p class="style12">Marital Status </p></td>
                          <td height="26"><table width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="20"><p>
                                  <input name="p_status" type="radio" class="t1" onClick="javascript:return ChkMarriedOption();" value="Never married" checked="checked" />Never Married&nbsp;&nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Divorced" onClick="javascript:return childrenenable();" />Divorced &nbsp;&nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Widowed" onClick="javascript:return childrenenable();" />Widowed &nbsp;&nbsp;
                                    &nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Separated" onClick="javascript:return childrenenable();" />Separated
                                  </p></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="26" align="right"><p class="style12">Has Children</p></td>
                          <td height="26" align="left"><p><strong><font>
                              <input name="p_children" type="radio" class="t1" value="yes" />Yes&nbsp;&nbsp;
                              <input name="p_children" type="radio" class="t1" value="no" checked/>No
                              </font></strong>
                                  </p></td>
                        </tr>
						<tr valign="top">
                          <td height="26" align="right"><p class="style18">Height</p></td>
                          <td height="26"><p>
                            <select style="FONT-SIZE: 8.5pt" id="height" name="p_heightfrom" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                              <option value="0" selected="selected">- Select -</option>
                              <option>3ft.5in-105cm</option>
                              <option>3ft.6in-107cm</option>
                              <option>3ft.7in-110cm</option>
                              <option>3ft.8in-112cm</option>
                              <option>3ft.9in-114cm</option>
                              <option>3ft.10in-117cm</option>
                              <option>3ft.11in-119cm</option>
                              <option>4ft-122cm</option>
                              <option>4ft.1in-124cm</option>
                              <option>4ft.2in-127cm</option>
                              <option>4ft.3in-129cm</option>
                              <option>4ft.4in-132cm</option>
                              <option>4ft.5in-134cm</option>
                              <option>4ft.6in-137cm</option>
                              <option>4ft.7in-139cm</option>
                              <option>4ft.8in-142cm</option>
                              <option>4ft.9in-144cm</option>
                              <option>4ft.10in-147cm</option>
                              <option>4ft.11in-149cm</option>
                              <option>5ft-151cm</option>
                              <option>5ft.1in-154cm</option>
                              <option>5ft.2in-157cm</option>
                              <option>5ft.3in-160cm</option>
                              <option>5ft.4in-162cm</option>
                              <option>5ft.5in-165cm</option>
                              <option>5ft.6in-167cm</option>
                              <option>5ft.7in-170cm</option>
                              <option>5ft.8in-172cm</option>
                              <option>5ft 9in-175cm</option>
                              <option>5ft.10in-177cm</option>
                              <option>5ft.11in-180cm</option>
                              <option>6ft-182cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.2in-187cm</option>
                              <option>6ft.3in-190cm</option>
                              <option>6ft.4in-193cm</option>
                              <option>6ft.5in-196cm</option>
                              <option>6ft.6in-198cm</option>
                              <option>6ft.7in-200cm</option>
                              <option>6ft.8in-203cm</option>
                              <option>6ft.9in-206cm</option>
                              <option>6ft.10in-208cm</option>
                              <option>6ft.11in-211cm</option>
                            </select>
							<font color="#000000" size="1" face="Verdana, Arial, sans-serif, Tahoma">to</font>
							<select style="FONT-SIZE: 8.5pt" id="height" name="p_heightto" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                              <option value="0" selected="selected">- Select -</option>
                              <option>3ft.5in-105cm</option>
                              <option>3ft.6in-107cm</option>
                              <option>3ft.7in-110cm</option>
                              <option>3ft.8in-112cm</option>
                              <option>3ft.9in-114cm</option>
                              <option>3ft.10in-117cm</option>
                              <option>3ft.11in-119cm</option>
                              <option>4ft-122cm</option>
                              <option>4ft.1in-124cm</option>
                              <option>4ft.2in-127cm</option>
                              <option>4ft.3in-129cm</option>
                              <option>4ft.4in-132cm</option>
                              <option>4ft.5in-134cm</option>
                              <option>4ft.6in-137cm</option>
                              <option>4ft.7in-139cm</option>
                              <option>4ft.8in-142cm</option>
                              <option>4ft.9in-144cm</option>
                              <option>4ft.10in-147cm</option>
                              <option>4ft.11in-149cm</option>
                              <option>5ft-151cm</option>
                              <option>5ft.1in-154cm</option>
                              <option>5ft.2in-157cm</option>
                              <option>5ft.3in-160cm</option>
                              <option>5ft.4in-162cm</option>
                              <option>5ft.5in-165cm</option>
                              <option>5ft.6in-167cm</option>
                              <option>5ft.7in-170cm</option>
                              <option>5ft.8in-172cm</option>
                              <option>5ft 9in-175cm</option>
                              <option>5ft.10in-177cm</option>
                              <option>5ft.11in-180cm</option>
                              <option>6ft-182cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.2in-187cm</option>
                              <option>6ft.3in-190cm</option>
                              <option>6ft.4in-193cm</option>
                              <option>6ft.5in-196cm</option>
                              <option>6ft.6in-198cm</option>
                              <option>6ft.7in-200cm</option>
                              <option>6ft.8in-203cm</option>
                              <option>6ft.9in-206cm</option>
                              <option>6ft.10in-208cm</option>
                              <option>6ft.11in-211cm</option>
                            </select>
						  </p></td>
                        </tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Physical Status </strong></p></td>
        <td height="30"><p><strong>
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Normal" />Normal &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Physically challenged" />Physically Challenged &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Does not matter" />Doesn't matter
		</td>
	</tr>
	<tr>
	
	<tr valign="top">
                          <td align="right"><p><strong>Minimum Salary Per Year</strong></p></td>
                          <td height="24"><p>
                            <select name="p_salary">
                              <option value="Does not matter" selected="selected">Doesn't matter</option>
                              <option>Rs.50,000</option>
                              <option>1,00,000</option>
                              <option>1,50,000</option>
                              <option>2,00,000</option>
                              <option>2,50,000</option>
                              <option>3,00,000</option>
                              <option>5,00,000</option>
                              <option>7,00,000</option>
                              <option>10,00,000</option>
							  <option>15,00,000</option>
							  <option>20,00,000</option>
							  <option>25,00,000</option>
							  <option>50,00,000</option>
							  <option>75,00,000</option>
							  <option>100,00,000</option>
                              <option>Rs.100,00,001 and above</option>
                              <option>$25,000</option>
                              <option>$50,000</option>
                              <option>$75,000</option>
                              <option>$100,000</option>
                              <option>$150,000</option>
                              <option>$200,000</option>
                              <option>$200,001 and above</option>
                            </select>
                          </p></td>
                        </tr>
                                <td align="right"><p class="style18"><strong>Religion</strong></p></td>
                                <td align="left"><p>
                                  <select name="p_religion" id="p_religion">
                                    <option selected="selected">Any </option>
                                      <option>Hindu </option>
                                      <option>Muslim </option>
                                      <option>Muslim - Shia </option>
                                      <option>Muslim - Sunni </option>
                                      <option>Christian </option>
                                      <option>Christian - Catholic </option>
                                      <option>Christian - Orthodox </option>
                                      <option>Christian - Protestant </option>
                                      <option>Sikh </option>
                                      <option>Jain </option>
                                      <option>Jain - Digambar </option>
                                      <option>Jain - Shwetambar </option>
                                      <option>Parsi </option>
                                      <option>Buddhist </option>
                                      <option>Inter Religion </option>
                                      <option>No Religion </option>
                                  </select>
                                </p></td>
    </tr>
	<tr>
                                <td height="23" align="right"><p class="style18"><strong>Mother Tongue</strong></p></td>
                                <td align="left"><p>
                                  <select name="p_language" id="p_language">
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
                                  </select>
                                </p></td>
    </tr>
	
	<tr>
                          <td align="right"><p class="style21"><strong>City</strong></p></td>
                          <td align="left"><p>
                              <input name="p_city" class="forminput" onkeypress="javascript: return chkspecialchars();" size="30" maxlength="45" />
                          </p></td>
    </tr>
	
	<tr>
                          <td align="right"><p class="style21"><strong>Residing State</strong></p></td>
                          <td align="left"><p>
                              <select id="state" name="p_state">
                                <option value="0" selected="selected">- Select -</option>
                                <option>Andaman Nicobar</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra Nagar</option>
                                <option>Daman &amp; Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu &amp; Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Orissa</option>
                                <option>Pondicherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttaranchal</option>
                                <option>West Bengal</option>
                              </select>
                          </p></td>
    </tr>
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">About me<span>(Optional)</span></strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr>
        <td height="77" align="right" valign="top"><p class="style21"><strong>About me</strong></p></td>
        <td align="left"><p>
            <textarea name="about_me" cols="30" rows="4" maxlength="1000" class="forminput"  style="margin: 0px; width: 448px; height: 201px;" onkeypress="javascript: return chkspecialchars();"></textarea>
        </p></td>
   </tr>
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
    <tr>
		<br>
		<td><input type="submit" name="complete" value="Complete" /></td>
	</tr>
	
</form>