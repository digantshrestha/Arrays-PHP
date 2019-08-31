<?php
  $food = array("pizza", "burger", "momo", "dumpling");
  echo $food[0]."<br>";

  $countries = ["Nepal", "China", "Denmark", "Japan"];
  echo $countries[2]."<br>";
  echo count($countries)."<br>";
  echo sizeof($countries)."<br>";

  $countries[count($countries)] = "Germany";
  echo $countries[count($countries)-1];
?>
