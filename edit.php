<?php require ('check.php')?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Automobili
</h1>

<?php
$sql = "SELECT * FROM automobili WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$auto = $result->fetch_assoc();
?>
<p>

<form action="update.php" method="post">
    Registracija:<br>
    <input type="text" name="registracija" value="<?php echo($auto['registracija']); ?>"><br>
    Ime:<br>
    <input type="text" name="ime" value="<?php echo($auto['ime']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($auto['id']); ?>">
    <input type="submit" value="Izmijeni automobil">
</form>
</p>

<p>
    <a href="unos.php">Unos novog automobila</a>
</p>
</body>
</html>