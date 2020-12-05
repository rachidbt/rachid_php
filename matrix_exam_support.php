<?php
/*
1. Given the matrix below,
develop the code you need to show the city and its assigned IES each one in one different line
exemple of what is expected in the screen:
Manacor: IES Manacor
......
*/
$citiesIES=array( "Manacor"=>"IES Manacor", "Palma"=>"IES Borja Moll",
"Inca"=> "IES Pau de Cases Noves", "Porto Cristo"=>"IES Porto Cristo de la Mar",
"Calvia"=>"IES Son Ferrer");


foreach($citiesIES as $x => $x_value) {
  echo "$x : $x_value";
  echo "<br>";
}
echo "<br>"
?>
<?php
/*
2. Orden in alphabetical order the array of the exercise 1 using the php function
asort($array);
Show the same info than in exercise 1 but in alphabetical order
*/

$citiesIES=array( "Manacor"=>"IES Manacor", "Palma"=>"IES Borja Moll",
"Inca"=> "IES Pau de Cases Noves", "Porto Cristo"=>"IES Porto Cristo de la Mar",
"Calvia"=>"IES Son Ferrer");
asort($citiesIES);

foreach($citiesIES as $x=>$x_value)
   {
   echo "$x : $x_value";
   echo "<br>";
   }
   echo "<br>"
?>

<?php
/*
3. Transform the exercise 1 into a matrix using the structure of Associative matrixes:
$array['stringKey']=elementvalue;
and show the same info than in exercise 1
*/

$Mallorca['Manacor']= "IES Manacor";
$Mallorca['Palma']= "IES Borja Moll";
$Mallorca['Inca']= "IES Pau de Cases Noves";
$Mallorca['Porto Cristo']= "IES Porto Cristo de la Mar";
$Mallorca['Calvia']= "IES Son Ferrer";

foreach ($Mallorca as $key => $value) {
  echo "$key: $value";
  echo "<br>";
}
?>
