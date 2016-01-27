

<?php
session_start();
$added = trim($_POST['addedUser']);
if (!is_string($added)) {
	header("Location: loggedtest.php");
	exit;
}

$fn = "/mod2/users.txt";
$file = fopen($fn, "a+");
$size = filesize($fn);

if ($_POST['addedUser']) {
	#echo $_POST['addedUser'];
	
	fwrite($file, $added . "\n");
	
}
$text = fread($file, $size);
fclose($file);

#then mkdir the username
mkdir("/home/AdamPrime/public_html/$added");


header("Location: loggedtest.php");
exit;
?>
