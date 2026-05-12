<?php
require_once 'povezava.php';

if(isset($_GET['send']))
{
    $naziv=$_GET['naziv'];
    $tip=$_GET['tip'];
    //echo $naziv." ".$tip;
    
    $sql="INSERT INTO predmeti(id_p, naziv, tip) "
            . "VALUES ('NULL','$naziv','$tip')";
    
    if(mysqli_query($link, $sql))
    {
        //header("Location:izpis_predmetov.php");
        header("Refresh:2; url=izpis_predmetov.php");
        echo 'Na izpis boste preusmerjeni čez 2 sekundi...';
    }
    else {
        echo 'Nekaj je šlo narobe';    
    }
}

