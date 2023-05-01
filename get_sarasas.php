<?php
include_once("junk_db.php");
session_start();
	
$artinka=$_SESSION['login_user'];
$manoresursai = array();
$sql = "SELECT * FROM resursai where Vardas='$artinka' ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
while($irasas = mysqli_fetch_assoc($result)) 
{
$manoresursai[1] = $irasas['Vardas'];
$manoresursai[2] = $irasas['Medislvl'];
$manoresursai[3] = $irasas['Molislvl'] ;
$manoresursai[4] = $irasas['Gelezislvl'];
$manoresursai[5] = $irasas['Kiekmed'];
$manoresursai[6] = $irasas['Kiekmol'];
$manoresursai[7] = $irasas['Kiekgel'];
$manoresursai[8] = $irasas['Laikas'];


echo "Resursai: |".$manoresursai[5]; ?> <img src="med.png" style="width: 2%;"> <?php 
echo " Medis |". $manoresursai[6] ; ?> <img src="mol2.png" style="width: 2%;"> <?php 
echo " Molis |".$manoresursai[7] ; ?> <img src="gel2.png" style="width: 2%;"> <?php 
echo" Gelezis |";

 $_SESSION['duomenys'] = $manoresursai;

} include_once("test.php");
} else {
  echo "Rezultatų nėra";
}

?>