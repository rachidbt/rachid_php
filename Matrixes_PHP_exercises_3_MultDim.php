<?php
//visusi corrections - OK                                             
/*$FoodMenu1= array("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Septembre", "Octubre", "Novembre", "Desembre");*/
$Breakfast = array("milk","coffee","toast","oats");
$Lunch = array("spanish omelet","spaguetti","beans","bacon");
$Dinner = array("soup","cheese","fruit","yogurt");
$FoodMenu= array(
 "Desayuno" => $Breakfast,
 "Almuerzo" => $Lunch,
 "Cena" => $Dinner,
);

 foreach($FoodMenu as $x => $x_value) {
  echo "$x | ";
    foreach($x_value as $y => $y_value)
    {
      echo "$y_value ";
    }
    echo "<br>";
 }
?>
