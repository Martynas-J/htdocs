<html>
<head>
<title>prisijunkti</title>
</head>
<body>

<form action="" method="POST"><br>
<input id="b1" name ="pr" type='submit' id="pr" value='Prisijungti'>
</form>
<form action="" method="POST">
<input id="b2" name ="reg" type='submit' value='Registruotis'> <br>
</form>
<?php
if (isset($_POST['jungiu'])) { 
include_once("login.php");
?>
<br>
<span><?php  echo $error; ?></span>
<?php
}
if (isset($_POST['registruoja'])) { 
$username1=$_POST['v1'];
$password1=$_POST['p1'];
$age=$_POST['m1'];
$sex=$_POST['lytis1'];
if($username1 && $password1 && $age && $sex)
{
include_once("junk_db.php");
$username1 = stripslashes($username1);
$password1 = stripslashes($password1);
$age = stripslashes($age);
$sex = stripslashes($sex);
// paimam is duomenu bazes

$sql = "SELECT * FROM lentele1 where Vardas='$username1'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "Toks vartotojas jau yra ";
mysqli_close($conn);
} else {
	$sql = "INSERT INTO lentele1 (Vardas, Pavarde, Metai, Lytis) VALUES('$username1','$password1','$age','$sex')";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
//	define("MY_CONSTANT", $username1);
//	echo MY_CONSTANT;
//header("Location: bazeopen.php");
echo 'užregistruota dabar prisijunkite';
} }else {
echo "Neuzpildei langeliu ";
}
}
if (isset($_POST['reg'])) { 

?>
<script>
document.getElementById('b2').style.visibility="hidden";
</script>
<form action="" method="POST"><br>
<label>Vardas :</label>
<input type='text' name='v1' id='v1' placeholder="rasyk varda"/> <br>
<label>Pavarde :</label>
<input type='text' name="p1" placeholder="rasyk pavarde"><br>
<label>Metai :</label>
<input name="m1" type="date" value="" placeholder="rasyk metus"><br>
<label>Vyras:</label>
<input type="radio" name="lytis1" id="Vyras" value="Vyras" checked>
<label>Moteris:</label>
<input type="radio" name="lytis1" id="Moteris" value="Moteris" >
<br>
<input name ="registruoja" type='submit' data-inline="true" value='saugoti'> 
<br>
</form>
<?php 
 } 
if (isset($_POST['pr'])) { 
include_once('login.php');
?>
<script>
document.getElementById('b1').style.visibility="hidden";
</script>
 <form action="" method="POST"><br>
<label>Vardas :</label>
<input type='text' name='v1' id='v1' placeholder="rasyk varda"/> <br>
<label>Pavarde :</label>
<input type='text' name="p1" placeholder="rasyk pavarde"><br>
<br>
<input name ="jungiu" type='submit' value='prisijungiu'> 
</form>
<br>
<span><?php  echo $error; ?></span>

<?php  } ?>
</body>
</html>
