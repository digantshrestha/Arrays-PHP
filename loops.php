<?php
// WHILE LOOP

  $index = 1;
  while($index<=10){
    echo "While Loop : $index<br>";
    $index++;
  }
  echo "<br>";

// -------------------------------------------------------------------

// DO WHILE LOOP

  $j=1;
  do{
    echo "Do While Loop : $j<br>";
    $j++;
  }while($j<=10);
  echo "<br>";

// ---------------------------------------------------------------------

// FOR LOOP

  for($i = 1; $i <= 10; $i++){
    echo "For Loop : $i<br>";
  }
  echo "<br>";

  $countries = ["Nepal", "Denmark", "India", "China", "Bangladesh"];

  for($i = 0; $i < count($countries); $i++){
    echo $countries[$i]."<br>";
  }

 ?>
