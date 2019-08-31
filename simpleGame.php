<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Game</title>
  </head>
  <body>
    <form action="simpleGame.php" method="GET">
      <label for="color">Color : </label>
      <input type="text" name="color">
      <label for="noun">Noun : </label>
      <input type="text" name="noun">
      <label for="celeb">Celebrity : </label>
      <input type="text" name="celeb">
      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_GET["color"]) && isset($_GET["noun"]) && isset($_GET["celeb"])){
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celeb = $_GET["celeb"];

        echo "Roses are $color<br>$noun are blue<br>$celeb I love you";
      }
    ?>
  </body>
</html>
