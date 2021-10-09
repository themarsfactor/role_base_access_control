<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>

<body>
	<?php 
	require "forms/process_forms.php";

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			if(isset($_POST['login'])){



				$errors = array(); //Errors will be stored here

				if(empty($name)){
					$errors[] = "<div style='background: black; color: white; padding: 10px;'>You did not enter name</div>";
				}

				if(empty($email)){
					$errors[] = "You did not enter your email";
				}

				if(empty($pass)){
					$errors[] = "You did not enter your password";
				}


				if(!empty($errors)){
					//there are errors...
					foreach($errors as $error){

						echo "{$error}<br>";
					}


				}else{
					//there are no errors ..
					echo "Submit the form";
					


				}



			}

		}


	?>


	<form action='' method="POST">

		<label>Email: </label>
		<input type='email' name='email'><br>

		<label>Password: </label>
		<input type='password' name='password'><br>

		<input type='submit' name='login' value='Log in'>

	</form>

</body>
</html>