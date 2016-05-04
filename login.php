<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Prijava
</h1>

<p>
<form action="login_check.php" method="post">
    Korisnicko ime:<br>
    <input type="text" name="username"><br>
    Lozinka:<br>
    <input type="text" name="password"><br>
    <input type="submit" value="Prijava">
</form>
</p>

</body>
</html>