<?php
if (isset($_SESSION['login_user'])) {
include_once("junk_db.php");
$sql = "SELECT * FROM lentele1";
$result = mysqli_query($conn, $sql);
while($irasas = mysqli_fetch_assoc($result)) 
{
echo $irasas['Vardas'] . " " . $irasas['Pavarde'] . " " . $irasas['Metai'] . " " . $irasas['Lytis'] . " <a href='?trinti=$irasas[Vardas]'>TRINTI</a>". " <br>";
}
mysqli_close($conn);
}else echo 'nesukciauk';
?>
  </div></div>