<!DOCTYPE html>
<html>

<head>
	<title> Files </title>
</head>

<body>
	
	<!-- Style -->
	<style scoped type = "text/css">
		form {text-align : center;}
		
	</style>
	
	

	
<?php 
		session_start();
		
		
		#Check if username is ready to be changed.
		if (!isset($_SESSION['userin'])) {
			$_SESSION['userin'] = $_POST['user'];
		}
		
		if (!is_string(trim($_SESSION['userin']))) {
			header("Location: fileSharing.html");
		}
		
		echo "User is:  ". $_SESSION['userin'];
		$found = 0;
		$users = file('/mod2/users.txt'); 
		$files = array();
		
		$dirPath = "/mod2/";
		foreach ($users as $value) {
			
			if ($_SESSION['userin'] == trim($value)) {
				#echo $value;
				$found = 1;
				#show the relevant files in that person's directory and then break.
				$dirHandle = scandir($dir . trim($_SESSION['userin'])   );
				foreach($dirHandle as $entry) {
					$files[] = $entry;
						
				}
				
			
			}
			
			}
		#if not a valid username, refreshes the page.	
		if ($found == 0) {
			session_unset();
			header("Location: fileSharing.html");
			
		}
	
?>
	<br>
	<br>
<?php
	echo "<label>Files: </label>";
	#view files of the user.
	for ($i = 2; $i <count($files); $i++ ) {
		$ses = trim($_SESSION['userin']);
		$fil = trim($files[$i]);
			
		echo "<br> <label> <a href = '$ses/$fil'> $files[$i] </a> </label> ";
				
	}
?>
<br>
<br>
<br>
<br>

<!-- Delete inputted file -->	
<form name = "input" action = "delete.php" method = "GET" > 
	<label> Delete given file (must type in name of file): 
		<input type = "text" name = "filename"  >
	</label>
	<input type = "submit" value = "Delete" >
</form>

<br>
<br>

<!-- Upload given file -->	
<form enctype="multipart/form-data" action="upload.php" method="POST">
	<p>
		<input type="hidden" name="MAX_FILE_SIZE" value="20000000" >
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" >
		
	</p>
	
	<p>
		<input type="submit" value="Upload File" >
	</p>
</form>

<br>
<br>

<!-- Add a user, attemped this -->	
<form action = "addUser.php" method = "POST">
	<label>
		Add User:
		<input type = "text" name = "addedUser" >
		
	</label>
	<input type = "submit" value = "Submit" >
</form>

<br>
<br>
	
<!-- Logout the current user -->
<form name = "input" action = "logout.php" method = "GET" >
	<label> 
		<input type = "submit" value = "Logout Current User" >
	</label>
</form>
	
</body>


</html>
