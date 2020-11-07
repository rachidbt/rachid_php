<?php
/*
$students = array (
    array(
          "name"=>"mike",
          "subject"=>"0376-IAW",
          "mark"=>"7"
    ),
    array(
          "name"=>"jhon",
          "subject"=>"0376-IAW",
          "mark"=>"5"
  )
);

foreach ($students as $value_1 ) {
  foreach ($value_1 as $value_2 => $value_3)  {
 echo "$value_2 : $value_3";
  }
  echo"</br>";
}
*/


$subjects = array(
  array(
        "code"=>"0123",
        "name"=>"BDD"
      ),

array("code"=>"4567",
      "name"=>"Xarxes"
    ),

      array("code"=>"8910",
            "name"=>"FOL"
          )
);
foreach ($subjects as $value_1 ) {
  foreach ($value_1 as $value_2 => $value_3)  {
 echo "$value_2 : $value_3";
  }
  echo"</br>";
}
?>
