function deleteAccount(id){


	//ask the user if they are sure 
	let check_answer = confirm("Are you sure you want to delete your account? ");

	if(check_answer == true){

		//delete the user..
		location.href = "__delete_user_account.php?id="+id;

			
	}else{

		//location.href = 'update_name.php';
	}

}