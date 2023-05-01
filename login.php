<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['jungiu'])) {
if (empty($_POST['v1']) || empty($_POST['p1']) ) {
$error = "kaikurie tusti";
}
else
{
// Define $username1 and $password1
$username1=$_POST['v1'];
$password1=$_POST['p1'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once("junk_db.php");
// To protect MySQL injection for Security purpose

// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * FROM lentele1 where Vardas='$username1' AND Pavarde='$password1'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
$_SESSION['login_user']=$username1; // Initializing Session
header("location: bazeopen.php"); // Redirecting To Other Page
} else {
$error = "blogi duomenys";
}
mysqli_close($conn); // Closing Connection
}
}
?>