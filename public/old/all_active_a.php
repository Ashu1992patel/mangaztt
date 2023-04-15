

<?php

	
	if(isset($_SESSION["admin"]))
	{
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{	extract($_POST);
	
			if(isset($activate)){
				$set="UPDATE activate SET active='yes' WHERE id=".$temp_id;
				if($conn->query($set)){
					echo "<font color='green'>Activated successfully!</font>";
				}
			}elseif(isset($deactivate)){
				$set="UPDATE activate SET active='no' WHERE id=".$temp_id;
				if($conn->query($set)){
					echo "<font color='green'>Deactivated successfully!</font>";
				}
			}

			if(isset($view)){
				extract($_POST);
				echo "<table class='results'>";
				$pic_sql="SELECT pic1, pic2, pic3 FROM images WHERE id=".$temp_id;
				$detail_sql="SELECT * FROM profiles WHERE id=".$temp_id;
				$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
				$detail= mysqli_fetch_assoc(mysqli_query($conn, $detail_sql));
				echo "<tr><div style='color: purple; padding: 0 5px;' align='left'><strong><u>".$detail["name"]."</u> (".$detail["id"].")</strong></div></tr>";
				echo "<tr valign='top'>";
				
				echo "<br>";
				
				echo "<td><div class='image_box'><img src='".$pic["pic1"]."' class='image1' align='left' alt='Image Protected'></div></td>";
				echo "<td><div class='image_box'><center><img src='".$pic["pic2"]."' class='image1' alt='Image Protected'></center></div></td>";
				echo "<td><div class='image_box'><img src='".$pic["pic3"]."' class='image1' alt='Image Protected' align='right'></div></td></tr>";
				
				echo "<tr valign='top' >";
				echo "<table class='results' >";
				echo "<br><tr valign='top'><td class='details_heading'>Personel Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Name: </strong>".$detail["name"]."</td><td class='details'><br><strong>D.O.B.: </strong>".$detail["dob"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Gender: </strong>".$detail["gender"]."</td><td class='details'><strong>Marital Status: </strong>".$detail["status"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Religion: </strong>".$detail["about_me"];
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
				
				echo "<tr valign='top'><td class='details_heading'><br>Family Details:<br></td></tr>";
				echo "<tr valign='top'><td class='details'><br><strong>Family Values: </strong>".$detail["f_values"]."</td><td class='details'><br><strong>Family Type: </strong>".$detail["f_type"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Family Status: </strong>".$detail["f_status"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'>><strong>No. of Brothers: </strong>".$detail["brothers"]."</td><td class='details'><strong>No. of Sisters: </strong>".$detail["sisters"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>No. of Brothers Married: </strong>".$detail["bro_married"]."</td><td class='details'><strong>No. of Sisters Married: </strong>".$detail["sis_married"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Father's Occupation: </strong>".$detail["father_occupation"]."</td><td class='details'><strong>Mother's Occupation: </strong>".$detail["mother_occupation"]."</td></tr>";
				echo "<tr><td></td></tr>";
				
				echo "<tr valign='top'><td class='details'><strong>Ancestral / Family Origin: </strong>".$detail["origin"]."</td></tr>";
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
				echo "<tr valign='top'><td class='details'><strong>Contact No.: </strong>".$detail["mob"].", ".$detail["mob2"]."</td><td class='details'><strong>Country of Residence: </strong>".$detail["country"]."</td></tr>";
				echo "<tr><td></td></tr>";
				echo "<tr valign='top'><td class='details'><strong>Email ID: </strong>".$detail["email"]."</td></tr>";
				
				echo "</table></tr>";
				echo "</table>";
			}else
			{	
				$check_sql="SELECT id FROM activate WHERE active='yes' ORDER BY id DESC ";
				
			
			$result=mysqli_query($conn, $check_sql);
			
			
			
			$msg="All active profiles...";
			if(mysqli_num_rows($result)==0)
			{	$msg="Sorry, No profiles in the database...";
				
			}else
			{
			echo "<table class='results'>";
			echo "<tr><div style='color: purple; padding: 0 5px;' align='left'>".$msg."</div></tr>";
			while($active= $result->fetch_assoc())
			{	
				$sql="SELECT * FROM profiles WHERE id=".$active["id"];
				$result2=mysqli_query($conn, $sql);
				$row= $result2->fetch_assoc();
				$dob= date_create($row["dob"]);
				$today= date_create(NULL);
				$age=date_diff($today,$dob);
				
				echo "<tr valign='top'>";

					$pic_sql="SELECT pic1 FROM images WHERE id=".$row["id"];
					$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
					
					
					echo "<td class='results'><div style='min-width: 200px;'><center><img src='".$pic["pic1"]."' class='image' alt='Image Protected'></center></div></td>";
					echo "<td><table class='results'>";
					echo "<tr valign='top'><td class='details'><strong>Name: </strong>".$row["name"]." (".$row["id"].")<td class='details' align='right'><strong>D.O.B.: </strong>".$row["dob"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Caste: </strong>".$row["caste"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Age: </strong>".$age->format("%y")." yrs(approx.) | "."<strong>Height: </strong>".$row["height"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Residence: </strong>".$row["city"].", ".$row["state"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Education: </strong>".$row["education"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Occupation: </strong>".$row["occupation"]."</td></tr>";
					
					echo "<form name='set_active' action='' method='post'>";
					echo "<input type='hidden' name='temp_id' value='".$row["id"]."'>";
					echo "<tr valign='bottom'>";
					echo "<td class='details' align='left'><font color='orange'>Active now</font>&nbsp;&nbsp;<input type='submit' name='deactivate' value='Deactivate'></td>";
					echo "</form>";
					
					echo "<form name='get_details' action='' method='post'>";
					echo "<input type='hidden' name='temp_id' value='".$row["id"]."'>";
					echo "<td class='details' align='right'><input type='submit' name='view' value='Get Details'></td></tr>";
					
					echo "</form>";
					
					echo "</td></table>";
				
				echo "</tr>";
			}
			echo "</table>";
			}
		} 
		}
	}
			
	
	
	
	
	
	
?>
                      