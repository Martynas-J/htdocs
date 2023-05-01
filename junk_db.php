<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duomenubaze1";

// Sukuriamas ryšys su MySQL serveriu
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Patikrinama, ar prisijungimas pavyko
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>