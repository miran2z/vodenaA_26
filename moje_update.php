<?php
require_once 'povezava.php';

if(isset($_GET['send']))
{
    $kol=$_GET['kol'];
    $idlp=$_GET['idlp'];
    //echo $kol." ".$idlp;
    
    $sql="UPDATE las_predm SET kolicina = '$kol'"
            . " WHERE id_lp=$idlp;";
    
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

