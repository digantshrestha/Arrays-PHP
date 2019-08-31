<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Getting User Input</title>
  </head>
  <body>

    <form action="input.php" method="GET">
      <label>Name : </label>
      <input type="text" name="name">
      <input type="text" name="age">
      <input type="submit" value="Submit">
    </form>
    <br>

      <?php
        if(isset($_GET["name"])){
          echo "Your name is ". htmlentities($_GET["name"]);
        }
      ?>
      <br>
      <?php
        if(isset($_GET["age"])){
          echo "Your age is ". htmlentities($_GET["age"]);
        }
      ?>

  </body>
</html>
