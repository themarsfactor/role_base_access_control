<?php 
session_start();
//check the url 
$request_uri = $_SERVER['REQUEST_URI'];

$path = basename($request_uri);
if(!isset($_SESSION['email'])){
	if($path == 'login.php'){
		header("location: login.php");
		exit();
	}else{
		header("location: logout.php");
		exit();
	}

}else{
	
	if($path == 'login.php'){
		header("location: user.php");
	}

	$id = $_SESSION['id'];
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	
}


