<?php
session_start();
echo "<link href='style.css' type='text/css' rel='stylesheet' />";
include("top.php");
if(isset($_SESSION["me"]))
{
$target_dir = "uploads/";

$uploadOk = 1;
$conn= new mysqli("localhost","mangaztt_user","Ajit@@123","mangaztt_marriagedb");
if($conn->connect_error)
{
	die("Connection Failed: ". $conn->connect_error);
}
else
{

	if(isset($_POST["submit"])) {
		extract($_POST);
			
		$check = getimagesize($_FILES["pic"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}


	$count = 1;
	foreach ($_FILES["pic"]["error"] as $key => $error) 
	{	
		$target_file = $target_dir . basename($_FILES["pic"]["name"][$key]);
		
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (file_exists($target_file)) {
			echo "Sorry, file ".basename($_FILES["pic"]["name"][$key])." already exists.<br>";
			$uploadOk = 0;
		} 
		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
			$uploadOk = 0;
		}
		if($uploadOk == 1){
		if ($error == UPLOAD_ERR_OK)
		{
			$tmp_name = $_FILES["pic"]["tmp_name"][$key];
			$name = $_FILES["pic"]["name"][$key];
			move_uploaded_file($tmp_name, "uploads/$name");
			rename("uploads/".$name, "uploads/".$_SESSION["me"]["id"]."_".$count.".jpg");
			
			echo "<div style='color: green;'>Image ".$count.":  Uploaded Successfully!!!</div>";
			$tmp_field="uploads/".$_SESSION["me"]["id"]."_".$count.".jpg";
			$tmp_sql="UPDATE images SET pic".$count."=\"".$tmp_field."\" WHERE id=\"".$_SESSION["me"]["id"]."\"";
			$count++;
			mysqli_query($conn, $tmp_sql);
			echo '<script type="text/javascript">alert("You have completed your profile!"); window.location = "home.php";</script>';
		}
		}
	}
}
}
else
{
	echo "<div style='color: red;'>:-(  Not Logged In!!!</div>";
}
include("bottom.php");
?>
