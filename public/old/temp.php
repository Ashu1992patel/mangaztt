<?php
if(isset($complete)){
	extract($_POST);
	$sql1="UPDATE profiles SET physical='$physical', blood_group='$blood_group', body_type='$body_type', weight='$weight', complexion='$complexion', gotra='$gotra', star='$star', rashi='$rashi' WHERE id=".$_SESSION["id"];
	if($conn->query($sql1) === TRUE)
	{
		echo "<div style='color: green;'>Profile Completed!!!</div>";
		$sql2 = "SELECT * FROM profiles WHERE id=".$_SESSION["id"];	
		$details1=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
		$_SESSION["me"]= $details1;
		redirect("registration3.php");
	}
	else{
		echo "Error: ".$sql1."<br>".$conn->error;
		echo "<script> alert('Some problem has occurred while completing your profile! Complete it later in Edit Profile Section.'); </script>";
		redirect("registration3.php");
	}
}

	

?>