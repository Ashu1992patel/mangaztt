<?php

	
	if(isset($_SESSION["me"]))
	{
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{	
				echo "<table class='results'>";
				$pic_sql="SELECT pic1, pic2, pic3 FROM images WHERE id=".$_SESSION["me"]["id"];
				$detail_sql="SELECT * FROM profiles WHERE id=".$_SESSION["me"]["id"];
				$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
				$detail= mysqli_fetch_assoc(mysqli_query($conn, $detail_sql));
				
				
				$activate_sql="SELECT * FROM activate WHERE id=".$_SESSION["me"]["id"];
				$activate= mysqli_fetch_assoc(mysqli_query($conn, $activate_sql));
					
				echo "<tr><div style='color: purple; padding: 0 5px;' align='left'><strong><u>".$detail["name"]."</u> (".$detail["id"].")</strong></div></tr>";
				echo "<tr valign='top'>";
				
				echo "<br>";
				
				echo "<td><div class='image_box'><img src='".$pic["pic1"]."' class='image1' align='left' alt='Image Protected'></div></td>";
				echo "<td><div class='image_box'><center><img src='".$pic["pic2"]."' class='image1' alt='Image Protected'></center></div></td>";
				echo "<td><div class='image_box'><img src='".$pic["pic3"]."' class='image1' alt='Image Protected' align='right'></div></td></tr>";
				
				echo "<tr valign='top' >";
				echo "<table class='results' >";
				echo "<br><tr valign='top'><td class='details_heading'>Package<br></td></tr>";
	
	if ($activate["plan"]=="Gold")	
		{
				echo "<tr valign='top'><td class='details'><strong>Active Plan: </strong><div class='plan'><i><font size='1px' color='gold'>".$activate["plan"]."</font></i><img src='images/gold.gif'></div>
</td></tr>";
		}
	if ($activate["plan"]=="Super Gold")	
	{
				echo "<tr valign='top'><td class='details'><strong>Active Plan: </strong><div class='plan'><i><font size='1px' color='gold'>".$activate["plan"]."</font></i><img src='images/supergold.gif'></div>
</td></tr>";	}		
	
	if ($activate["plan"]=="Diamond")	
	{
				echo "<tr valign='top'><td class='details'><strong>Active Plan: </strong><div class='plan'><i><font size='1px' color='gold'>".$activate["plan"]."</font></i><img src='images/diamond.gif'></div>
</td></tr>";	}
				echo "<tr valign='top'><td class='details'><strong>Activate Date: </strong>".$activate["activated_at"]."</td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Deactivate Date: </strong>".$activate["deactivated_at"]."</td></tr>";
				echo "<br><tr valign='top'><td class='details_heading'><br><br>Personal Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Name: </strong>".$detail["name"]."</td><td class='details'><br><strong>D.O.B.: </strong>".$detail["dob"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Gender: </strong>".$detail["gender"]."</td><td class='details'><strong>Marital Status: </strong>".$detail["status"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				if(!($detail["status"]=="Never married"))
				{
				echo "<tr valign='top'><td class='details'><strong>No. of Children: </strong>".$detail["children"]."</td><td class='details'><strong>Children Living With: </strong>".$detail["living"]."</td></tr>";
				echo "<tr><td></td></tr>";
				}
				echo "<tr valign='top'><td class='details'><strong>Religion: </strong>".$detail["religion"];
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Caste: </strong>".$detail["caste"]."</td><td class='details'><strong>Subcaste: </strong>".$detail["subcaste"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Manglik: </strong>".$detail["manglik"]."</td><td class='details'><strong>Mother Tongue: </strong>".$detail["language"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>About Me: </strong>".$detail["about_me"];
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details_heading'><br>Education & Occupation Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Education: </strong>".$detail["education"]."</td><td class='details'><br><strong>Details of Education: </strong>".$detail["education_detail"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Occupation: </strong>".$detail["occupation"]."</td><td class='details'><strong>Details of Occupation: </strong>".$detail["occupation_detail"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Salary/Income per Year: </strong>".$detail["salary"]."</td><td class='details'><strong>Employement Sector: </strong>".$detail["employed_in"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details_heading'><br>Physical Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Height: </strong>".$detail["height"]."</td><td class='details'><br><strong>Weight: </strong>".$detail["weight"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Physical Status: </strong>".$detail["physical"]."</td><td class='details'><strong>Blood Group: </strong>".$detail["blood_group"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Body Type: </strong>".$detail["body_type"]."</td><td class='details'><strong>Complexion: </strong>".$detail["complexion"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details_heading'><br>Socio-Religious Background:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Time of Birth: </strong>".$detail["tob"]."</td><td class='details'><br><strong>Eating Habits: </strong>".$detail["diet"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Gotra: </strong>".$detail["gotra"]."</td><td class='details'><strong>Star: </strong>".$detail["star"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Rashi: </strong>".$detail["rashi"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details'><strong>Birth Place : </strong>".$detail["bop"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details_heading'><br>Family Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Family Values: </strong>".$detail["f_values"]."</td><td class='details'><br><strong>Family Type: </strong>".$detail["f_type"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Family Status: </strong>".$detail["f_status"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>No. of Brothers: </strong>".$detail["brothers"]."</td><td class='details'><strong>No. of Sisters: </strong>".$detail["sisters"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>No. of Brothers Married: </strong>".$detail["bro_married"]."</td><td class='details'><strong>No. of Sisters Married: </strong>".$detail["sis_married"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Father's Occupation: </strong>".$detail["father_occupation"]."</td><td class='details'><strong>Mother's Occupation: </strong>".$detail["mother_occupation"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details'><strong>Ancestral / Family Origin: </strong>".$detail["origin"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details'><strong>About Family : </strong>".$detail["about_fam"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details_heading'><br>Partner Preference:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Age Between: </strong>".$detail["p_agefrom"]." to ".$detail["p_ageto"]."</td><td class='details'><br><strong>Marital Status: </strong>".$detail["p_status"]."</td></tr>";
				echo "<tr><td></td></tr>";
				if($detail["p_status"] != "Never married"){
				echo "<tr valign='top'><td class='details'><strong>Has Children: </strong>".$detail["p_children"]."</td></tr>";
				echo "<tr><td></td></tr>";
				}
				echo "<tr valign='top'><td class='details'><strong>Height Between: </strong>".$detail["p_heightfrom"]." to ".$detail["p_heightto"]."</td><td class='details'><strong>Physical Status: </strong>".$detail["p_physical"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Minimum Salary Per Year: </strong>".$detail["p_salary"]."</td><td class='details'><strong>Religion: </strong>".$detail["p_religion"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Mother Tongue: </strong>".$detail["p_language"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>City Living In: </strong>".$detail["p_city"]."</td><td class='details'><strong>State: </strong>".$detail["p_state"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				
				echo "<tr valign='top'><td class='details_heading'><br>Contact Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>State & City of Residence: </strong>".$detail["city"].", ".$detail["state"]."</td><td class='details'><br><strong>Address: </strong>".$detail["address"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Contact No.: </strong>".$detail["mob"].", ".$detail["mob2"]."</td><td class='details'><strong>Country of Residence: </strong>".$detail["country"]."<br><br><br></td></tr>";

				

				echo "<tr valign='top'><td class='details'><strong>E-mail ID.: </strong>".$detail["email"]."</td></tr>";
				
				
				echo "</table></tr>";
				echo "</table>";
			
		}
	}
			
	
	
	
	
	
	
?>
                      