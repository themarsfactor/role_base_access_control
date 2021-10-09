<?php
require "incs/__user_data.incs.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="css/forms.css">
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


	?>

	<div><h5>Update Profile Photo</h5></div>
	<form action='' method='POST' enctype="multipart/form-data">
		<div class='form-group'>
			<img src="<?php echo $profile_photo; ?>" style='width: 10%;' class='form-img'>
			<label for='photo'>Update Photo</label>
			<input type='file' name='photo' id='photo'>
		</div>



	</form>


	
</body>
</html>