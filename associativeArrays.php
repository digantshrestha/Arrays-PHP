<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
  </head>
  <body>
    <form action="associativeArrays.php" method="post">
      <label for="name">Name : </label>
      <input type="text" name="name">
      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      $grade = ["Hari"=>"A+", "Ram"=>"C+", "Shyam"=>"B", "Sita"=>"C"];
      // echo $grade["Hari"]."<br>";

      $grade["Shyam"]="D";
      //echo $grade["Shyam"];

      if(isset($_POST["name"])){
        echo $grade[$_POST["name"]];
      }
    ?>
  </body>
</html>
