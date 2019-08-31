<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET and POST Method</title>
  </head>
  <body>
    <form action="get-post.php" method="POST">
      <label for="password">Password</label>
      <input type="password" name="password">
      <input type="submit" value="Submit">
    </form>
    <hr>

    <?php
      if(isset($_POST["password"])){
        echo $_POST["password"];
      }
     ?>
  </body>
</html>
