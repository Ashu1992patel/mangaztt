<script language="javascript" type="text/javascript" src="MultipleSelection.js"></script>
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

//-->
</script>
<script language="javascript" type="text/jscript">
<!--
function chkspecialchars(){
		if ((event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 97 && event.keyCode <= 122)||(event.keyCode >= 65 && event.keyCode <= 90)||(event.keyCode ==94)||(event.keyCode ==32)||(event.keyCode ==46))
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

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

/*function ChkMarriedOption()
{
	if (document.form3.mstatus[0].value=="Never Married")
		{
			document.form3.child[0].disabled=true;
			document.form3.child[1].disabled=true;
			document.form3.child[2].disabled=true;
			document.form3.child.disabled=true;
		}
		return true;	
}

function childenable()
{
			document.form3.child[0].disabled=false;
			document.form3.child[1].disabled=false;
			document.form3.child[2].disabled=false;
			document.form3.child.disabled=false;
return true;
}	

function setLiving()
{
		if (document.form3.child.value!="None")
		{
			document.form3.child[0].checked=true;
		}
		else
		{
			document.form3.childliving[0].checked=false;
			document.form3.childliving[1].checked=false;
			document.form3.childliving[2].checked=false;
		}
		return true;
}*/


function unmarried()
{
		if ((document.form3.mstatus[1].checked==true) || (document.form3.mstatus[2].checked==true) || (document.form3.mstatus[3].checked==true))
		{	
			document.form3.child[0].disabled=false;
			document.form3.child[1].disabled=false;
			document.form3.child[2].disabled=false;
			document.form3.child.disabled=false;
			document.form3.mstatus[4].checked=false;
			return true;
		}
		else
		{
			document.form3.child[0].disabled=true;
			document.form3.child[1].disabled=true;
			document.form3.child[2].disabled=true;
			document.form3.child.disabled=true;
			document.form3.mstatus[4].checked=false;
			return true;
		}	
}

function married()
{
		document.form3.child[0].disabled=false;
		document.form3.child[1].disabled=false;
		document.form3.child[2].disabled=false;
		document.form3.child.disabled=false;
		document.form3.mstatus[4].checked=false;
		return true;
		
		if ((document.form3.mstatus[0].checked==true) && (document.form3.mstatus[1].checked==false) && (document.form3.mstatus[2].checked==false) && (document.form3.mstatus[3].checked==false))
		{
			document.form3.child[0].disabled=true;
			document.form3.child[1].disabled=true;
			document.form3.child[2].disabled=true;
			document.form3.child.disabled=true;
			document.form3.mstatus[4].checked=false;
			return true;
		}	
}

function any()
{
			document.form3.child[0].disabled=false;
			document.form3.child[1].disabled=false;
			document.form3.child[2].disabled=false;
			document.form3.child.disabled=false;
			document.form3.mstatus[0].checked=false;
			document.form3.mstatus[1].checked=false;
			document.form3.mstatus[2].checked=false;
			document.form3.mstatus[3].checked=false;
			return true;
}

//-->
</script>

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



<table width="95%" border="0" align="center" cellpadding="0" cellspacing="3">
                      <tr>
                        <td align="left" class="sachingray"><p class="sitename style37">Advance   Search </p></td>
                      </tr>
                      <tr>
                        <td height="23" align="left" valign="top"><p class="style31">Search based on a few basic criteria one would look for in a   partner. Results can be viewed as Thumbnail View. If you like a profile you can Express Interest or Send Mail.</p></td>
                      </tr>
                      <tr>
                        <td valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="48" valign="top"><form action="" method="post" name="form3" id="form3">
                          <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
                            <tr>
                              <td width="171" align="left"><p><strong><font face="Verdana, Arial, sans-serif, Tahoma">Looking 
                                for : </font></strong></p></td>
                              <td  height="21" align="left"><p>
                               
                            </tr>
                            <tr>
                              <td align="left" ><p><strong>Marital Status :</strong></p></td>
                              <td align="left"><p>
                                <input name="mstatus[]" type="checkbox" id="mstatus" value="Never married" checked="checked"  onclick="javascript:return unmarried();"/>Never Married
								<input name="mstatus[]" type="checkbox" id="mstatus" value="Widowed" onclick="javascript:return married();"/>Widowed
								<input name="mstatus[]" type="checkbox" id="mstatus" value="Divorced" onclick="javascript:return married();"/>Divorced
								<input name="mstatus[]" type="checkbox" id="mstatus" value="Separated" onclick="javascript:return married();"/>Separated
								<input name="mstatus[]" type="checkbox" id="mstatus" value="Any" onclick="javascript:return any();"/>Any</p></td>
                            </tr>
                            <!--<tr>
                              <td width="171" align="left" ><p>&nbsp;</p></td>
                              <td width="520" align="left"><p>
                                <input name="mstatus" type="radio" class="t3" value="Never Married" onclick="javascript:return ChkMarriedOption();" checked="checked" />
                                Never Married&nbsp;&nbsp;
                                <input name="mstatus" type="radio" class="t3" value="Widowed" onclick="javascript:return childenable();"/>
                                Widowed&nbsp;&nbsp;
                                <input name="mstatus" type="radio" class="t3" value="Divorced" onclick="javascript:return childenable();"/>
                                Divorced&nbsp;
                                <input name="mstatus" class="t3" type="radio" value="Separated" onclick="javascript:return childenable();"/>
                                Separated&nbsp;
                                <input name="mstatus" class="t3" type="radio" value="Any" onclick="javascript:return ChkMarriedOption();" />
                                Any</p></td>
                            </tr>-->
                            <tr>
                              <td align="left" width="171"><p><strong>Have Children :</strong></p></td>
                              <td width="520" align="left"><p>
                                <input name="child" type="radio" class="t3" value="no" checked="checked" />
                                No &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name="child" type="radio" class="t3" value="yes" disabled="disabled"/>
                                Yes &nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="child" type="radio" class="t3" value="Any" disabled="disabled"/>
                                Doesn't matter</p></td>
                            </tr>
                            <tr >
                              <td  align="left"><p><strong><font face="Verdana, Arial, sans-serif, Tahoma">Age Between : </font></strong></p></td>
                              <td  align="left"><p>from <font size="1" face="Verdana, Arial, sans-serif, Tahoma">
                                    <select style="WIDTH: 44px;font-size:8.5pt" name="agefrom">
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
                                    </font><font face="Verdana, Arial, sans-serif, Tahoma">to</font><font face="Verdana, Arial, sans-serif, Tahoma"></font><font size="1" face="Verdana, Arial, sans-serif, Tahoma">
                                    <select style="WIDTH: 44px;font-size:8.5pt" name="ageto">
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
                                      <option selected="selected">30</option>
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
                            <tr>
                              <td align="left" width="171"><p><strong>Height :</strong></p></td>
                              <td width="520" align="left"><p>From
                                <select style="FONT-SIZE: 8.5pt" id="heightfr" name="heightfr" onchange="javascript:return htplace()">
                                          <option value="1">3ft.5in-105cm</option>
                                          <option value="2">3ft.6in-107cm</option>
                                          <option value="3">3ft.7in-110cm</option>
                                          <option value="4">3ft.8in-112cm</option>
                                          <option value="5">3ft.9in-114cm</option>
                                          <option value="6">3ft.10in-117cm</option>
                                          <option value="7">3ft.11in-119cm</option>
                                          <option value="8">4ft-122cm</option>
                                          <option value="9">4ft.1in-124cm</option>
                                          <option value="10">4ft.2in-127cm</option>
                                          <option value="11">4ft.3in-129cm</option>
                                          <option value="12">4ft.4in-132cm</option>
                                          <option value="13">4ft.5in-134cm</option>
                                          <option value="14">4ft.6in-137cm</option>
                                          <option value="15">4ft.7in-139cm</option>
                                          <option value="16">4ft.8in-142cm</option>
                                          <option value="17">4ft.9in-144cm</option>
                                          <option value="18">4ft.10in-147cm</option>
                                          <option value="19">4ft.11in-149cm</option>
                                          <option value="20">5ft-151cm</option>
                                          <option value="21">5ft.1in-154cm</option>
                                          <option value="22">5ft.2in-157cm</option>
                                          <option value="23">5ft.3in-160cm</option>
                                          <option value="24">5ft.4in-162cm</option>
                                          <option value="25">5ft.5in-165cm</option>
                                          <option value="26">5ft.6in-167cm</option>
                                          <option value="27">5ft.7in-170cm</option>
                                          <option value="28">5ft.8in-172cm</option>
                                          <option value="29">5ft 9in-175cm</option>
                                          <option value="30">5ft.10in-177cm</option>
                                          <option value="31">5ft.11in-180cm</option>
                                          <option value="32">6ft-182cm</option>
                                          <option value="33">6ft.1in-185cm</option>
                                          <option value="34">6ft.1in-185cm</option>
                                          <option value="35">6ft.2in-187cm</option>
                                          <option value="36">6ft.3in-190cm</option>
                                          <option value="37">6ft.4in-193cm</option>
                                          <option value="38">6ft.5in-196cm</option>
                                          <option value="39">6ft.6in-198cm</option>
                                          <option value="40">6ft.7in-200cm</option>
                                          <option value="41">6ft.8in-203cm</option>
                                          <option value="42">6ft.9in-206cm</option>
                                          <option value="43">6ft.10in-208cm</option>
                                          <option value="44">6ft.11in-211cm</option>
                                        </select>
                                to
                                <select style="FONT-SIZE: 8.5pt" id="heightto" name="heightto" onchange="javascript:return htplace()">
                                  <option value="1">3ft.5in-105cm</option>
                                  <option value="2">3ft.6in-107cm</option>
                                  <option value="3">3ft.7in-110cm</option>
                                  <option value="4">3ft.8in-112cm</option>
                                  <option value="5">3ft.9in-114cm</option>
                                  <option value="6">3ft.10in-117cm</option>
                                  <option value="7">3ft.11in-119cm</option>
                                  <option value="8">4ft-122cm</option>
                                  <option value="9">4ft.1in-124cm</option>
                                  <option value="10">4ft.2in-127cm</option>
                                  <option value="11">4ft.3in-129cm</option>
                                  <option value="12">4ft.4in-132cm</option>
                                  <option value="13">4ft.5in-134cm</option>
                                  <option value="14">4ft.6in-137cm</option>
                                  <option value="15">4ft.7in-139cm</option>
                                  <option value="16">4ft.8in-142cm</option>
                                  <option value="17">4ft.9in-144cm</option>
                                  <option value="18">4ft.10in-147cm</option>
                                  <option value="19">4ft.11in-149cm</option>
                                  <option value="20">5ft-151cm</option>
                                  <option value="21">5ft.1in-154cm</option>
                                  <option value="22">5ft.2in-157cm</option>
                                  <option value="23">5ft.3in-160cm</option>
                                  <option value="24">5ft.4in-162cm</option>
                                  <option value="25">5ft.5in-165cm</option>
                                  <option value="26">5ft.6in-167cm</option>
                                  <option value="27">5ft.7in-170cm</option>
                                  <option value="28">5ft.8in-172cm</option>
                                  <option value="29">5ft 9in-175cm</option>
                                  <option value="30">5ft.10in-177cm</option>
                                  <option value="31">5ft.11in-180cm</option>
                                  <option value="32">6ft-182cm</option>
                                  <option value="33">6ft.1in-185cm</option>
                                  <option value="34">6ft.1in-185cm</option>
                                  <option value="35">6ft.2in-187cm</option>
                                  <option value="36">6ft.3in-190cm</option>
                                  <option value="37">6ft.4in-193cm</option>
                                  <option value="38">6ft.5in-196cm</option>
                                  <option value="39">6ft.6in-198cm</option>
                                  <option value="40">6ft.7in-200cm</option>
                                  <option value="41">6ft.8in-203cm</option>
                                  <option value="42">6ft.9in-206cm</option>
                                  <option value="43">6ft.10in-208cm</option>
                                  <option value="44" selected="selected">6ft.11in-211cm</option>
                                  </select>
                                          </p></td>
                            </tr>
                            <tr >
                              <td width="171" align="left" ><p><strong>Manglik :</strong></p></td>
                              <td width="520" align="left"><p><font color="#000000" size="1" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">
                                <input name="manglik" type="radio" class="t3" value="no" />
                                </font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">No</font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma"></font><font color="#000000" size="1" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">
                                <input name="manglik" class="t3" type="radio" value="yes" />
                                </font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">Yes</font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma"></font><font color="#000000" size="1" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">
                                <input name="manglik" class="t3" type="radio" value="Any" checked="checked" />
                                </font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">All</font><font color="#000000" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma"></font> </p></td>
                            </tr>
                            <tr>
                              <td align="left" width="171"><p><strong>Physical status :</strong></p></td>
                              <td width="520" align="left"><p>
                                <input name="physical" type="radio" class="t3" value="Normal" checked="checked" />
                                Normal 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name="physical" type="radio" class="t3" value="Physically challenged" />
                                Disable &nbsp;&nbsp;&nbsp;
                                <input name="physical" type="radio" class="t3" value="Any" />
                                Any</p></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="left" valign="top"><p><strong>Mother  Tongue :</strong></p></td>
                            </tr>
                            <tr>
                              <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" height="80" align="right"><p><font face="Bangkok" color="#008080" size="2">
                                        <select name="mtongue1" size="5" multiple="multiple" id="mtongue1" style="width:150px;FONT-SIZE:8.5pt">
                                          <option selected="selected">Any</option>
                                          <option>Aka</option>
                                          <option>Arabic</option>
                                          <option>Assamese</option>
                                          <option>Awadhi</option>
                                          <option>Bengali</option>
                                          <option>Bihari</option>
                                          <option>Bhojpuri</option>
                                          <option>Bhutia</option>
                                          <option>Brij</option>
                                          <option>Chatlisgarhi</option>
                                          <option>Chinese</option>
                                          <option>Dogri</option>
                                          <option>English</option>
                                          <option>French</option>
                                          <option>Garhwali</option>
                                          <option>Garo</option>
                                          <option>Gujarati</option>
                                          <option>Haryanvi</option>
                                          <option>Himachali</option>
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
                                    </font></p></td>
                                    <td width="13%"><p>
                                        <input name="button1" type="button" id="button1" onclick="javascript:addSrcToDestListM();" value="Add" style="width:62px" />
                                      </p>
                                        <p>
                                          <input name="button11" type="button" id="button11" onclick="javascript:deleteFromDestListM();" value="Remove" style="width:62px" />
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="mtongue[]" size="5" multiple="multiple" id="mtongue" style="width:150px;FONT-SIZE:8.5pt">
                                        <option>Hindi</option>
										
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="left"><p><strong><font face="Verdana, Arial, sans-serif, Tahoma">Religion :</font></strong></p></td>
                            </tr>
                            <tr>
                              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" height="80" align="right"><p>
                                        <select name="lstreligion1" size="5" multiple="multiple" id="lstreligion1" style="width:150px;FONT-SIZE:8.5pt">
                                          <option selected="selected">Any </option>
                                          <option>Hindu </option>
                                           <option>Sikh </option>
                                          <option>Jain </option>
                                           <option>Jain - Digambar </option>
                                           <option>Jain - Shwetambar </option>
                                          <option>Muslim </option>
                                          <option>Muslim - Shia </option>
                                          <option>Muslim - Sunni </option>
                                          <option>Christian </option>
                                          <option>Christian - Catholic </option>
                                          <option>Christian - Orthodox </option>
                                          <option>Christian - Protestant </option>
                                         
                                          
                                          <option>Parsi </option>
                                          <option>Buddhist </option>
                                          <option>Inter Religion </option>
                                          <option>No Religion </option>
                                        </select>
                                    </p></td>
                                    <td width="13%"><p>
                                        <input name="button2" type="button" id="button2" onclick="javascript:addSrcToDestListR()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button22" type="button" id="button22" onclick="javascript:deleteFromDestListR();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="lstreligion[]" size="5" multiple="multiple" id="lstreligion" style="width:150px;FONT-SIZE:8.5pt">
                                        <option selected="selected">Hindu </option>
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td width="171" height="23" align="left" valign="top"><p><strong>Caste / Division : </strong></p></td>
                              <td width="520">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" height="80" align="right"><p>
                                        <select name="caste1" multiple="multiple" size="5" id="caste1" style="width:150px;FONT-SIZE:8.5pt">
                                          <option selected="selected">Any</option>
                              <OPTION VALUE = 'Adi Dravida'>Adi Dravida</Option><OPTION VALUE = 'Agarwal'>Agarwal</Option><OPTION VALUE = 'Agnikula Kshatriya'>Agnikula Kshatriya</Option><OPTION VALUE = 'Agri'>Agri</Option><OPTION VALUE = 'Ahom'>Ahom</Option><OPTION VALUE = 'Ambalavasi'>Ambalavasi</Option><OPTION VALUE = 'Arora'>Arora</Option><OPTION VALUE = 'Arunthathiyar'>Arunthathiyar</Option><OPTION VALUE = 'Arya Vysya'>Arya Vysya</Option><OPTION VALUE = 'Baidya'>Baidya</Option><OPTION VALUE = 'Bagga'>Bagga</Option><OPTION VALUE = 'Baishnab'>Baishnab</Option><OPTION VALUE = 'Baishya'>Baishya</Option><OPTION VALUE = 'Balija'>Balija</Option><OPTION VALUE = 'Banik'>Banik</Option><OPTION VALUE = 'Baniya'>Baniya</Option><OPTION VALUE = 'Barujibi'>Barujibi</Option><OPTION VALUE = 'Besta'>Besta</Option><OPTION VALUE = 'Bhandari'>Bhandari</Option><OPTION VALUE = 'Bhatia'>Bhatia</Option><OPTION VALUE = 'Bhavasar Kshatriya'>Bhavasar Kshatriya</Option><OPTION VALUE = 'Bhovi'>Bhovi</Option><OPTION VALUE = 'Billava'>Billava</Option><OPTION VALUE = 'Boyer'>Boyer</Option><OPTION VALUE = 'Brahmbatt'>Brahmbatt</Option><OPTION VALUE = 'Brahmin'>Brahmin</Option><OPTION VALUE = 'Brahmin - Adi Gaur'>Brahmin - Adi Gaur</Option><OPTION VALUE = 'Brahmin - Anavil'>Brahmin - Anavil</Option><OPTION VALUE = 'Brahmin - Audichya'>Brahmin - Audichya</Option><OPTION VALUE = 'Brahmin - Barendra'>Brahmin - Barendra</Option><OPTION VALUE = 'Brahmin - Bhatt'>Brahmin - Bhatt</Option><OPTION VALUE = 'Brahmin - Bhumihar'>Brahmin - Bhumihar</Option><OPTION VALUE = 'Brahmin - Daivadnya'>Brahmin - Daivadnya</Option><OPTION VALUE = 'Brahmin - Danua'>Brahmin - Danua</Option><OPTION VALUE = 'Brahmin - Deshastha'>Brahmin - Deshastha</Option><OPTION VALUE = 'Brahmin - Dhiman'>Brahmin - Dhiman</Option><OPTION VALUE = 'Brahmin - Dravida'>Brahmin - Dravida</Option><OPTION VALUE = 'Brahmin - Garhwali'>Brahmin - Garhwali</Option><OPTION VALUE = 'Brahmin - Gaur'>Brahmin - Gaur</Option><OPTION VALUE = 'Brahmin - Goswami'>Brahmin - Goswami</Option><OPTION VALUE = 'Brahmin - Gurukkal'>Brahmin - Gurukkal</Option><OPTION VALUE = 'Brahmin - Halua'>Brahmin - Halua</Option><OPTION VALUE = 'Brahmin - Havyaka'>Brahmin - Havyaka</Option><OPTION VALUE = 'Brahmin - Hoysala'>Brahmin - Hoysala</Option><OPTION VALUE = 'Brahmin - Iyengar'>Brahmin - Iyengar</Option><OPTION VALUE = 'Brahmin - Iyer'>Brahmin - Iyer</Option><OPTION VALUE = 'Brahmin - Jangid'>Brahmin - Jangid</Option><OPTION VALUE = 'Brahmin - Jhadua'>Brahmin - Jhadua</Option><OPTION VALUE = 'Brahmin - Kanyakubj'>Brahmin - Kanyakubj</Option><OPTION VALUE = 'Brahmin - Karhade'>Brahmin - Karhade</Option><OPTION VALUE = 'Brahmin - Kokanastha'>Brahmin - Kokanastha</Option><OPTION VALUE = 'Brahmin - Kota'>Brahmin - Kota</Option><OPTION VALUE = 'Brahmin - Kulin'>Brahmin - Kulin</Option><OPTION VALUE = 'Brahmin - Kumoani'>Brahmin - Kumoani</Option><OPTION VALUE = 'Brahmin - Madhwa'>Brahmin - Madhwa</Option><OPTION VALUE = 'Brahmin - Maithil'>Brahmin - Maithil</Option><OPTION VALUE = 'Brahmin - Modh'>Brahmin - Modh</Option><OPTION VALUE = 'Brahmin - Mohyal'>Brahmin - Mohyal</Option><OPTION VALUE = 'Brahmin - Nagar'>Brahmin - Nagar</Option><OPTION VALUE = 'Brahmin - Namboodiri'>Brahmin - Namboodiri</Option><OPTION VALUE = 'Brahmin - Niyogi'>Brahmin - Niyogi</Option><OPTION VALUE = 'Brahmin - Panda'>Brahmin - Panda</Option><OPTION VALUE = 'Brahmin - Pareek'>Brahmin - Pareek</Option><OPTION VALUE = 'Brahmin - Pandit'>Brahmin - Pandit</Option><OPTION VALUE = 'Brahmin - Rarhi'>Brahmin - Rarhi</Option><OPTION VALUE = 'Brahmin - Rigvedi'>Brahmin - Rigvedi</Option><OPTION VALUE = 'Brahmin - Rudraj'>Brahmin - Rudraj</Option><OPTION VALUE = 'Brahmin - Sakaldwipi'>Brahmin - Sakaldwipi</Option><OPTION VALUE = 'Brahmin - Sanadya'>Brahmin - Sanadya</Option><OPTION VALUE = 'Brahmin - Sanketi'>Brahmin - Sanketi</Option><OPTION VALUE = 'Brahmin - Saraswat'>Brahmin - Saraswat</Option><OPTION VALUE = 'Brahmin - Saryuparin'>Brahmin - Saryuparin</Option><OPTION VALUE = 'Brahmin - Shivhalli'>Brahmin - Shivhalli</Option><OPTION VALUE = 'Brahmin - Shrimali'>Brahmin - Shrimali</Option><OPTION VALUE = 'Brahmin - Smartha'>Brahmin - Smartha</Option><OPTION VALUE = 'Brahmin - Sri Vishnava'>Brahmin - Sri Vishnava</Option><OPTION VALUE = 'Brahmin - Stanika'>Brahmin - Stanika</Option><OPTION VALUE = 'Brahmin - Tyagi'>Brahmin - Tyagi</Option><OPTION VALUE = 'Brahmin - Vaidiki'>Brahmin - Vaidiki</Option><OPTION VALUE = 'Brahmin - Vyas'>Brahmin - Vyas</Option><OPTION VALUE = 'Chamar'>Chamar</Option><OPTION VALUE = 'Chambhar'>Chambhar</Option><OPTION VALUE = 'Chandravanshi Kahar'>Chandravanshi Kahar</Option><OPTION VALUE = 'Chasa'>Chasa</Option><OPTION VALUE = 'Chaudary'>Chaudary</Option><OPTION VALUE = 'Chaurasia'>Chaurasia</Option><OPTION VALUE = 'Chettiar'>Chettiar</Option><OPTION VALUE = 'Chhetri'>Chhetri</Option><OPTION VALUE = 'Christian - Born Again'>Christian - Born Again</Option><OPTION VALUE = 'Christian - Bretheren'>Christian - Bretheren</Option><OPTION VALUE = 'Christian - Church of South India'>Christian - Church of South India</Option><OPTION VALUE = 'Christian - Evangelist'>Christian - Evangelist</Option><OPTION VALUE = 'Christian - Jacobite'>Christian - Jacobite</Option><OPTION VALUE = 'Christian - Knanaya'>Christian - Knanaya</Option><OPTION VALUE = 'Christian - Knanaya Catholic'>Christian - Knanaya Catholic</Option><OPTION VALUE = 'Christian - Knanaya Jacobite'>Christian - Knanaya Jacobite</Option><OPTION VALUE = 'Christian - Latin Catholic'>Christian - Latin Catholic</Option><OPTION VALUE = 'Christian - Malankara'>Christian - Malankara</Option><OPTION VALUE = 'Christian - Marthoma'>Christian - Marthoma</Option><OPTION VALUE = 'Christian - Others'>Christian - Others</Option><OPTION VALUE = 'Christian - Pentacost'>Christian - Pentacost</Option><OPTION VALUE = 'Christian - Roman Catholic'>Christian - Roman Catholic</Option><OPTION VALUE = 'Christian - Syrian Catholic'>Christian - Syrian Catholic</Option><OPTION VALUE = 'Christian - Syrian Jacobite'>Christian - Syrian Jacobite</Option><OPTION VALUE = 'Christian - Syrian Orthodox'>Christian - Syrian Orthodox</Option><OPTION VALUE = 'Christian - Syro Malabar'>Christian - Syro Malabar</Option><OPTION VALUE = 'Christian - unspecified'>Christian - unspecified</Option><OPTION VALUE = 'CKP'>CKP</Option><OPTION VALUE = 'Coorgi'>Coorgi</Option><OPTION VALUE = 'Devadiga'>Devadiga</Option><OPTION VALUE = 'Devandra Kula Vellalar'>Devandra Kula Vellalar</Option><OPTION VALUE = 'Devang Koshthi'>Devang Koshthi</Option><OPTION VALUE = 'Devanga'>Devanga</Option><OPTION VALUE = 'Dhangar'>Dhangar</Option><OPTION VALUE = 'Dheevara'>Dheevara</Option><OPTION VALUE = 'Dhiman'>Dhiman</Option><OPTION VALUE = 'Dhoba'>Dhoba</Option><OPTION VALUE = 'Dhobi'>Dhobi</Option><OPTION VALUE = 'Ediga'>Ediga</Option><OPTION VALUE = 'Ezhava'>Ezhava</Option><OPTION VALUE = 'Ezhuthachan'>Ezhuthachan</Option><OPTION VALUE = 'Gabit'>Gabit</Option><OPTION VALUE = 'Gandla'>Gandla</Option><OPTION VALUE = 'Ganiga'>Ganiga</Option><OPTION VALUE = 'Garhwali'>Garhwali</Option><OPTION VALUE = 'Gavara'>Gavara</Option><OPTION VALUE = 'Ghumar'>Ghumar</Option><OPTION VALUE = 'Goala'>Goala</Option><OPTION VALUE = 'Goan'>Goan</Option><OPTION VALUE = 'Gond'>Gond</Option><OPTION VALUE = 'Goud'>Goud</Option><OPTION VALUE = 'Gounder'>Gounder</Option><OPTION VALUE = 'Gowda'>Gowda</Option><OPTION VALUE = 'Gudia'>Gudia</Option><OPTION VALUE = 'Gujrati'>Gujrati</Option><OPTION VALUE = 'Gujjar'>Gujjar</Option><OPTION VALUE = 'Gupta'>Gupta</Option><OPTION VALUE = 'Intercaste'>Intercaste</Option><OPTION VALUE = 'Intercaste'>Intercaste</Option><OPTION VALUE = 'Irani'>Irani</Option><OPTION VALUE = 'Jain - Digambar '>Jain - Digambar </Option><OPTION VALUE = 'Jain - Shwetambar  '>Jain - Shwetambar  </Option><OPTION VALUE = 'Jain - Agarwal'>Jain - Agarwal</Option><OPTION VALUE = 'Jain - Bania'>Jain - Bania</Option><OPTION VALUE = 'Jain - Intercaste'>Jain - Intercaste</Option><OPTION VALUE = 'Jain - Jaiswal'>Jain - Jaiswal</Option><OPTION VALUE = 'Jain - Khandelwal'>Jain - Khandelwal</Option><OPTION VALUE = 'Jain - Kutchi'>Jain - Kutchi</Option><OPTION VALUE = 'Jain - No Bar'>Jain - No Bar</Option><OPTION VALUE = 'Jain - Oswal'>Jain - Oswal</Option><OPTION VALUE = 'Jain - Others'>Jain - Others</Option><OPTION VALUE = 'Jain - Porwal'>Jain - Porwal</Option><OPTION VALUE = 'Jain - Unspecified'>Jain - Unspecified</Option><OPTION VALUE = 'Jain - Vaishya'>Jain - Vaishya</Option><OPTION VALUE = 'Jaiswal'>Jaiswal</Option><OPTION VALUE = 'Jangam'>Jangam</Option><OPTION VALUE = 'Jat'>Jat</Option><OPTION VALUE = 'Jatav'>Jatav</Option><OPTION VALUE = 'Kadava Patel'>Kadava Patel</Option><OPTION VALUE = 'kahar'>kahar</Option><OPTION VALUE = 'Kaibarta'>Kaibarta</Option><OPTION VALUE = 'Kalar'>Kalar</Option><OPTION VALUE = 'Kalinga'>Kalinga</Option><OPTION VALUE = 'Kalita'>Kalita</Option><OPTION VALUE = 'Kalwar'>Kalwar</Option><OPTION VALUE = 'Kamboj'>Kamboj</Option><OPTION VALUE = 'Kamma'>Kamma</Option><OPTION VALUE = 'Kansari'>Kansari</Option><OPTION VALUE = 'Kapu'>Kapu</Option><OPTION VALUE = 'Karana'>Karana</Option><OPTION VALUE = 'Karmakar'>Karmakar</Option><OPTION VALUE = 'Karuneegar'>Karuneegar</Option><OPTION VALUE = 'Kasar'>Kasar</Option><OPTION VALUE = 'Kushwaha'>Kushwaha</Option><OPTION VALUE = 'Kashyap'>Kashyap</Option><OPTION VALUE = 'Kayastha'>Kayastha</Option><OPTION VALUE = 'Khatik'>Khatik</Option><OPTION VALUE = 'Khandayat'>Khandayat</Option><OPTION VALUE = 'Khandelwal'>Khandelwal</Option><OPTION VALUE = 'Khatri'>Khatri</Option><OPTION VALUE = 'Khatik'>Khatik</Option><OPTION VALUE = 'Koli'>Koli</Option><OPTION VALUE = 'Kongu Vellala Gounder'>Kongu Vellala Gounder</Option><OPTION VALUE = 'Konkani'>Konkani</Option><OPTION VALUE = 'Kori'>Kori</Option><OPTION VALUE = 'kostha'>kostha</Option><OPTION VALUE = 'kosthi'>kosthi</Option><OPTION VALUE = 'Kshatriya'>Kshatriya</Option><OPTION VALUE = 'Kudumbi'>Kudumbi</Option><OPTION VALUE = 'Kulal'>Kulal</Option><OPTION VALUE = 'Kulalar'>Kulalar</Option><OPTION VALUE = 'Kulita'>Kulita</Option><OPTION VALUE = 'Kumbhakar'>Kumbhakar</Option><OPTION VALUE = 'Kumbhar'>Kumbhar</Option><OPTION VALUE = 'Kumhar'>Kumhar</Option><OPTION VALUE = 'Kummari'>Kummari</Option><OPTION VALUE = 'Kunbi'>Kunbi</Option><OPTION VALUE = 'Kurmi'>Kurmi</Option><OPTION VALUE = 'Kurmi Kshatriya'>Kurmi Kshatriya</Option><OPTION VALUE = 'Kurmi'>Kurmi</Option><OPTION VALUE = 'Kuruba'>Kuruba</Option><OPTION VALUE = 'Kuruhina Shetty'>Kuruhina Shetty</Option><OPTION VALUE = 'Kurumbar'>Kurumbar</Option><OPTION VALUE = 'Kutchi'>Kutchi</Option><OPTION VALUE = 'Lambadi'>Lambadi</Option><OPTION VALUE = 'Leva patel'>Leva patel</Option><OPTION VALUE = 'Leva patil'>Leva patil</Option><OPTION VALUE = 'Lingayath'>Lingayath</Option><OPTION VALUE = 'Lohana'>Lohana</Option><OPTION VALUE = 'Lubana'>Lubana</Option><OPTION VALUE = 'Madiga'>Madiga</Option><OPTION VALUE = 'Mahajan'>Mahajan</Option><OPTION VALUE = 'Mahar'>Mahar</Option><OPTION VALUE = 'Mahendra'>Mahendra</Option><OPTION VALUE = 'Maheshwari'>Maheshwari</Option><OPTION VALUE = 'Mahishya'>Mahishya</Option><OPTION VALUE = 'Majabi'>Majabi</Option><OPTION VALUE = 'Mala'>Mala</Option><OPTION VALUE = 'Mali'>Mali</Option><OPTION VALUE = 'Malla'>Malla</Option><OPTION VALUE = 'Mangalorean'>Mangalorean</Option><OPTION VALUE = 'Manipuri'>Manipuri</Option><OPTION VALUE = 'Mapila'>Mapila</Option><OPTION VALUE = 'Maratha'>Maratha</Option><OPTION VALUE = 'Maruthuvar'>Maruthuvar</Option><OPTION VALUE = 'Matang'>Matang</Option><OPTION VALUE = 'Meena'>Meena</Option><OPTION VALUE = 'Meenavar'>Meenavar</Option><OPTION VALUE = 'Mehra'>Mehra</Option><OPTION VALUE = 'Meru Darji'>Meru Darji</Option><OPTION VALUE = 'Mochi'>Mochi</Option><OPTION VALUE = 'Modak'>Modak</Option><OPTION VALUE = 'Mogaveera'>Mogaveera</Option><OPTION VALUE = 'Mudaliyar'>Mudaliyar</Option><OPTION VALUE = 'Mudiraj'>Mudiraj</Option><OPTION VALUE = 'Mukkulathor'>Mukkulathor</Option><OPTION VALUE = 'Munnuru Kapu'>Munnuru Kapu</Option><OPTION VALUE = 'Muslim - Ansari'>Muslim - Ansari</Option><OPTION VALUE = 'Muslim - Arain'>Muslim - Arain</Option><OPTION VALUE = 'Muslim - Awan'>Muslim - Awan</Option><OPTION VALUE = 'Muslim - Bohra'>Muslim - Bohra</Option><OPTION VALUE = 'Muslim - Dekkani'>Muslim - Dekkani</Option><OPTION VALUE = 'Muslim - Dudekula'>Muslim - Dudekula</Option><OPTION VALUE = 'Muslim - Hanafi'>Muslim - Hanafi</Option><OPTION VALUE = 'Muslim - Jat'>Muslim - Jat</Option><OPTION VALUE = 'Muslim - Khoja'>Muslim - Khoja</Option><OPTION VALUE = 'Muslim - Lebbai'>Muslim - Lebbai</Option><OPTION VALUE = 'Muslim - Malik'>Muslim - Malik</Option><OPTION VALUE = 'Muslim - Mapila'>Muslim - Mapila</Option><OPTION VALUE = 'Muslim - Maraicar'>Muslim - Maraicar</Option><OPTION VALUE = 'Muslim - Memon'>Muslim - Memon</Option><OPTION VALUE = 'Muslim - Mughal'>Muslim - Mughal</Option><OPTION VALUE = 'Muslim - Others'>Muslim - Others</Option><OPTION VALUE = 'Muslim - Pathan'>Muslim - Pathan</Option><OPTION VALUE = 'Muslim - Qureshi'>Muslim - Qureshi</Option><OPTION VALUE = 'Muslim - Rajput'>Muslim - Rajput</Option><OPTION VALUE = 'Muslim - Rowther'>Muslim - Rowther</Option><OPTION VALUE = 'Muslim - Shafi'>Muslim - Shafi</Option><OPTION VALUE = 'Muslim - Sheikh'>Muslim - Sheikh</Option><OPTION VALUE = 'Muslim - Siddiqui'>Muslim - Siddiqui</Option><OPTION VALUE = 'Muslim - Syed'>Muslim - Syed</Option><OPTION VALUE = 'Muslim - UnSpecified'>Muslim - UnSpecified</Option><OPTION VALUE = 'Muthuraja'>Muthuraja</Option><OPTION VALUE = 'Nadar'>Nadar</Option><OPTION VALUE = 'Nai'>Nai</Option><OPTION VALUE = 'Naicker'>Naicker</Option><OPTION VALUE = 'Naidu'>Naidu</Option><OPTION VALUE = 'Naik'>Naik</Option><OPTION VALUE = 'Nair'>Nair</Option><OPTION VALUE = 'Namosudra'>Namosudra</Option><OPTION VALUE = 'Napit'>Napit</Option><OPTION VALUE = 'Nayaka'>Nayaka</Option><OPTION VALUE = 'Nepali'>Nepali</Option><OPTION VALUE = 'Nhavi'>Nhavi</Option><OPTION VALUE = 'Oswal'>Oswal</Option><OPTION VALUE = 'Other'>Other</Option><OPTION VALUE = 'Padmasali'>Padmasali</Option><OPTION VALUE = 'Pal'>Pal</Option><OPTION VALUE = 'Panchal'>Panchal</Option><OPTION VALUE = 'Panicker'>Panicker</Option><OPTION VALUE = 'Parkava Kulam'>Parkava Kulam</Option><OPTION VALUE = 'Parsi'>Parsi</Option><OPTION VALUE = 'Pasi'>Pasi</Option><OPTION VALUE = 'Patel'>Patel</Option><OPTION VALUE = 'Patnaick'>Patnaick</Option><OPTION VALUE = 'Patra'>Patra</Option><OPTION VALUE = 'Pillai'>Pillai</Option><OPTION VALUE = 'Porwal'>Porwal</Option><OPTION VALUE = 'Prajapati'>Prajapati</Option><OPTION VALUE = 'Rajaka'>Rajaka</Option><OPTION VALUE = 'Rajastani'>Rajastani</Option><OPTION VALUE = 'Rajbonshi'>Rajbonshi</Option><OPTION VALUE = 'Rajput'>Rajput</Option><OPTION VALUE = 'Ramdasia'>Ramdasia</Option><OPTION VALUE = 'Ramgariah'>Ramgariah</Option><OPTION VALUE = 'Ravidasia'>Ravidasia</Option><OPTION VALUE = 'Rawat'>Rawat</Option><OPTION VALUE = 'Reddy'>Reddy</Option><OPTION VALUE = 'Sadgope'>Sadgope</Option><OPTION VALUE = 'Saha'>Saha</Option><OPTION VALUE = 'Sahu'>Sahu</Option><OPTION VALUE = 'Saini'>Saini</Option><OPTION VALUE = 'Saliya'>Saliya</Option><OPTION VALUE = 'SC'>SC</Option><OPTION VALUE = 'Senai Thalaivar'>Senai Thalaivar</Option><OPTION VALUE = 'Settibalija'>Settibalija</Option><OPTION VALUE = 'Shetty'>Shetty</Option><OPTION VALUE = 'Shimpi'>Shimpi</Option><OPTION VALUE = 'Sikh - Ahluwalia'>Sikh - Ahluwalia</Option><OPTION VALUE = 'Sikh - Arora'>Sikh - Arora</Option><OPTION VALUE = 'Sikh - Bhatia'>Sikh - Bhatia</Option><OPTION VALUE = 'Sikh - Ghumar'>Sikh - Ghumar</Option><OPTION VALUE = 'Sikh - Intercaste'>Sikh - Intercaste</Option><OPTION VALUE = 'Sikh - Jat'>Sikh - Jat</Option><OPTION VALUE = 'Sikh - Kamboj'>Sikh - Kamboj</Option><OPTION VALUE = 'Sikh - Khatri'>Sikh - Khatri</Option><OPTION VALUE = 'Sikh - Kshatriya'>Sikh - Kshatriya</Option><OPTION VALUE = 'Sikh - Lubana'>Sikh - Lubana</Option><OPTION VALUE = 'Sikh - Majabi'>Sikh - Majabi</Option><OPTION VALUE = 'Sikh - No Bar'>Sikh - No Bar</Option><OPTION VALUE = 'Sikh - Others'>Sikh - Others</Option><OPTION VALUE = 'Sikh - Rajput'>Sikh - Rajput</Option><OPTION VALUE = 'Sikh - Ramdasia'>Sikh - Ramdasia</Option><OPTION VALUE = 'Sikh - Ramgharia'>Sikh - Ramgharia</Option><OPTION VALUE = 'Sikh - Saini'>Sikh - Saini</Option><OPTION VALUE = 'Sikh - Unspecified'>Sikh - Unspecified</Option><OPTION VALUE = 'Sindhi'>Sindhi</Option><OPTION VALUE = 'Sindhi-Amil'>Sindhi-Amil</Option><OPTION VALUE = 'Sindhi-Baibhand'>Sindhi-Baibhand</Option><OPTION VALUE = 'Sindhi-Bhanusali'>Sindhi-Bhanusali</Option><OPTION VALUE = 'Sindhi-Bhatia'>Sindhi-Bhatia</Option><OPTION VALUE = 'Sindhi-Chhapru'>Sindhi-Chhapru</Option><OPTION VALUE = 'Sindhi-Dadu'>Sindhi-Dadu</Option><OPTION VALUE = 'Sindhi-Hyderabadi'>Sindhi-Hyderabadi</Option><OPTION VALUE = 'Sindhi-Larai'>Sindhi-Larai</Option><OPTION VALUE = 'Sindhi-Larkana'>Sindhi-Larkana</Option><OPTION VALUE = 'Sindhi-Lohana'>Sindhi-Lohana</Option><OPTION VALUE = 'Sindhi-Rohiri'>Sindhi-Rohiri</Option><OPTION VALUE = 'Sindhi-Sahiti'>Sindhi-Sahiti</Option><OPTION VALUE = 'Sindhi-Sakkhar'>Sindhi-Sakkhar</Option><OPTION VALUE = 'Sindhi-Sehwani'>Sindhi-Sehwani</Option><OPTION VALUE = 'Sindhi-Shikarpuri'>Sindhi-Shikarpuri</Option><OPTION VALUE = 'Sindhi-Thatai'>Sindhi-Thatai</Option><OPTION VALUE = 'SKP'>SKP</Option><OPTION VALUE = 'Sonar'>Sonar</Option><OPTION VALUE = 'Soni'>Soni</Option><OPTION VALUE = 'Sourashtra'>Sourashtra</Option><OPTION VALUE = 'ST'>ST</Option><OPTION VALUE = 'Sundhi'>Sundhi</Option><OPTION VALUE = 'Suthar'>Suthar</Option><OPTION VALUE = 'Swakula Sali'>Swakula Sali</Option><OPTION VALUE = 'Tamboli'>Tamboli</Option><OPTION VALUE = 'Tanti'>Tanti</Option><OPTION VALUE = 'Tantubai'>Tantubai</Option><OPTION VALUE = 'Telaga'>Telaga</Option><OPTION VALUE = 'Teli'>Teli</Option><OPTION VALUE = 'Thakkar'>Thakkar</Option><OPTION VALUE = 'Thakur'>Thakur</Option><OPTION VALUE = 'Thigala'>Thigala</Option><OPTION VALUE = 'Thiyya'>Thiyya</Option><OPTION VALUE = 'Tili'>Tili</Option><OPTION VALUE = 'Uppara'>Uppara</Option><OPTION VALUE = 'Vaddera'>Vaddera</Option><OPTION VALUE = 'Vaish'>Vaish</Option><OPTION VALUE = 'Vaishnav'>Vaishnav</Option><OPTION VALUE = 'Vaishnava'>Vaishnava</Option><OPTION VALUE = 'Vaishya'>Vaishya</Option><OPTION VALUE = 'Vaishya Vani'>Vaishya Vani</Option><OPTION VALUE = 'Valmiki'>Valmiki</Option><OPTION VALUE = 'Vania'>Vania</Option><OPTION VALUE = 'Vaniya'>Vaniya</Option><OPTION VALUE = 'Vanjara'>Vanjara</Option><OPTION VALUE = 'Vanjari'>Vanjari</Option><OPTION VALUE = 'Vankar'>Vankar</Option><OPTION VALUE = 'Vannar'>Vannar</Option><OPTION VALUE = 'Vannia Kula Kshatriyar'>Vannia Kula Kshatriyar</Option><OPTION VALUE = 'Veera Saivam'>Veera Saivam</Option><OPTION VALUE = 'Velama'>Velama</Option><OPTION VALUE = 'Vellalar'>Vellalar</Option><OPTION VALUE = 'Veluthedathu Nair'>Veluthedathu Nair</Option><OPTION VALUE = 'Vilakkithala Nair'>Vilakkithala Nair</Option><OPTION VALUE = 'Vishwabrahmin'>Vishwabrahmin</Option><OPTION VALUE = 'Vishwakarma'>Vishwakarma</Option><OPTION VALUE = 'Vokkaliga'>Vokkaliga</Option><OPTION VALUE = 'Vysya'>Vysya</Option><OPTION VALUE = 'Yadav'>Yadav</Option>
                              </select>
                                    </p></td>
                                    <td width="13%"><p>
                                        <input name="button3" type="button" id="button3" onclick="javascript:addSrcToDestListC()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button33" type="button" id="button33" onclick="javascript:deleteFromDestListC();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="caste[]" size="5" multiple="multiple" id="caste" style="width:150px;FONT-SIZE:8.5pt">
                                        <option selected="selected">Any</option>
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                           
                            
                            <tr>
                              <td height="23" colspan="2" align="left" valign="top"><p><strong>Star : </strong></p></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" align="right"><p>
                                        <select name="star1" size="5" multiple="multiple" id="star1" style="font-size:8.5pt">
                                          <option selected="selected">Any </option>
                                          <option>Anuradha / Anusham / Anizham </option>
                                          <option>Ardra / Thiruvathira </option>
                                          <option>Ashlesha / Ayilyam </option>
                                          <option>Ashwini / Ashwathi </option>
                                          <option>Bharani </option>
                                          <option>Chitra / Chitha </option>
                                          <option>Dhanista / Avittam </option>
                                          <option>Hastha / Atham </option>
                                          <option>Jyesta / Kettai </option>
                                          <option>Krithika / Karthika </option>
                                          <option>Makha / Magam </option>
                                          <option>Moolam / Moola </option>
                                          <option>Mrigasira / Makayiram </option>
                                          <option>Poorvabadrapada / Puratathi </option>
                                          <option>Poorvapalguni / Puram / Pubbhe </option>
                                          <option>Poorvashada / Pooradam </option>
                                          <option>Punarvasu / Punarpusam </option>
                                          <option>Pushya / Poosam / Pooyam </option>
                                          <option>Revathi </option>
                                          <option>Rohini </option>
                                          <option>Shatataraka / Sadayam / Satabishek </option>
                                          <option>Shravan / Thiruvonam </option>
                                          <option>Swati / Chothi </option>
                                          <option>Uttarabadrapada / Uthratadhi </option>
                                          <option>Uttarapalguni / Uthram </option>
                                          <option>Uttarashada / Uthradam </option>
                                          <option>Vishaka / Vishakam </option>
                                        </select>
                                    </p></td>
                                    <td width="13%" align="left"><p>
                                      <input name="button5" type="button" id="button5" onclick="javascript:addSrcToDestListSt()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button55" type="button" id="button55" onclick="javascript:deleteFromDestListSt();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                      <select name="star[]" size="5" multiple="multiple" id="star" style="width:150px;FONT-SIZE:8.5pt">
                                      <option selected="selected">Any</option>
									  </select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" align="left" valign="top"><p><strong>Education :</strong></p></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="48%" height="80" align="right"><p>
                                        <select name="cmbedu1" size="5" multiple="multiple" id="cmbedu1" style="font-size:8.5pt">
                                          <option selected="selected">Any</option>
                                           <OPTION VALUE = '10+2/Senior Secondary School'>10+2/Senior Secondary School</Option><OPTION VALUE = 'CA'>CA</Option><OPTION VALUE = 'CS'>CS</Option><OPTION VALUE = 'Diploma'>Diploma</Option><OPTION VALUE = 'ICWA'>ICWA</Option><OPTION VALUE = 'PhD'>PhD</Option><OPTION VALUE = 'Bachelors - Engineering/ Computers'>Bachelors - Engineering/ Computers</Option><OPTION VALUE = 'Masters - Engineering/ Computers'>Masters - Engineering/ Computers</Option><OPTION VALUE = 'Bachelors - Arts/ Science/ Commerce/ Others'>Bachelors - Arts/ Science/ Commerce/ Others</Option><OPTION VALUE = 'Masters - Arts/ Science/ Commerce/ Others'>Masters - Arts/ Science/ Commerce/ Others</Option><OPTION VALUE = 'Management - BBA/ MBA/ Others'>Management - BBA/ MBA/ Others</Option><OPTION VALUE = 'Medicine - General/ Dental/ Surgeon/ Others'>Medicine - General/ Dental/ Surgeon/ Others</Option><OPTION VALUE = 'Legal - BL/ ML/ LLB/ LLM/ Others'>Legal - BL/ ML/ LLB/ LLM/ Others</Option><OPTION VALUE = 'Service - IAS/ IPS/ Others'>Service - IAS/ IPS/ Others</Option><OPTION VALUE = 'Higher Secondary/ Secondary'>Higher Secondary/ Secondary</Option><OPTION VALUE = 'Others'>Others</Option><OPTION VALUE = 'Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others'>Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others</Option>
                                        </select>
                                    </p></td>
                                    <td width="13%" align="left"><p>
                                        <input name="button42" type="button" id="button42" onclick="javascript:addSrcToDestListE()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button442" type="button" id="button442" onclick="javascript:deleteFromDestListE();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="cmbedu[]" size="5" multiple="multiple" id="cmbedu" style="width:150px;font-size:8.5pt">
                                        <option selected="selected">Any</option>
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" align="left"><p><strong>Occupation : </strong></p></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2"><table width="100%" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" align="right"><p><strong>
                                        <select name="cmboccu1" size="5" id="cmboccu1"  multiple="multiple" style="font-size:8.5pt">
                                          <option selected="selected">Any </option>
                                           <OPTION VALUE = 'Manager '>Manager </Option><OPTION VALUE = 'Supervisors '>Supervisors </Option><OPTION VALUE = 'Administrative Professional '>Administrative Professional </Option><OPTION VALUE = 'Pilot '>Pilot </Option><OPTION VALUE = 'Air Hostess '>Air Hostess </Option><OPTION VALUE = 'Airline Professional '>Airline Professional </Option><OPTION VALUE = 'Architect '>Architect </Option><OPTION VALUE = 'Interior Designer '>Interior Designer </Option><OPTION VALUE = 'Chartered Accountant '>Chartered Accountant </Option><OPTION VALUE = 'Company Secretary '>Company Secretary </Option><OPTION VALUE = 'Corporate Planning/ Consulting '>Corporate Planning/ Consulting </Option><OPTION VALUE = 'Accounts/Finance Professional '>Accounts/Finance Professional </Option><OPTION VALUE = 'Banking Service Professional '>Banking Service Professional </Option><OPTION VALUE = 'BPO/ Call Centre/ ITES/ Telecalling'>BPO/ Call Centre/ ITES/ Telecalling</Option><OPTION VALUE = 'Fashion Designer '>Fashion Designer </Option><OPTION VALUE = 'Government Service'>Government Service</Option><OPTION VALUE = 'Graphic Designer '>Graphic Designer </Option><OPTION VALUE = 'Front Office/ Secretarial Staff/ Export/ Import'>Front Office/ Secretarial Staff/ Export/ Import</Option><OPTION VALUE = 'Beautician '>Beautician </Option><OPTION VALUE = 'Professor / Lecturer '>Professor / Lecturer </Option><OPTION VALUE = 'Teaching / Academician '>Teaching / Academician </Option><OPTION VALUE = 'Education Professional '>Education Professional </Option><OPTION VALUE = 'Hotel / Hospitality Professional '>Hotel / Hospitality Professional </Option><OPTION VALUE = 'HR/ Admin/ PM/ IR/ Training '>HR/ Admin/ PM/ IR/ Training </Option><OPTION VALUE = 'Software Professional '>Software Professional </Option><OPTION VALUE = 'Hardware Professional '>Hardware Professional </Option><OPTION VALUE = 'Engineer - Non IT '>Engineer - Non IT </Option><OPTION VALUE = 'Production/ Maintenance/ Service Engg. '>Production/ Maintenance/ Service Engg. </Option><OPTION VALUE = 'Lawyer &amp; Legal Professional '>Lawyer &amp; Legal Professional </Option><OPTION VALUE = 'Logistics/ Purchase/ SCM '>Logistics/ Purchase/ SCM </Option><OPTION VALUE = 'Doctor '>Doctor </Option><OPTION VALUE = 'Dentist '>Dentist </Option><OPTION VALUE = 'Health Care Professional '>Health Care Professional </Option><OPTION VALUE = 'Private Service'>Private Service</Option><OPTION VALUE = 'Paramedical Professional '>Paramedical Professional </Option><OPTION VALUE = 'Nurse '>Nurse </Option><OPTION VALUE = 'Marketing Professional '>Marketing Professional </Option><OPTION VALUE = 'Sales Professional '>Sales Professional </Option><OPTION VALUE = 'Journalist '>Journalist </Option><OPTION VALUE = 'Media Professional '>Media Professional </Option><OPTION VALUE = 'Entertainment Professional '>Entertainment Professional </Option><OPTION VALUE = 'Event Management Professional '>Event Management Professional </Option><OPTION VALUE = 'Advertising / PR Professional '>Advertising / PR Professional </Option><OPTION VALUE = 'Mariner / Merchant Navy '>Mariner / Merchant Navy </Option><OPTION VALUE = 'Scientist / Researcher '>Scientist / Researcher </Option><OPTION VALUE = 'CXO / President, Director, Chairman '>CXO / President, Director, Chairman </Option><OPTION VALUE = 'Business '>Business </Option><OPTION VALUE = 'Customer Care Professional '>Customer Care Professional </Option><OPTION VALUE = 'Social Worker '>Social Worker </Option><OPTION VALUE = 'Sportsman '>Sportsman </Option><OPTION VALUE = 'Technician '>Technician </Option><OPTION VALUE = 'Arts &amp; Craftsman '>Arts &amp; Craftsman </Option><OPTION VALUE = 'Army'>Army</Option><OPTION VALUE = 'Navy'>Navy</Option><OPTION VALUE = 'Airforce'>Airforce</Option><OPTION VALUE = 'IAS/IES/IFS/IPS/Others'>IAS/IES/IFS/IPS/Others</Option><OPTION VALUE = 'Unemployed'>Unemployed</Option><OPTION VALUE = 'Others '>Others </Option><OPTION VALUE = 'Not Working'>Not Working</Option><OPTION VALUE = 'Officer '>Officer </Option><OPTION VALUE = 'Executive '>Executive </Option><OPTION VALUE = 'Clerk '>Clerk </Option><OPTION VALUE = 'Agriculture &amp; Farming Professional '>Agriculture &amp; Farming Professional </Option><OPTION VALUE = 'Auditor '>Auditor </Option><OPTION VALUE = 'Consultant '>Consultant </Option><OPTION VALUE = 'dermatologist'>dermatologist</Option>
                                        </select>
                                    </strong></p></td>
                                    <td width="13%" align="left"><p>
                                      <input name="button6" type="button" id="button6" onclick="javascript:addSrcToDestListO()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button66" type="button" id="button66" onclick="javascript:deleteFromDestListO();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="cmboccu[]" size="5" multiple="multiple" id="cmboccu" style="width:150px;FONT-SIZE:8.5pt">
                                        <option selected="selected">Any</option>
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="23" align="left" valign="top"><p><strong>Employed in  : </strong></p></td>
                              <td height="23" align="left" valign="top"><p>
                                <input name="employedin[]" type="checkbox" id="employedin" value="Govt" />
                                
Government
 &nbsp;
 <input name="employedin[]" type="checkbox" id="employedin" value="Private" />

Private&nbsp;
<input name="employedin[]" type="checkbox" id="employedin" value="Business" />
Business
&nbsp;
<input name="employedin[]" type="checkbox" id="employedin" value="Defence" />

Defence
&nbsp;
<input name="employedin[]" type="checkbox" id="employedin" value="Not working" />
 Not  working &nbsp;
 <input name="employedin[]" type="checkbox" id="employedin" value="Any" checked/>
                              Any</p></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" align="left" valign="top"><p><strong>Location : </strong></p></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="48%" align="right"><p>
                                        <select name="lststate1" size="5" multiple="multiple" id="select3" style="width:150px;FONT-SIZE:8.5pt">
                                          <option selected="selected">Any</option>
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
                                          <option>Uttaranchal/Uttarakhand</option>
                                          <option>West Bengal</option>
                                        </select>
                                    </p></td>
                                    <td width="13%" align="left"><p>
                                        <input name="button4" type="button" id="button4" onclick="javascript:addSrcToDestListS()" value="Add" style="width:62px"/>
                                      </p>
                                        <p>
                                          <input name="button44" type="button" id="button44" onclick="javascript:deleteFromDestListS();" value="Remove" style="width:62px"/>
                                      </p></td>
                                    <td width="39%" align="left"><p>
                                        <select name="lststate[]" size="5" multiple="multiple" id="lststate" style="width:150px;FONT-SIZE:8.5pt">
                                        <option selected="selected">Any</option>
										</select>
                                    </p></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr valign="top" class="outerborder">
                              <td height="24" colspan="2" align="left" class="bottomborder"><p><strong>Country Living  : </strong></p></td>
                              </tr>
                            <tr valign="top" class="outerborder">
                              <td height="19" colspan="2" align="left" class="bottomborder"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="48%" align="right"><p class="smalltxt">
                                    <select name="countryliving1" size="5" multiple="multiple" id="countryliving1" style="FONT-SIZE: 8.5pt">
                                      <option selected="selected">India</option>
                                      <option>Any</option>
									  <option>United States of America</option>
                                      <option>United Arab Emirates</option>
                                      <option>Malaysia</option>
                                      <option>United Kingdom</option>
                                      <option>Australia</option>
                                      <option>Saudi Arabia</option>
                                      <option>Canada</option>
                                      <option>Singapore</option>
                                      <option>Kuwait</option>
                                      <option>Afghanistan</option>
                                      <option>Albania</option>
                                      <option>Algeria</option>
                                      <option>American Samoa</option>
                                      <option>Andorra</option>
                                      <option>Angola</option>
                                      <option>Anguilla</option>
                                      <option>Antarctica</option>
                                      <option>Antigua and Barbuda</option>
                                      <option>Argentina</option>
                                      <option>Armenia</option>
                                      <option>Aruba</option>
                                      <option>Australia</option>
                                      <option>Austria</option>
                                      <option>Azerbaijan</option>
                                      <option>Bahamas</option>
                                      <option>Bahrain</option>
                                      <option>Bangladesh</option>
                                      <option>Barbados</option>
                                      <option>Belarus</option>
                                      <option>Belgium</option>
                                      <option>Belize</option>
                                      <option>Benin</option>
                                      <option>Bermuda</option>
                                      <option>Bhutan</option>
                                      <option>Bolivia</option>
                                      <option>Bosnia and Herzegovina</option>
                                      <option>Botswana</option>
                                      <option>Bouvet Island</option>
                                      <option>Brazil</option>
                                      <option>British Indian Ocean Territory</option>
                                      <option>British Virgin Islands</option>
                                      <option>Brunei</option>
                                      <option>Bulgaria</option>
                                      <option>Burkina Faso</option>
                                      <option>Burundi</option>
                                      <option>Cambodia</option>
                                      <option>Cameroon</option>
                                      <option>Canada</option>
                                      <option>Cape Verde</option>
                                      <option>Cayman Islands</option>
                                      <option>Central African Republic</option>
                                      <option>Chad</option>
                                      <option>Chile</option>
                                      <option>China</option>
                                      <option>Christmas Island</option>
                                      <option>Cocos Islands</option>
                                      <option>Colombia</option>
                                      <option>Comoros</option>
                                      <option>Congo</option>
                                      <option>Cook Islands</option>
                                      <option>Costa Rica</option>
                                      <option>Croatia</option>
                                      <option>Cuba</option>
                                      <option>Cyprus</option>
                                      <option>Czech Republic</option>
                                      <option>Denmark</option>
                                      <option>Djibouti</option>
                                      <option>Dominica</option>
                                      <option>Dominican Republic</option>
                                      <option>East Timor</option>
                                      <option>Ecuador</option>
                                      <option>Egypt</option>
                                      <option>El Salvador</option>
                                      <option>Equatorial Guinea</option>
                                      <option>Eritrea</option>
                                      <option>Estonia</option>
                                      <option>Ethiopia</option>
                                      <option>Falkland Islands</option>
                                      <option>Faroe Islands</option>
                                      <option>Fiji</option>
                                      <option>Finland</option>
                                      <option>France</option>
                                      <option>French Guiana</option>
                                      <option>French Polynesia</option>
                                      <option>French Southern Territories</option>
                                      <option>Gabon</option>
                                      <option>Gambia</option>
                                      <option>Georgia</option>
                                      <option>Germany</option>
                                      <option>Ghana</option>
                                      <option>Gibraltar</option>
                                      <option>Greece</option>
                                      <option>Greenland</option>
                                      <option>Grenada</option>
                                      <option>Guadeloupe</option>
                                      <option>Guam</option>
                                      <option>Guatemala</option>
                                      <option>Guinea</option>
                                      <option>Guinea-Bissau</option>
                                      <option>Guyana</option>
                                      <option>Haiti</option>
                                      <option>Heard and McDonald Islands</option>
                                      <option>Honduras</option>
                                      <option>Hong Kong</option>
                                      <option>Hungary</option>
                                      <option>Iceland</option>
                                      <option>India</option>
                                      <option>Indonesia</option>
                                      <option>Iran</option>
                                      <option>Iraq</option>
                                      <option>Ireland</option>
                                      <option>Israel</option>
                                      <option>Italy</option>
                                      <option>Ivory Coast</option>
                                      <option>Jamaica</option>
                                      <option>Japan</option>
                                      <option>Jordan</option>
                                      <option>Kazakhstan</option>
                                      <option>Kenya</option>
                                      <option>Kiribati</option>
                                      <option>Korea, North</option>
                                      <option>Korea, South</option>
                                      <option>Kuwait</option>
                                      <option>Kyrgyzstan</option>
                                      <option>Laos</option>
                                      <option>Latvia</option>
                                      <option>Lebanon</option>
                                      <option>Lesotho</option>
                                      <option>Liberia</option>
                                      <option>Libya</option>
                                      <option>Liechtenstein</option>
                                      <option>Lithuania</option>
                                      <option>Luxembourg</option>
                                      <option>Macau</option>
                                      <option>Macedonia, Former Yugoslav Republic of</option>
                                      <option>Madagascar</option>
                                      <option>Malawi</option>
                                      <option>Malaysia</option>
                                      <option>Maldives</option>
                                      <option>Mali</option>
                                      <option>Malta</option>
                                      <option>Marshall Islands</option>
                                      <option>Martinique</option>
                                      <option>Mauritania</option>
                                      <option>Mauritius</option>
                                      <option>Mayotte</option>
                                      <option>Mexico</option>
                                      <option>Micronesia, Federated States of</option>
                                      <option>Moldova</option>
                                      <option>Monaco</option>
                                      <option>Mongolia</option>
                                      <option>Montserrat</option>
                                      <option>Morocco</option>
                                      <option>Mozambique</option>
                                      <option>Myanmar</option>
                                      <option>Namibia</option>
                                      <option>Nauru</option>
                                      <option>Nepal</option>
                                      <option>Netherlands</option>
                                      <option>Netherlands Antilles</option>
                                      <option>New Caledonia</option>
                                      <option>New Zealand</option>
                                      <option>Nicaragua</option>
                                      <option>Niger</option>
                                      <option>Nigeria</option>
                                      <option>Niue</option>
                                      <option>Norfolk Island</option>
                                      <option>Northern Mariana Islands</option>
                                      <option>Norway</option>
                                      <option>Oman</option>
                                      <option>Pakistan</option>
                                      <option>Palau</option>
                                      <option>Panama</option>
                                      <option>Papua New Guinea</option>
                                      <option>Paraguay</option>
                                      <option>Peru</option>
                                      <option>Philippines</option>
                                      <option>Pitcairn Island</option>
                                      <option>Poland</option>
                                      <option>Portugal</option>
                                      <option>Puerto Rico</option>
                                      <option>Qatar</option>
                                      <option>Reunion</option>
                                      <option>Romania</option>
                                      <option>Russia</option>
                                      <option>Rwanda</option>
                                      <option>S. Georgia and S. Sandwich Isls.</option>
                                      <option>Saint Kitts &amp; Nevis</option>
                                      <option>Saint Lucia</option>
                                      <option>Saint Vincent and The Grenadines</option>
                                      <option>Samoa</option>
                                      <option>San Marino</option>
                                      <option>Sao Tome and Principe</option>
                                      <option>Saudi Arabia</option>
                                      <option>Senegal</option>
                                      <option>Seychelles</option>
                                      <option>Sierra Leone</option>
                                      <option>Singapore</option>
                                      <option>Slovakia</option>
                                      <option>Slovenia</option>
                                      <option>Somalia</option>
                                      <option>South Africa</option>
                                      <option>Spain</option>
                                      <option>Sri Lanka</option>
                                      <option>St. Helena</option>
                                      <option>St. Pierre and Miquelon</option>
                                      <option>Sudan</option>
                                      <option>Suriname</option>
                                      <option>Svalbard and Jan Mayen Islands</option>
                                      <option>Swaziland</option>
                                      <option>Sweden</option>
                                      <option>Switzerland</option>
                                      <option>Syria</option>
                                      <option>Taiwan</option>
                                      <option>Tajikistan</option>
                                      <option>Tanzania</option>
                                      <option>Thailand</option>
                                      <option>Togo</option>
                                      <option>Tokelau</option>
                                      <option>Tonga</option>
                                      <option>Trinidad and Tobago</option>
                                      <option>Tunisia</option>
                                      <option>Turkey</option>
                                      <option>Turkmenistan</option>
                                      <option>Turks and Caicos Islands</option>
                                      <option>Tuvalu</option>
                                      <option>Uganda</option>
                                      <option>Ukraine</option>
                                      <option>United Arab Emirates</option>
                                      <option>United Kingdom</option>
                                      <option>United States of America</option>
                                      <option>Uruguay</option>
                                      <option>Uzbekistan</option>
                                      <option>Vanuatu</option>
                                      <option>Vatican City</option>
                                      <option>Venezuela</option>
                                      <option>Vietnam</option>
                                      <option>Virgin Islands</option>
                                      <option>Wallis and Futuna Islands</option>
                                      <option>Western Sahara</option>
                                      <option>Yemen</option>
                                      <option>Yugoslavia (Former)</option>
                                      <option>Zaire</option>
                                      <option>Zimbabwe</option>
                                    </select>
                                  </p></td>
                                  <td width="13%"><p>
                                    <input name="button43" type="button" id="button43" onclick="javascript:addSrcToDestListCL()" value="Add" style="width:62px"/>
</p>
                                    <p>
                                      <input name="button443" type="button" id="button443" onclick="javascript:deleteFromDestListCL();" value="Remove" style="width:62px"/>
                                    </p></td>
                                  <td width="39%"><p>
                                    <select name="countryliving[]" size="5" multiple="multiple" id="countryliving" style="width:150px;FONT-SIZE:8.5pt">
                                    <option selected="selected">India</option>
									</select>
                                  </p></td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr valign="top" class="outerborder">
                              <td height="24" colspan="2" align="left" class="bottomborder"><p><strong>Citizenship : </strong></p></td>
                            </tr>
                            <tr valign="top" class="outerborder">
                              <td height="19" colspan="2" align="left" class="bottomborder"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="48%" align="right"><p class="smalltxt frmlftpad">
                                    <select name="citizenship1" size="5" multiple="multiple" id="citizenship1" style="width:245px;FONT-SIZE:8.5pt">
                                      <option selected="selected">India</option>
                                      <option>Any</option>
                                      <option>United States of America</option>
                                      <option>United Arab Emirates</option>
                                      <option>Malaysia</option>
                                      <option>United Kingdom</option>
                                      <option>Australia</option>
                                      <option>Saudi Arabia</option>
                                      <option>Canada</option>
                                      <option>Singapore</option>
                                      <option>Kuwait</option>
                                      <option>Afghanistan</option>
                                      <option>Albania</option>
                                      <option>Algeria</option>
                                      <option>American Samoa</option>
                                      <option>Andorra</option>
                                      <option>Angola</option>
                                      <option>Anguilla</option>
                                      <option>Antarctica</option>
                                      <option>Antigua and Barbuda</option>
                                      <option>Argentina</option>
                                      <option>Armenia</option>
                                      <option>Aruba</option>
                                      <option>Australia</option>
                                      <option>Austria</option>
                                      <option>Azerbaijan</option>
                                      <option>Bahamas</option>
                                      <option>Bahrain</option>
                                      <option>Bangladesh</option>
                                      <option>Barbados</option>
                                      <option>Belarus</option>
                                      <option>Belgium</option>
                                      <option>Belize</option>
                                      <option>Benin</option>
                                      <option>Bermuda</option>
                                      <option>Bhutan</option>
                                      <option>Bolivia</option>
                                      <option>Bosnia and Herzegovina</option>
                                      <option>Botswana</option>
                                      <option>Bouvet Island</option>
                                      <option>Brazil</option>
                                      <option>British Indian Ocean Territory</option>
                                      <option>British Virgin Islands</option>
                                      <option>Brunei</option>
                                      <option>Bulgaria</option>
                                      <option>Burkina Faso</option>
                                      <option>Burundi</option>
                                      <option>Cambodia</option>
                                      <option>Cameroon</option>
                                      <option>Canada</option>
                                      <option>Cape Verde</option>
                                      <option>Cayman Islands</option>
                                      <option>Central African Republic</option>
                                      <option>Chad</option>
                                      <option>Chile</option>
                                      <option>China</option>
                                      <option>Christmas Island</option>
                                      <option>Cocos Islands</option>
                                      <option>Colombia</option>
                                      <option>Comoros</option>
                                      <option>Congo</option>
                                      <option>Cook Islands</option>
                                      <option>Costa Rica</option>
                                      <option>Croatia</option>
                                      <option>Cuba</option>
                                      <option>Cyprus</option>
                                      <option>Czech Republic</option>
                                      <option>Denmark</option>
                                      <option>Djibouti</option>
                                      <option>Dominica</option>
                                      <option>Dominican Republic</option>
                                      <option>East Timor</option>
                                      <option>Ecuador</option>
                                      <option>Egypt</option>
                                      <option>El Salvador</option>
                                      <option>Equatorial Guinea</option>
                                      <option>Eritrea</option>
                                      <option>Estonia</option>
                                      <option>Ethiopia</option>
                                      <option>Falkland Islands</option>
                                      <option>Faroe Islands</option>
                                      <option>Fiji</option>
                                      <option>Finland</option>
                                      <option>France</option>
                                      <option>French Guiana</option>
                                      <option>French Polynesia</option>
                                      <option>French Southern Territories</option>
                                      <option>Gabon</option>
                                      <option>Gambia</option>
                                      <option>Georgia</option>
                                      <option>Germany</option>
                                      <option>Ghana</option>
                                      <option>Gibraltar</option>
                                      <option>Greece</option>
                                      <option>Greenland</option>
                                      <option>Grenada</option>
                                      <option>Guadeloupe</option>
                                      <option>Guam</option>
                                      <option>Guatemala</option>
                                      <option>Guinea</option>
                                      <option>Guinea-Bissau</option>
                                      <option>Guyana</option>
                                      <option>Haiti</option>
                                      <option>Heard and McDonald Islands</option>
                                      <option>Honduras</option>
                                      <option>Hong Kong</option>
                                      <option>Hungary</option>
                                      <option>Iceland</option>
                                      <option>India</option>
                                      <option>Indonesia</option>
                                      <option>Iran</option>
                                      <option>Iraq</option>
                                      <option>Ireland</option>
                                      <option>Israel</option>
                                      <option>Italy</option>
                                      <option>Ivory Coast</option>
                                      <option>Jamaica</option>
                                      <option>Japan</option>
                                      <option>Jordan</option>
                                      <option>Kazakhstan</option>
                                      <option>Kenya</option>
                                      <option>Kiribati</option>
                                      <option>Korea, North</option>
                                      <option>Korea, South</option>
                                      <option>Kuwait</option>
                                      <option>Kyrgyzstan</option>
                                      <option>Laos</option>
                                      <option>Latvia</option>
                                      <option>Lebanon</option>
                                      <option>Lesotho</option>
                                      <option>Liberia</option>
                                      <option>Libya</option>
                                      <option>Liechtenstein</option>
                                      <option>Lithuania</option>
                                      <option>Luxembourg</option>
                                      <option>Macau</option>
                                      <option>Macedonia, Former Yugoslav Republic of</option>
                                      <option>Madagascar</option>
                                      <option>Malawi</option>
                                      <option>Malaysia</option>
                                      <option>Maldives</option>
                                      <option>Mali</option>
                                      <option>Malta</option>
                                      <option>Marshall Islands</option>
                                      <option>Martinique</option>
                                      <option>Mauritania</option>
                                      <option>Mauritius</option>
                                      <option>Mayotte</option>
                                      <option>Mexico</option>
                                      <option>Micronesia, Federated States of</option>
                                      <option>Moldova</option>
                                      <option>Monaco</option>
                                      <option>Mongolia</option>
                                      <option>Montserrat</option>
                                      <option>Morocco</option>
                                      <option>Mozambique</option>
                                      <option>Myanmar</option>
                                      <option>Namibia</option>
                                      <option>Nauru</option>
                                      <option>Nepal</option>
                                      <option>Netherlands</option>
                                      <option>Netherlands Antilles</option>
                                      <option>New Caledonia</option>
                                      <option>New Zealand</option>
                                      <option>Nicaragua</option>
                                      <option>Niger</option>
                                      <option>Nigeria</option>
                                      <option>Niue</option>
                                      <option>Norfolk Island</option>
                                      <option>Northern Mariana Islands</option>
                                      <option>Norway</option>
                                      <option>Oman</option>
                                      <option>Pakistan</option>
                                      <option>Palau</option>
                                      <option>Panama</option>
                                      <option>Papua New Guinea</option>
                                      <option>Paraguay</option>
                                      <option>Peru</option>
                                      <option>Philippines</option>
                                      <option>Pitcairn Island</option>
                                      <option>Poland</option>
                                      <option>Portugal</option>
                                      <option>Puerto Rico</option>
                                      <option>Qatar</option>
                                      <option>Reunion</option>
                                      <option>Romania</option>
                                      <option>Russia</option>
                                      <option>Rwanda</option>
                                      <option>S. Georgia and S. Sandwich Isls.</option>
                                      <option>Saint Kitts &amp; Nevis</option>
                                      <option>Saint Lucia</option>
                                      <option>Saint Vincent and The Grenadines</option>
                                      <option>Samoa</option>
                                      <option>San Marino</option>
                                      <option>Sao Tome and Principe</option>
                                      <option>Saudi Arabia</option>
                                      <option>Senegal</option>
                                      <option>Seychelles</option>
                                      <option>Sierra Leone</option>
                                      <option>Singapore</option>
                                      <option>Slovakia</option>
                                      <option>Slovenia</option>
                                      <option>Somalia</option>
                                      <option>South Africa</option>
                                      <option>Spain</option>
                                      <option>Sri Lanka</option>
                                      <option>St. Helena</option>
                                      <option>St. Pierre and Miquelon</option>
                                      <option>Sudan</option>
                                      <option>Suriname</option>
                                      <option>Svalbard and Jan Mayen Islands</option>
                                      <option>Swaziland</option>
                                      <option>Sweden</option>
                                      <option>Switzerland</option>
                                      <option>Syria</option>
                                      <option>Taiwan</option>
                                      <option>Tajikistan</option>
                                      <option>Tanzania</option>
                                      <option>Thailand</option>
                                      <option>Togo</option>
                                      <option>Tokelau</option>
                                      <option>Tonga</option>
                                      <option>Trinidad and Tobago</option>
                                      <option>Tunisia</option>
                                      <option>Turkey</option>
                                      <option>Turkmenistan</option>
                                      <option>Turks and Caicos Islands</option>
                                      <option>Tuvalu</option>
                                      <option>Uganda</option>
                                      <option>Ukraine</option>
                                      <option>United Arab Emirates</option>
                                      <option>United Kingdom</option>
                                      <option>United States of America</option>
                                      <option>Uruguay</option>
                                      <option>Uzbekistan</option>
                                      <option>Vanuatu</option>
                                      <option>Vatican City</option>
                                      <option>Venezuela</option>
                                      <option>Vietnam</option>
                                      <option>Virgin Islands</option>
                                      <option>Wallis and Futuna Islands</option>
                                      <option>Western Sahara</option>
                                      <option>Yemen</option>
                                      <option>Yugoslavia (Former)</option>
                                      <option>Zaire</option>
                                      <option>Zambia</option>
                                      <option>Zimbabwe</option>
                                    </select>
                                  </p></td>
                                  <td width="13%"><p>
                                    <input name="button45" type="button" id="button45" onclick="javascript:addSrcToDestListCT()" value="Add" style="width:62px"/>
</p>
                                    <p>
                                      <input name="button444" type="button" id="button444" onclick="javascript:deleteFromDestListCT();" value="Remove" style="width:62px"/>
                                    </p></td>
                                  <td width="39%"><p>
                                    <select name="citizenship[]" size="5" multiple="multiple" id="citizenship" style="width:150px;FONT-SIZE:8.5pt">
                                     <option selected="selected">India</option>
									</select>
                                  </p></td>
                                </tr>
                              </table></td>
                              </tr>
                            <tr valign="top" class="outerborder">
                              <td height="24" align="left" class="bottomborder"><p><strong>Eating Habits : </strong></p></td>
                              <td height="24" align="left" valign="top" class="bottomborder"><p>
                                  <label>
                                  <input name="foodPref" type="radio" value="Vegetarian" class="t1" />
                                  </label>
                                Vegetarian
                                <input name="foodPref" type="radio" value="Non vegetarian" class="t1" />
                                Non-Vegetarian
                                <input name="foodPref" type="radio" class="t1" value="Any" checked="checked" />
                                All</p></td>
                            </tr>
                            
                            <tr>
                              <td height="23" width="171">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="23" width="171">&nbsp;</td>
                              <td width="520" align="left"><input type="submit" name="submit" value="Search" onclick="javascript:selectFromDestListC(); selectFromDestListR(); selectFromDestListM(); selectFromDestListS(); selectFromDestListE(); selectFromDestListSt(); selectFromDestListO();selectFromDestListCL();selectFromDestListCT();" /></td>
                            </tr>
                            <tr>
                              <td height="23" colspan="2">&nbsp;</td>
                            </tr>
                          </table>
                        </form></td>
                      </tr>
                      <tr>
                        <td height="19" valign="top">&nbsp;</td>
                      </tr>
                    </table>