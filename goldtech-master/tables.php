<?php 
require "database/db.php";


//Create the users table 
$create_table = "CREATE TABLE IF NOT EXISTS `users`(
	
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	firstname VARCHAR(64) NOT NULL

)";

$create_table_result = mysqli_query($conn, $create_table);

if($create_table_result){
	echo "Done";
}


//	Create Post Tables 

$create_posts = "CREATE TABLE IF NOT EXISTS `posts`(
	
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	author_id INT NOT NULL,
	title VARCHAR(64),
	date_created TIMESTAMP,
	FOREIGN KEY (author_id) REFERENCES `users`(id) ON DELETE CASCADE ON UPDATE CASCADE
)";


$create_post_result = mysqli_query($conn, $create_posts);
if($create_post_result){
	echo "Created posts table";
}else{
	echo "Error: ".mysqli_error($conn);
}