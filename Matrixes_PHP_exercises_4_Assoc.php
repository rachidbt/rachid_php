<?php

$Breakfast = array("milk","coffee","toast","oats");
$Lunch = array("spanish omelet","spaguetti","beans","bacon");
$Dinner = array("soup","cheese","fruit","yogurt");

$FoodMenu['Desayuno']= $Breakfast;
$FoodMenu['Almuerzo']= $Lunch;
$FoodMenu['Cena']= $Dinner;

foreach ($FoodMenu as $x => $x_value) {
  echo $x. " | ";
  foreach ($x_value as $y) {
      echo $y. " ";
  }
  echo "<br>";
}
?>
