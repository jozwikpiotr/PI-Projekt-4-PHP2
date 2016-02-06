<?php
if (isset($_GET['async'])) {
	if ($_GET['async'] == 'true')
		echo "Asynchroniczma odpowiedĹş na GET";
	if ($_GET['async'] == 'false')
		echo "Synchroniczna odpowiedĹş na GET";
}
if (isset($_POST['async'])) {
	if ($_POST['async'] == 'true')
		echo "Asynchroniczma odpowiedĹş na POST";
	if ($_POST['async'] == 'false')
		echo "Synchroniczna odpowiedĹş na POST";
}
?>
