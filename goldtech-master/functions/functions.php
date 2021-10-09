<?php 

function login_user($email, $password){
		
		require "database/db.php";


		//Escape the strings in the email...
		//This also helps in preventing data insecurity and database hacking
		$email = mysqli_real_escape_string($__conn, trim($email));
		$password = mysqli_real_escape_string($__conn, trim($password));


		//the select 
		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
		$result = mysqli_query($__conn, $query);

		if($result){
			//the query ran..
			
			//check if there was a match ..
			if(mysqli_num_rows($result) == 1){
				
				session_start();
				//logging in 
				$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

				//echo "<pre>";
				//print_r($_SESSION);

				//die();

				//redirect the user to the user page
				header("location: user.php");
			}else{

				echo "Sorry, invalid email/password combination. Have you registered?";
			}
		}else{

			//the query did not run 
			echo "We could not get the user info: ".mysqli_error($__conn);
		}




}

function save_profile_photo($storage){
	require "database/db.php";

	$user_id = $_SESSION['id'];

	$query = "UPDATE users SET profile_photo_path = '$storage' WHERE id=$user_id LIMIT 1";

	$result = mysqli_query($__conn, $query);
	if($result){
		$_SESSION['profile_photo_path'] = $storage;
		echo "Uploaded successfully!";
	}else{
		echo "There was an error: ".mysqli_error($__conn);
	}
}


function update_user_name($user_id, $new_name){

	require "database/db.php";

	$user_id = (int)$user_id;
	$new_name = mysqli_real_escape_string($__conn, trim($new_name));

	$update_query = "UPDATE users SET name = '$new_name' WHERE id = $user_id LIMIT 1";

	$result = mysqli_query($__conn, $update_query);

	if($result){
		echo "User's name was updated successfully...";

		$_SESSION['name'] = $new_name;
	}else{

		echo "Sorry, we could not change your name at the moment.";
	}

}

function delete_user_account($id){

	require "database/db.php";

	$delete_query = "DELETE FROM users WHERE id=$id";
	$result = mysqli_query($__conn, $delete_query);

	if($result){
		//you have deleted the user
		header("location: logout.php");
	}else{
		//there is a problem..
		echo "We could not run your query";
	}


}