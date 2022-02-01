<?php
session_start();
$cookie_name = "user";
$cookie_value = $_GET['color'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Se ha elegido el color " . $_COOKIE[$cookie_name].".<br><br>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
  Cambio de color:
  <input type="radio" name="color" value="red">Rojo</input>
  <input type="radio" name="color" value="blue">Azul</input>
  <input type="radio" name="color" value="green">Verde</input>
  <input type="radio" name="color" value="none">Ninguno</input>
  <input type="submit" value="GUARDA!">
</form>
  <a href="2.php">Ir a otra página para comprobar la cookie</a>
</body>
</html>
