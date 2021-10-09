<?php 
ini_set("display_errors", "on");
require "incs/__user_data.incs.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Name</title>
</head>
<body>

	<h4>Welcome <a href='logout.php'>Logout</a></h4>
	<span><small><button onclick="location.href='upload.php'">Upload Photo</button></small></span>
	<hr>

		<?php require "forms/process_forms.php"; ?>
		<form action='' method="POST">

		<label>Old Name: </label>
		<input type='text' name='old_name' value="<?php echo $name; ?>" disabled><br>

		<label>New Name: </label>
		<input type='text' name='new_name'><br>

		<input type='submit' name='update_name' value='Save Update'>

	</form>


<h6><a href='#' onclick='deleteAccount(<?php echo $id; ?>)'>Delete Account</a></h6>


<script src='js/scripts.js'></script>
</body>
</html>