<?php
if(isset($_POST['submit'])){

$cantidad = $_POST['cantidad'];
$moneda1 = $_POST['moneda1'];
$moneda2 = $_POST['moneda2'];

if($moneda1=="EUR" AND $moneda2=="GBP"){
echo "<center><b>La Conversión es:</b><br></center>";
echo "<center>" . $cantidad* 0.90 . "</center>";
}

if($moneda1=="EUR" AND $moneda2=="EUR"){
echo "<center><b>La Conversión es:</b><br></center>";
echo "<center>" . $cantidad* 1 . "</center>";
}

if($moneda1=="GBP" AND $moneda2=="GBP"){
echo "<center><b>La Conversión es:</b><br></center>";
echo "<center>" . $cantidad* 1 . "</center>";
}

if($moneda1=="GBP" AND $moneda2=="EUR"){
echo "<center><b>La Conversión es:</b><br></center>";
echo "<center>" . $cantidad* 1.11 . "</center>";
}
}
?>
