<?php 
require "functions/functions.php";

if(isset($_GET['id'])){

	$id = (int)$_GET['id'];

	delete_user_account($id);
}

