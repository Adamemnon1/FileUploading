<?php
$_SESSION['filenameIn'] = $_POST['filename'];
echo $_SESSION['filenameIn'];
$file = fopen($_SESSION['filenameIn']);
$lines = fread($file, filesize($_SESSION['filenameIn']));
fclose($file);
echo $lines;
?>
