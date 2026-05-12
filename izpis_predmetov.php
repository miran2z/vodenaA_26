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
    <h2>Izpis predmetov</h2>
    <!-- 
    <table>
        <tr><th>Št.</th><th>Naziv</th><th>Tip</th></tr> -->
 <?php
  $sql="SELECT * FROM predmeti;";
  $result=mysqli_query($link, $sql);/*sprožimo poizvedbo*/
  echo '<table><tr><th>Št.</th><th>Naziv</th><th>Tip</th></tr>';
  $stevc=1;
   while($row= mysqli_fetch_array($result))/*zajem zapisa iz tabele*/
    {
     echo "<tr>"
        . "<td>".$stevc."</td>"
        . "<td>".$row['naziv']."</td>"
        . "<td>".$row['tip']."</td>";
      echo '<td>';
        echo '<a href="brisi_p.php?idp='.$row['id_p'].'">Briši</a>';
      echo '</td>';
      echo '<td>';
        echo '<a href="posodobi_p.php?idp='.$row['id_p'].'">Posodobi</a>';
      echo '</td>';
     echo "</tr>";
     $stevc++;
    }
 ?>
    </table>
    
    <p>
        <a href="index.php">Home</a>
    </p>    
</div>
</body>
</html>