<?php
/* 
povezava na strežnik
 */
$host="localhost";
$user="root";
$password="";
$database="vodena_a26";
$link= mysqli_connect($host, $user, $password, $database)
        or die("Ne morem do baze.");
/*za prikaz šumnikov*/
mysqli_set_charset($link, "utf8");

/*
if($link==TRUE)
{
    echo 'Povezava uspešna.';
}
 else {
    echo 'Ne morem do baze.';
}
 */
?>
