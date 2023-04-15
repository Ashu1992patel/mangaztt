<?php


session_start();
echo "<link href='style.css' type='text/css' rel='stylesheet' />";
include("top.php");
extract($_POST);
if(isset($_SESSION["me"]))
{
	$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
	if($conn->connect_error)
	{
			die("Connection Failed: ". $conn->connect_error);
	}
	else
	{
		if(isset($complete)){
		extract($_POST);
		$tob=$hrs.":".$mins.":".$secs." ".$ampm;
		$sql1="UPDATE profiles SET physical='$physical', blood_group='$blood_group', body_type='$body_type', weight='$weight', complexion='$complexion', diet='$diet', gotra='$gotra', star='$star', rashi='$rashi', tob='$tob', bop='$bop', f_values='$f_values', f_type='$f_type', f_status='$f_status', brothers='$brothers', sisters='$sisters', bro_married='$bro_married', sis_married='$sis_married', father_occupation='$father_occupation', mother_occupation='$mother_occupation', origin='$origin', about_fam='$about_fam' , p_agefrom='$p_agefrom', p_ageto='$p_ageto', p_status='$p_status', p_children='$p_children', p_heightfrom='$p_heightfrom', p_heightto='$p_heightto', p_physical='$p_physical', p_salary='$p_salary', p_religion='$p_religion', p_language='$p_language', p_city='$p_city', p_state='$p_state', about_me='$about_me' WHERE id=".$_SESSION["id"];
		if($conn->query($sql1) === TRUE)
		{
			echo "<td><div style='color: green;'>Profile Completed!!!</div></td>";
			$sql2 = "SELECT * FROM profiles WHERE id=".$_SESSION["id"];	
			$details1=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
			$_SESSION["me"]= $details1;
			include("registration3.php");
		}
		else{
			echo "Error: ".$sql1."<br>".$conn->error;
			echo "<script> alert('Some problem has occurred while completing your profile! Complete it later in Edit Profile Section.'); </script>";
			include("registration3.php");
		}
		}
}
}
include("bottom.php");

	

?>
