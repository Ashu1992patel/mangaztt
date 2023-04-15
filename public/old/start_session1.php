<?php
		session_start();
		$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
		if($conn->connect_error)
		{
			die("Connection Failed: ". $conn->connect_error);
		}
		else
		{
		extract($_POST);
		$_SESSION["uid"]= $uid;
		
		$sql = "SELECT * FROM admin WHERE uid='$uid' and pass='$pass'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==0)
		{	echo "<script language='Javascript' type='text/javascript'>alert(':-(  Invalid Login Details');</script>";
			echo '<script type="text/javascript">window.location = "affiliate.php";</script>';
		}else{
		$details=mysqli_fetch_assoc($result);
		$_SESSION["admin"]= $details;
		if(isset($_SESSION["admin"]))
			echo '<script type="text/javascript">window.location = "admin.php";</script>';
		}
		}
?>