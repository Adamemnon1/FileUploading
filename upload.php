<?php
session_start();
 
// Get the filename and make sure it is valid
$filename = basename($_FILES['uploadedfile']['name']);
echo $filename;
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}
 
// Get the username and make sure it is valid
$username = trim($_SESSION['userin']);
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}
 
$full_path = sprintf("./%s/%s", $username, $filename);
 
if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	header("Location: loggedtest.php");
	
	//success
	exit;
}else{
	//could set a variable to indicate failure
	header("Location: fileSharing.html");
	
	exit;
}

?>
