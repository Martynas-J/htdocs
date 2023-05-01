<html>
<head>
<link rel="stylesheet" type="text/css" href="stiliai.css" /> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body style="background-color:white;">
<?php
session_start();
if (isset($_SESSION['login_user'])) {
	$action		= @$_GET["action"];
	Switch($action)
	{
 case "Zp":
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Gamyba<h2></div>
  <a href="zaidimas.php?action=Lentpjove"><img src="medis.png"  style="width:62px;height:62px;" alt="Mano nuotrauka">Medis &nbsp;</a>
  <a href="zaidimas.php?action=Moline"><img src="namas.png"  style="width:62px;height:62px;"> Molis<br><br><br></a>
  <a href="zaidimas.php?action=gelezis"><img src="gel.png"  style="width:62px;height:62px;">Gelezis</a>
  </div></div>
  <?php
  break;
  case "Lentpjove": 
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Lentpjuvė<h2></div>
  <label for="l1"> 
  <?php 
  include_once("res.php"); 
  echo $_SESSION['duomenys'][2]; ?> Lygis</label><br>
 <?php echo $rmed[$_SESSION['duomenys'][2]] ?> Reikia molio <br>
 <?php echo $_SESSION['duomenys'][6]  ?> Turi molio <br>
	<form method="post">
	<button style="color:black; background-color:green; cursor:pointer; border-radius: 10px 10px 10px 10px; " type="submit" name="mygtukas"><?php echo $_SESSION['duomenys'][2]+1,' '?>LVL</button>
	<a href="zaidimas.php?action=Zp">Atgal</a>
	<?php
	if (isset($_POST['mygtukas'])) {
	  if ($_SESSION['duomenys'][6]>=$rmed[$_SESSION['duomenys'][2]]){
	$_SESSION['duomenys'][2]+=1;
	$_SESSION['duomenys'][6]-=$rmed[$_SESSION['duomenys'][2]-1];
   include_once("test.php");
  $conn->close();
	header("Location: zaidimas.php?action=Lentpjove");
	  }else echo 'nepakanka resursu turi tik '.$_SESSION['duomenys'][6] ;
}
?>
	</form>
  </div></div>
  <?php
  break;
    case "Moline": 
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Molio kasykla<h2></div>
  <label for="l1"> 
  <?php 
  include_once("res.php"); 
  echo $_SESSION['duomenys'][3]; ?> Lygis</label><br>
 <?php echo $rmed[$_SESSION['duomenys'][3]] ?> Reikia medienos <br>
 <?php echo $_SESSION['duomenys'][5]  ?> Turi medienos <br>
	<form method="post">
	<button style="color:black; background-color:green; cursor:pointer; border-radius: 10px 10px 10px 10px; " type="submit" name="mygtukas"><?php echo $_SESSION['duomenys'][3]+1,' '?>LVL</button>
	<a href="zaidimas.php?action=Zp">Atgal</a>
	<?php
	if (isset($_POST['mygtukas'])) {
	  if ($_SESSION['duomenys'][5]>=$rmed[$_SESSION['duomenys'][3]]){
	$_SESSION['duomenys'][3]+=1;
	$_SESSION['duomenys'][5]-=$rmed[$_SESSION['duomenys'][3]-1];
  include_once("test.php");
  $conn->close();
	header("Location: zaidimas.php?action=Moline");
	  }else echo 'nepakanka resursu turi tik '.$_SESSION['duomenys'][5] ;
}
?>
	</form>
  </div></div>
  <?php
  break;
      case "gelezis": 
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Geležies kasykla<h2></div>
  <label for="l1"> 
  <?php 
  include_once("res.php"); 
  echo $_SESSION['duomenys'][4]; ?> Lygis</label><br>
 <?php echo $rmed[$_SESSION['duomenys'][4]] ?> Reikia medienos<?php echo $rmed[$_SESSION['duomenys'][4]] ?> Reikia molio <br>
 <?php echo $_SESSION['duomenys'][5]  ?> Turi medienos <?php echo $_SESSION['duomenys'][6]  ?> Turi molio <br>
	<form method="post">
	<button style="color:black; background-color:green; cursor:pointer; border-radius: 10px 10px 10px 10px; " type="submit" name="mygtukas"><?php echo $_SESSION['duomenys'][4]+1,' '?>LVL</button>
	<a href="zaidimas.php?action=Zp">Atgal</a>
	<?php
	if (isset($_POST['mygtukas'])) {
	  if ($_SESSION['duomenys'][5]>=$rmed[$_SESSION['duomenys'][4]] && $_SESSION['duomenys'][6]>=$rmed[$_SESSION['duomenys'][4]]){
	$_SESSION['duomenys'][4]+=1;
	$_SESSION['duomenys'][5]-=$rmed[$_SESSION['duomenys'][4]-1];
	$_SESSION['duomenys'][6]-=$rmed[$_SESSION['duomenys'][4]-1];
   include_once("test.php");
   $conn->close();
	header("Location: zaidimas.php?action=gelezis");
	  }else echo 'nepakanka resursu turi tik '.$_SESSION['duomenys'][5] ;
}
?>
	</form>
  </div></div>
  <?php
  break;
    case "Top10": 
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Top 10<h2></div>
  <label for="l1"> 
  <?php 
  include_once("res.php"); 
  echo $_SESSION['duomenys'][2]; ?> Lygis</label><br>
 <?php echo $rmed[$_SESSION['duomenys'][2]] ?> Reikia molio <br>
 <?php echo $_SESSION['duomenys'][6]  ?> Turi molio <br>
	<form method="post">
	<button style="color:black; background-color:green; cursor:pointer; border-radius: 10px 10px 10px 10px; " type="submit" name="mygtukas"><?php echo $_SESSION['duomenys'][2]+1,' '?>LVL</button>
	<a href="zaidimas.php?action=Zp">Atgal</a>
	<?php
	if (isset($_POST['mygtukas'])) {
	  if ($_SESSION['duomenys'][6]>=$rmed[$_SESSION['duomenys'][2]]){
	$_SESSION['duomenys'][2]+=1;
	$_SESSION['duomenys'][6]-=$rmed[$_SESSION['duomenys'][2]-1];
   include_once("test.php");
  $conn->close();
	header("Location: zaidimas.php?action=Lentpjove");
	  }else echo 'nepakanka resursu turi tik '.$_SESSION['duomenys'][6] ;
}
?>
	</form>
  </div></div>
  <?php
  break;
	}
?> 
  	<div id="antraste"><h2>ARMASRO<h2></div>
  	<div id="meniu"> 
		<li>meniu </li>
		<li>meniu </li>
		<li><a href="zaidimas.php?action=Top10">Top 10</a></li> 
		<li><a href="atsijungti.php">Registruotis</a></li> 
		<li><a href="atsijungti.php">Atsijungti</a></li> 
		<style>
  center {
	position:absolute;
    width: 70%;
	left:500px;
    top:50px;
  }
</style>
		<center><?php   include_once("atsinaujina.php");?> </center> 
	</div>
  	<div id="kaire"> 
  		<li><a href="bazeopen.php?action=pradinis">Pradinis</a></li>
		<li><a href="bazeopen.php?action=duomenys">Duomenys</a></li>
		<li><a href="bazeopen.php?action=skaiciuotuvas">Skaičiuok</a></li>
		<li><a href="zaidimas.php?action=Zp">Žaidimas</a></li><br>
    </div>
    <div id="desine">Sveiki <?php echo $_SESSION['login_user']; include_once("laikas.php"); ?> 
	</div>

<br>
  
  <div id="apacia">Visos teises saugomos 2016-2023 m
  </div>

</body>
</head>
<?php

  if (isset($_POST['N'])) {header("Location: bazeopen.php");
  }else if (isset($_POST['T'])) {header("Location: zaidimas.php?action=Zp");}
} else echo 'negudrauk';
?>
</html>