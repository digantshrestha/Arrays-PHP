<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Better Calculator</title>
  </head>
  <body>
    <form action="calculator2.php" method="post">
      <label for="num1">Num1 : </label>
      <input type="number" name="num1"><br><br>

      <label for="optr">Operator : </label>
      <input type="text" name="optr"><br><br>

      <label for="num2">Num2 : </label>
      <input type="number" name="num2"><br><br>

      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["optr"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $optr = $_POST["optr"];

        echo "$num1 $optr $num2 = ";
        if($optr=="+"){
          echo $num1 + $num2;
        }else if($optr=="-"){
          echo $num1 - $num2;
        }else if($optr=="*"){
          echo $num1 * $num2;
        }else if($optr=="/"){
          echo $num1 / $num2;
        }else{
          echo "Something is wrong with your input";
        }
      }
     ?>
  </body>
</html>
