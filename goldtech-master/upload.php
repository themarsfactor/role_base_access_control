<?php 
session_start();
if(isset($_SESSION['email'])){

}else{
	header("location: logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>

	<strong><a href='logout.php'>Log out</a></strong>

	<div>
		<?php require "forms/process_forms.php"; ?>
		<form action="" method='POST' enctype="multipart/form-data">

			<div>
				<label>Upload Photo</label>
				<input type='file' name='photo'>
			</div>

			<div>
				<button type='submit' name='upload'>Upload</button>
			</div>
			
		</form>
	</div>

</body>
</html>