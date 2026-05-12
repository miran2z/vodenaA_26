<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>vstava predmetov</title>
    </head>
<body>
 <div id="content">
    <h2>Vnos predmetov</h2>
        <form action="predm_vbazo.php" method="get">
	 <p>Naziv <input type="text" name="naziv" required></p>
	 <p>Tip <input type="text" name="tip" required></p>
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
