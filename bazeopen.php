<html>
<head>
<?php
session_start();
if (isset($_SESSION['login_user'])) {
$action		= @$_GET["action"];
	Switch($action)
	{
  case "skaiciuotuvas":
	?>
	<div id="centras">
		<div id="pagrindinis">
			<div id="ivadas"> <h2>SKAIČIUOTUVAS<h2></div>
	<form method="post">		
	sk1
	<input type='text' value="0" name='sk1'/> <br>
	sk2
	<input type='text' value="0" name="sk2"> <br>
	<br>
	<input type="submit" name="sudek" value="+" /> 
	<input type="submit" name="atimk" value="-" />
	<input type="submit" name="daugink" value="X" /> 
	<input type="submit" name="dalink" value="/" /> 
		
	<?php 
$suma =null;	
if (isset($_POST['sudek'])){$suma=$_POST['sk1']+$_POST['sk2'];
}else if (isset($_POST['atimk'])){$suma=$_POST['sk1']-$_POST['sk2'];
}else if (isset($_POST['daugink'])){$suma=$_POST['sk1']*$_POST['sk2'];
}else if (isset($_POST['dalink'])){$suma=$_POST['sk1']/$_POST['sk2'];}
echo "ATS: " . $suma;
?>
	</form>
		</div>
	</div>
	<?php
  break;
  case "pradinis":
  ?>
  <div id="centras">
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Naujienos<h2> <br></div>

  <p>Cia rasomos visos naujienos Cia rasomos visos naujienos Cia rasomos visos naujienos</p>
  <p>Cia rasomos visos naujienos Cia rasomos visos naujienos Cia rasomos visos naujienos</p>
  <p>Cia rasomos visos naujienos Cia rasomos visos naujienos Cia rasomos visos naujienos</p></div></div>
  <?php
  break;
  case "meniu2":
  ?>
  <div id="centras">
  <div id="meniu">
        <li>meniu </li>
		<li>meniu </li>
		<li>meniu </li>
		<li><a href="atsijungti.php">Log Out</a></li> 
  </div></div>
  <?php
  break;
  case "duomenys":
  ?>
  <div id="centras"> 
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Duomenys<h2></div>
<?php
include_once("duomenys.php");
  break;
    case "zaidimas":
?>
  <div id="centras">
  <div id="pagrindinis">
  <div id="ivadas"> <h2>Žaidimo pavadinimas<h2> <br></div>
  <p>Pradėti žaidimą</p>
  <form action="" method="POST"><br>
<input id="b1" name ="T" type='submit' id="t" value='Taip'>
</form>
<form action="" method="POST">
<input id="b2" name ="N" type='submit' value='Ne'> <br>
</form> 
  </div></div>
   <?php
 break;
   }
?>
 <link rel="stylesheet" type="text/css" href="stiliai.css" /> 
<title></title>
<body style="background-color:white;">
  	<div id="antraste"><h2>ARMASRO<h2></div>
  	<div id="meniu"> 
		<li>meniu </li>
		<li><a href="zaidimas3.php">Mokykla</a></li> 
		<li><a href="zaidimas2.php">Žaidimas2</a></li> 
		<li><a href="atsijungti.php">Registruotis</a></li> 
		<li><a href="atsijungti.php">Atsijungti</a></li> 
	</div>
  	<div id="kaire"> 
  		<li><a href="bazeopen.php?action=pradinis">Pradinis</a></li>
		<li><a href="bazeopen.php?action=duomenys">Duomenys</a></li>
		<li><a href="bazeopen.php?action=skaiciuotuvas">Skaičiuok</a></li>
		<li><a href="bazeopen.php?action=zaidimas">Žaidimas</a></li><br>
    </div>
    <div id="desine">Sveiki <?php echo $_SESSION['login_user'].'<br>'; 
	include_once("laikas.php");
	 ?> </div>

<br>
  </div>
  <div id="apacia">Visos teises saugomos 2016-2023 m
  </div>
</div>
</body>
</head>

<?php
  if (isset($_POST['N'])) {header("Location: bazeopen.php");
  }else if (isset($_POST['T'])) {header("Location: zaidimas.php?action=Zp");}
if(isset($_GET['trinti']))
{
include_once("trinti.php");
}
}else echo 'Vartotojas nerastas';
?>


</html>
