<?php 
	ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>


	<?php

	
		if(isset($_POST['login'])){
			//form has been submitted ..
			//check if user entered data ..
			//
			//isset()
			//empty()
			//trim() ltrim() rtrim()
			//header()
			

			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			//create an errors array
			$errors = [];


			
			if(empty($username)){
				//echo "Please enter your username";
				$errors[] = "Please enter your username";

			}

			if(empty($password)){
				//echo "Enter your password";
				$errors[] = "Please enter your password";
			}



			if(empty($errors)){
				//there is no error
				header('location: user.php');
			}else{
				//there is at least one error in the errors array
				foreach($errors as $error){
					echo "<small style='color: red; font-weight: bold;'>{$error}</small><br>";
				}
			}



		}
		

		
			
	 ?>


	<form action='' method='POST'>
		<label>Username: </label>
		<input type='text' name='username'>

		<label>Password: </label>
		<input type='password' name='password'>

		<input type='submit' name='login' value='Log in'>
	</form>

</body>
</html>
