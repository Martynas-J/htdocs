<?php
if (isset($_SESSION['login_user'])) {
include_once("junk_db.php");
$sql = "DELETE FROM lentele1 WHERE Vardas='$_GET[trinti]'";
$result = mysqli_query($conn, $sql);
echo "irasas istrintas <br><br>";
// Patikrinama, ar prisijungimas pavyko
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
header("Location: bazeopen.php?action=duomenys");
} else echo 'sukcius';
?> 
