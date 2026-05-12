<?php
require_once 'povezava.php';
if(isset($_GET['idlp']))
{  
    $id=$_GET['idlp'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>posodobi_moje</title>
    </head>
<body>
 <div id="content">
   <h2>Posodobitev količine predmetov</h2>
    <form action="moje_update.php" method="get">
     <p>Količina <input type="text" name="kol" required></p>
     <p><input type="hidden" name="idlp" value="<?php echo $id; ?>"></p>
	 <p style="padding-left:20%;">
	   <input type="reset" value="Reset" >
	   <input type="submit" name="send" value="Send" >
	 </p>
    </form>
    <p>
        <a href="index.php">Home</a>
    </p>
 </div>
</body>
</html>
