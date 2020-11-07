<?php
/*1.Vector:hora de la finestra del dia*/
  $M_days['Mati']="Mati";
  $M_days['Migdia']="Migdia";
  $M_days['Tarda']="Tarda";
  $M_days['Vespre']="Vespre";
  $M_days['Nit']="Nit";

echo "1.Vector:hora de la finestra del dia";
echo "<br>";
echo "Nombre d'elements:";
echo  sizeof($M_days);
echo "<br>";

    foreach ($M_days as $M_day)
    {
      echo "$M_day <br>";
    }

/*2.Vector:Contingut plat dels restaurants*/
    $Plats['1r plat']="Vadella amb salsa de bolets";
    $Plats['2n plat']="Espagueti carbonats";
    $Plats['3r plat']="Truita española";

      echo "<br>";
      echo "2.Vector:Contingut plat dels restaurants";
      echo "<br>";
      echo "Nombre d'elements:";
      echo  sizeof($Plats);
      echo "<br>";

      foreach ($Plats as $Plat)
      {
        echo "$Plat <br>";
      }

/*3.Vector:Alarma*/
   $Alarma=array("8","12","14","16","20");

   echo "</br>";
   echo "3.Vector:Alarma";
   echo "</br>";

      foreach ($Alarma as $value_2){
      echo "$value_2</br>";
          }
          echo "Nombre d'elements:";
          echo  sizeof($Alarma);
          echo "<br>";

  /*4.Vector:LLista de components*/
      $Components=array("PC","Ratolí","Teclat","I3 core","8 GB de RAM","1 TB");

        echo "</br>";
        echo "4.Vector: LLista de components";
        echo "</br>";

          foreach ($Components as $value_2){
              echo "$value_2</br>";
                  }

                    echo "Nombre d'elements:";
                    echo  sizeof($Components);
?>
