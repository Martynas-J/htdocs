<?php
if (isset($_SESSION['login_user'])) { 
include_once("junk_db.php");
	$sql = "INSERT INTO resursai (Medislvl) VALUES('$manoresursai[2]')";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
}}else echo 'sukcius';
?>