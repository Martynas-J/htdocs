<?php
// Pasiekiame nusiųstą objektą
$data = json_decode(file_get_contents("php://input"));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duomenubaze1";

// Sukuriamas ryšys su MySQL serveriu
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Išskiriame duomenis iš objekto
$melinas = mysqli_real_escape_string($conn, $data->melinas);

// Įterpiame duomenis į duomenų bazę
$sql = "UPDATE kaslaimi SET (Melina) VALUES ('$melinas')";
$result = mysqli_query($conn, $sql);
$conn->close();