<?php
		$_SESSION["email"]= $email;
		
		$sql = "SELECT * FROM profiles WHERE email=\"".$_SESSION["email"]."\"";
		$details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
		$_SESSION["me"]= $details;
		$_SESSION["id"]=$details["id"];
		$update_id="INSERT INTO images (id) VALUES(".$details["id"].")";
		$set_inactive="INSERT INTO activate (id, active) VALUES(".$details["id"].",'no')";
		$conn->query($update_id);
		$conn->query($set_inactive);
		$_SESSION["active"]="no";
		
	
?>