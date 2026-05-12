<?php
require_once 'povezava.php';
//echo $_GET['idp'];

if(isset($_GET['idlp']))
{  
    $idlp=$_GET['idlp'];
    $sql="DELETE FROM las_predm WHERE id_lp=$idlp";
    
    if(mysqli_query($link, $sql))
    {
        //header("Location:izpis_predmetov.php");
        header("Refresh:2; url=izpis_mojih.php");
        echo 'Izbris je bil uspešen.'
        . 'Na izpis boste preusmerjeni čez 2 sekundi...';
    }
    else {
        echo 'Nekaj je šlo narobe';
        header("Location:izpis_predmetov.php");
    }
}