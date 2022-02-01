<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$segons = $_POST['segons'];

if ($_POST['crear']){
  setcookie($cookie_name, $cookie_value, time() + $segons, "/");
  echo "La cookie se destruirà por defecto en ".$_POST['segons']. " segundos.<br><br>";
  echo $_COOKIE["user"];}
if ($_POST['comprovar']){
  setcookie($cookie_name, $cookie_value, time() + 60, "/");
  echo $_COOKIE["user"];
}
if ($_POST['destruir']){
  $cookie_value="";
  setcookie($cookie_name, $cookie_value, time() - 360, "/");
  echo "Se ha destruido la cookie!";
}
?>
<html>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Elija una opción:
    <p>  - Crear una cookie con una duració de <input type="number" name="segons"> segundos (entre 1 y 60)<input type="submit" name="crear" value="Crear"></p>
    <p>  - Comprobar la cookie
    <input type="submit" name="comprovar" value="Comprovar"></p>
    <p>  - Destruir la cookie
    <input type="submit" value="Destruir" name="destruir"></p>
  </form>
</body>
</html>
