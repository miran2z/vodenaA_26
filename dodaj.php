<?php
require_once 'glava.php';

  $sql="SELECT * FROM predmeti;";
  $result=mysqli_query($link, $sql);/*sprožimo poizvedbo*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dodajanje predmetov</title>
<link href="stil.css" rel="stylesheet">
</head>
<body>
 <h2>Dodajanje predmetov</h2>
  <form action="last_vbazo.php" method="get">
    <p>Naziv: 
    <select name="idp">
     <?php
     while($row= mysqli_fetch_array($result))/*zajem zapisa iz tabele*/
     {
       echo '<option value="'.$row['id_p'].'">';
        echo $row['naziv']." ".$row['tip'];
       echo "</option>";
     }
    ?>
    </select>
    </p>
    <p>Količina: <input type="text" name="kol" required></p>
    <p style="padding-left:20%;">
       <input type="reset" value="Reset" >
        <input type="submit" name="send" value="Send" >
    </p>
  </form>
    <p>
    <!-- 
    <table>
        <tr><th>Št.</th><th>Naziv</th><th>Tip</th></tr> -->
    <p>
        <a href="index.php">Home</a>
    </p>    
</div>
</body>
</html>