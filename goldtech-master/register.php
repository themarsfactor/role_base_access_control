<?php
	ini_set('display_errors', 'on');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>

<body>
		


	<?php require 'forms/process_forms.php'; ?>
	<h4> Register Account</h4>
	<form action='' method="POST">

		<div>
			<label>Name: </label>
			<input type='text' name='name' value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>"><br>
		</div>

		<div>
			<label>Email: </label>
			<input type='email' name='email' value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"><br>
		</div>

		<div>
			<label>Password: </label>
			<input type='password' name='password'><br>
		</div>

		<input type='submit' name='register' value='Register New Account'>

	</form>

</body>
</html>