<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Calculator</title>
  </head>
  <body>
    <form action="calculator.php" method="GET">
      <label for="num1">Num1:</label>
      <input type="number" name="num1">
      <label for="num2">Num2:</label>
      <input type="number" name="num2">

      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_GET["num1"]) && isset($_GET["num2"])){
        $num1=$_GET["num1"];
        $num2=$_GET["num2"];
        echo "Num1 : $num1<br>";
        echo "Num2 : $num2<br><hr>";
        echo "Sum : ".($num1 + $num2)."<br>";
        echo "Difference : ".($num1 - $num2)."<br>";
        echo "Product : ".($num1 * $num2)."<br>";
        echo "Dividend : ".($num1 / $num2)."<br><hr>";
      }
    ?>
  </body>
</html>
