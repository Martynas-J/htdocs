<?php
if(isset($_GET['trinti']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duomenubaze1";

// Sukuriamas ryšys su MySQL serveriu
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "DELETE FROM lentele1 WHERE Vardas='$_GET[trinti]'";
$result = mysqli_query($conn, $sql);
echo "irasas istrintas <br><br>";
// Patikrinama, ar prisijungimas pavyko
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
}
?>
