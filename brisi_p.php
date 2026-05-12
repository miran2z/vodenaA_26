<?php
require_once 'povezava.php';
//echo $_GET['idp'];

if(isset($_GET['idp']))
{  
    $id=$_GET['idp'];
    $sql="DELETE FROM predmeti WHERE id_p=$id";
    
    if(mysqli_query($link, $sql))
    {
        //header("Location:izpis_predmetov.php");
        header("Refresh:2; url=izpis_predmetov.php");
        echo 'Izbris je bil uspešen.'
        . 'Na izpis boste preusmerjeni čez 2 sekundi...';
    }
    else {
        echo 'Nekaj je šlo narobe';
        header("Location:izpis_predmetov.php");
    }
}