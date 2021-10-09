<?php 
ini_set("display_errors", 'on');
//require "incs/__user_data.incs.php";
session_start();
if(isset($_SESSION['email'])){
	header("location: user.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Log iN</title>
</head>
<body>

		<?php require "forms/process_forms.php"; ?>

		<form action='' method="POST">

		<label>Email: </label>
		<input type='email' name='email'><br>

		<label>Password: </label>
		<input type='password' name='password'><br>

		<input type='submit' name='login' value='Log in'>

	</form>

</body>
</html>