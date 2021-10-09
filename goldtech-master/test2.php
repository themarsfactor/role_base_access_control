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

			$errors = [];


			
			if(empty($username)){
				//echo "Please enter your username";
				

			}

			elseif(empty($password)){
				//echo "Enter your password";
			}

			else{
				//redirect to user page
				header('location: user.php');
			}



		}else{
			echo "Form has not been submitted";
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
