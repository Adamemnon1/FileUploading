<!DOCTYPE HTML>
<html>
<head>
	<title> Logged </title>
</head>
<body>

<?php

session_start();
echo "Luck";
$Luck = "luckily";
print($Luck);
$_SESSION['userLogged'] = $_POST['user'];
	echo $_SESSION['userLogged'];
	
	$dirHandle = "";
	$files = "";
	$count = 1;
	$found = 0;
	$users = file('users.txt');
	$dir = "~/public_html/summer2015-module2-adam-sandor-425989/groupProject/";
	foreach ($users as $key => $value) {
		if (strcmp($_SESSION['userLogged'], $key) == 0 ) {
			#successful login
			$found = 1;
			$dirHandle = opendir($dir);
			$files = scandir($dirHandle);
			print_r($files);
		}
		
	}
	if ($found == 0){ #not found on list
			mkdir( $dir, 0700);
			$dirHandle = opendir($dir);
			$files = scandir($dirHandle);
			print_r($files);
			echo "No files present";
	}
	
	
?>
<form name = "input" action ="http://home/AdamPrime/filename"
		method = "GET" >
		<label> Enter filename:  </label>
			Read file
			<input type = "text" name = "filename" >
		<input type = "submit" value = "SubmitRead">
</form>
<form name = "input" action = "<?php unlink("http://home/AdamPrime/" 
	. $_SESSION['userLogged'] . "fileDel")   ?>" method = "" >
	<label> Enter filename you wish to delete </label>
	#unlink method, and refresh the page?????.
		<input type = "text" name = "fileDel" >
		<input type = "submit" value = "SubmitDel" > 
</form>


</body>

</html>
