<?php

include_once("junk_db.php");
    include_once("res.php");
	$artinka=$_SESSION['login_user'];
$_SESSION['duomenys'][8];
$current_time = date('Y-m-d H:i:s');
$timestamp = strtotime($current_time);
if ($_SESSION['duomenys'][8]>0){$kieks= $timestamp - $_SESSION['duomenys'][8];}else $kieks=0;
$sql = "UPDATE resursai SET Medislvl=?, Molislvl=?, Gelezislvl=?, Kiekmed=?, Kiekmol=?, Kiekgel=?, Laikas=? WHERE Vardas=?";
$stmt = $conn->prepare($sql);
$vardas = $artinka;
$medislvl = $_SESSION['duomenys'][2];
$molislvl = $_SESSION['duomenys'][3];
$gelezislvl = $_SESSION['duomenys'][4];
$kiekmed = $_SESSION['duomenys'][5]+ ($dmed[$_SESSION['duomenys'][2]] * $kieks );
$kiekmol = $_SESSION['duomenys'][6]+ ($dmed[$_SESSION['duomenys'][3]] * $kieks );
$kiekgel = $_SESSION['duomenys'][7]+ ($dmed[$_SESSION['duomenys'][4]] * $kieks );
$reitingas = $_SESSION['duomenys'][2]+$_SESSION['duomenys'][3]+$_SESSION['duomenys'][4];
$laikas = $timestamp;
$stmt->bind_param("iiiiiiis", $medislvl,$molislvl,$gelezislvl,$kiekmed,$kiekmol,$kiekgel,$laikas, $vardas);
$stmt->execute();
$stmt->close();

$sql2 = "UPDATE zduomenys SET Reitingas=? WHERE Vardas=?";
$stmt2 = $conn->prepare($sql2);
$reitingas = $_SESSION['duomenys'][2]+$_SESSION['duomenys'][3]+$_SESSION['duomenys'][4];
$stmt2->bind_param("is", $reitingas, $vardas);
$stmt2->execute();
$stmt2->close();

?>
