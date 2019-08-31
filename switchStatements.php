<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch Statements</title>
  </head>
  <body>
    <form action="switchStatements.php" method="post">
      <label for="grade">Grade : </label>
      <input type="text" name="grade">
      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_POST["grade"])){
        $grade = $_POST["grade"];
        $message;
        switch($grade){
          case "A+":
            $message = "Outstanding";
            break;

          case "A":
            $message = "Excellent";
            break;

          case "B+":
            $message = "Very Good";
            break;

          case "B":
            $message = "Good";
            break;

          case "C+":
              $message = "Satisfactory";
            break;

          case "C":
            $message = "OK - Just Pass";
            break;

          case "D":
          case "E":
          case "F":
            $message = "Failed";
            break;

          default:
            $message = "Wrong Grade";
            break;
        }
        echo $message;
      }
     ?>
  </body>
</html>
