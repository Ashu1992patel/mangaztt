<?php

	
	if(isset($_SESSION["admin"]))
	{
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
			extract($_POST);
			if(isset($confirm))
			{
				extract($_POST);
				
				$dlt_sql1="DELETE FROM images WHERE id=".$temp_id;
				$dlt_sql2="DELETE FROM activate WHERE id=".$temp_id;
				$dlt_sql3="DELETE FROM profiles WHERE id=".$temp_id;
				if(mysqli_query($conn, $dlt_sql1)){
					if(mysqli_query($conn, $dlt_sql2)){
						if(mysqli_query($conn, $dlt_sql3))
							echo "<div style='color: green; padding-left: 10px;'>Profile deleted!</div>";
						else
							echo "<div style='color: red; padding-left: 10px;'>Error deleting profile data.</div>";
					}else
						echo "<div style='color: red; padding-left: 10px;'>Error deleting active features.</div>";
				}else
					echo "<div style='color: red; padding-left: 10px;'>Error deleting images.</div>";
					
				
			}
			if(isset($delete))
			{
				
				$sql="SELECT * FROM profiles WHERE id='$id_dlt'";
					$result=mysqli_query($conn, $sql);
			
			
			
			$msg="Your entered profile is...";
			if(mysqli_num_rows($result)==0)
			{	$msg="Sorry, No profiles matched your search...Try again with different criteria...";
				echo "<div style='color: purple; padding: 0 5px;' align='left'>".$msg."</div>";
			}else
			{
			echo "<table class='results'>";
			echo "<tr><div style='color: purple; padding: 0 5px;' align='left'>".$msg."</div></tr>";
			while($row= $result->fetch_assoc())
			{	
				$dob= date_create($row["dob"]);
				$today= date_create(NULL);
				$age=date_diff($today,$dob);
				
				echo "<tr valign='top'>";
				$check_sql="SELECT active FROM activate WHERE id=".$row["id"];
				$check= mysqli_fetch_assoc(mysqli_query($conn, $check_sql));
				//if($check["active"]==="yes")
					
					$pic_sql="SELECT pic1 FROM images WHERE id=".$row["id"];
					$pic= mysqli_fetch_assoc(mysqli_query($conn, $pic_sql));
					
					
					echo "<td class='results'><div style='min-width: 200px;'><center><img src='".$pic["pic1"]."' class='image' alt='Image Protected'></center></div></td>";
					echo "<td><table class='results'>";
					echo "<tr valign='top'><td class='details'><strong>Name: </strong>".$row["name"]." (".$row["id"].")<td class='details' align='right'><strong>D.O.B.: </strong>".$row["dob"]."</td></tr>";
					
					echo "<tr valign='top'><td class='details'><strong>Age: </strong>".$age->format("%y")." yrs(approx.) | "."<strong>Height: </strong>".$row["height"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Residence: </strong>".$row["city"].", ".$row["state"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Education: </strong>".$row["education"]."</td></tr>";
					echo "<tr valign='top'><td class='details'><strong>Occupation: </strong>".$row["occupation"]."</td><td class='details' style='color: #FF6600;'><strong>Active: </strong>".$check["active"]."</td></tr>";
					
					echo "<form name='delete_profile' action='' method='post'>";
					echo "<input type='hidden' name='temp_id' value='".$row["id"]."'>";
					echo "<tr valign='bottom'><td></td><td class='details' align='right'><input type='submit' name='confirm' value='Delete'></td></tr>";
					
					echo "</form>";
					
					echo "</td></table>";
				
				echo "</tr>";
			}
			echo "</table>";
			}
		} else{
			include("delete_form.php");
		}
		}
	
		
	}else
		echo "<font color='red'>:-(  Not logged in!!!</font>";
?>
