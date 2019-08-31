<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CheckBox</title>
  </head>
  <body>
    <form action="checkbox.php" method="post">
      <label for="apple">Apples : </label> <input type="checkbox" name="fruits[]" value="apple"><br>
      <label for="mangos">Mangos : </label> <input type="checkbox" name="fruits[]" value="mangos"><br>
      <label for="grapes">Grapes : </label> <input type="checkbox" name="fruits[]" value="grapes"><br>

      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_POST["fruits"])){
        $fruits = $_POST["fruits"];
        echo $fruits[1];
      }else{
        echo("Not Checked");
      }
    ?>
  </body>
</html>
