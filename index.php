<?php
require_once 'povezava.php';
require_once 'seja.php';
$prijava=false;
if(isset($_SESSION['idu'])){
    $prijava=true;
} else {
    $prijava=false;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vodena vaja A</title>
<link href="stil.css" rel="stylesheet">
</head>
<body>
    <p id="prijava">
        <?php
        if(!$prijava)
        {
            echo '<a href="prijava.php">Prijavite se: </a>';
        }
        else{
            echo 'Ime: '.$_SESSION['imeu'].", priimek pa: ".$_SESSION['prii'];
            echo '<a href="odjava.php"> ODJAVA</a>';
        }
      ?>
    </p>
<div id="content">
 <h1>Vodena vaja A</h1>
  <div>
    <?php
     if(isset($_SESSION['idu'])){
       echo '<a href="izpis_mojih.php">Izpis mojih predmetov</a><br>';
     } else {
       echo '<a href="izpis_predmetov.php">Izpis vseh predmetov</a><br>';
     }
    ?>
    <a href="vstavi_predmet.php">Vnos predmetov</a><br>
    <a href="geo.php">Naloga 3</a><br>
    <a href="teden.php">Naloga 4</a><br>
    <a href="index.php">Home</a>
 </div>
</div>
</body>
</html>