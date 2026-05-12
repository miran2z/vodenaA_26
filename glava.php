<?php
require_once 'povezava.php';
require_once 'seja.php';
$prijava=false;
if(isset($_SESSION['idu'])){
    $prijava=true;
    $idu=$_SESSION['idu'];//prijavljen uporabnik
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
