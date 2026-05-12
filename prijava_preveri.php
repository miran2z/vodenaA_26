<?php
require_once 'povezava.php';
require_once 'seja.php';
if(isset($_POST['send']))
{
    //$em=$_POST['mail'];
    /*filtriramo vhodni podatek*/
    $em=filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
    $pas=$_POST['pass'];
    //kriptiramo vnos
    $pask= sha1($pas);
    //echo ' '.$em." ".$pas;
  $sql="SELECT * FROM lastniki WHERE mail='$em' AND geslo='$pask';";
  $result=mysqli_query($link, $sql);/*sprožimo poizvedbo*/
  if(mysqli_num_rows($result)===1)
  {
      $row= mysqli_fetch_array($result);
      //echo 'Ime: '.$row['ime'].", priimek pa: ".$row['priimek'];
      $_SESSION['imeu']=$row['ime'];
      $_SESSION['prii']=$row['priimek'];
      $_SESSION['idu']=$row['id_l'];
      header("Location:index.php");
  }
  else{
      echo 'Ta uporabnik ne obstaja';
      header("Location:index.php");
  }
}
 ?>