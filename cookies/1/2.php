<html>
<head>
    <title>Prova II</title>
    <style>body {color: <?php echo $_COOKIE["user"]; ?>;}</style>
</head>
<body>
<form>
<?php echo "Se ha elegido el color " . $_COOKIE["user"].".<br><br>";?>
<a href="1.php">Volver a la selección de color</a>
</form>
</body>
</html>
