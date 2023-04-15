<?php
		
		$_SESSION["email"]= $email;
		
		$sql = "SELECT * FROM profiles WHERE email=\"".$_SESSION["email"]."\" or id=\"".$_SESSION["email"]."\"";
		$details=mysqli_fetch_assoc(mysqli_query($conn,$sql));
		$_SESSION["me"]= $details;
		
		$check_active="SELECT * FROM activate WHERE id=".$_SESSION["me"]["id"];
		$act=mysqli_fetch_assoc(mysqli_query($conn,$check_active));
		$_SESSION["active"]=$act["active"];
		if(isset($_SESSION["me"]))
			echo '<script type="text/javascript">window.location = "home.php";</script>';
		
?>