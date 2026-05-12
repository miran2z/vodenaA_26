<?php
require_once 'glava.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Izpis predmetov</title>
<link href="stil.css" rel="stylesheet">
</head>
<body>
    <h2>Izpis mojih predmetov</h2>
    <!-- 
    <table>
        <tr><th>Št.</th><th>Naziv</th><th>Tip</th></tr> -->
 <?php
  $sql="SELECT lp.id_lp, p.naziv, p.tip, lp.kolicina AS koliko "
          . " FROM `las_predm` lp "
          . "INNER JOIN lastniki l ON lp.id_l=l.id_l "
          . "INNER JOIN predmeti p ON lp.id_p=p.id_p "
          . "WHERE lp.id_l=$idu;";
  $result=mysqli_query($link, $sql);/*sprožimo poizvedbo*/
  echo '<table><tr><th>Št.</th><th>Naziv</th><th>Tip</th><th>Koliko</th></tr>';
  $stevc=1;
   while($row= mysqli_fetch_array($result))/*zajem zapisa iz tabele*/
    {
     echo "<tr>"
        . "<td>".$stevc."</td>"
        . "<td>".$row['naziv']."</td>"
        . "<td>".$row['tip']."</td>"
        . "<td>".$row['koliko']."</td>"    ;
      echo '<td>';
        echo '<a href="brisi_moj.php?idlp='.$row['id_lp'].'">Briši</a>';
      echo '</td>';
      echo '<td>';
        echo '<a href="posodobi_moj.php?idlp='.$row['id_lp'].'">Posodobi</a>';
      echo '</td>';
     echo "</tr>";
     $stevc++;
    }
 ?>
  </table>
  <p>
    <a href="dodaj.php">Želim nov predmet</a>
  </p>    
  <p>
    <a href="index.php">Home</a>
  </p>    
</div>
</body>
</html>