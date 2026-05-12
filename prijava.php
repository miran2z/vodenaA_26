<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>vstava predmetov</title>
    </head>
<body>
 <div id="content">
    <h2>Prijava</h2>
    <form action="prijava_preveri.php" method="post">
	 <p>Email: <input type="email" name="mail" required></p>
	 <p>Geslo: <input type="password" name="pass" required></p>
	 <p style="padding-left:7%;">
	   <input type="reset" value="Ponastavi" >
	   <input type="submit" name="send" value="Prijava" >
	 </p>
	</form>
    <p>
        <a href="index.php">Home</a>
    </p>
 </div>
</body>
</html>
