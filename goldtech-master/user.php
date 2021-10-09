<?php 
ini_set("display_errors", "on");
require "incs/__user_data.incs.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>



	<?php 

		//check if image is uploaded ..
		if($_SESSION['profile_photo_path'] == NULL){
			$profile_photo = "default_photos/user.jpeg";
		}else{
			$profile_photo = $_SESSION['profile_photo_path'];
		}

		echo "Welcome ". $name;

		echo "<h4><a href='update_name.php'>Update Name</a> | <a href='update_profile.php'>Update Profile</a></h4>";
		echo "<img src='{$profile_photo}' style='width: 25%;'>";


	?>

</body>
</html>