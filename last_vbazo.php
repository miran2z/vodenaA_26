<?php
require_once 'povezava.php';
require_once 'seja.php';

if(isset($_GET['send']))
{
    $kol=$_GET['kol'];
    $idu=$_SESSION['idu'];
    $idp=$_GET['idp'];
    //echo $naziv." ".$tip;
    $sql="INSERT INTO las_predm(id_lp, kolicina, id_l, id_p) "
            . "VALUES ('NULL','$kol','$idu','$idp')";
    
    if(mysqli_query($link, $sql))
    {
        //header("Location:izpis_mojih.php");
        header("Refresh:2; url=izpis_mojih.php");
        echo 'Na izpis boste preusmerjeni čez 2 sekundi...';
    }
    else {
        echo 'Nekaj je šlo narobe';    
    }
}

