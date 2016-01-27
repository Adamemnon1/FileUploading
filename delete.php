<?php
	session_start();
	$ses = trim($_SESSION['userin']);
	echo $ses;
	$fil = trim($_GET['filename']);
	unlink("$ses/$fil");
	header("Location: loggedtest.php");
	exit;
?>
