<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>String</title>
  </head>
  <body>
    <?php
      //STRING

      $text="This is a Sample Text";
      echo strlen($text)."<br>";
      echo strtoupper($text)."<br>";
      echo strtolower($text)."<br>";
      echo $text[5]."<br>";
      for($i=0; $i<strlen($text);$i++){
        echo $text[$i];
      }
      echo "<br>";

      $text[0]="B";
      echo $text."<br>";

      $text=str_replace("Bhis", "This", $text);
      echo $text."<br>";
      echo str_replace("Text", "Example", $text)."<br>";

      echo substr($text, 10, 3);

     ?>
  </body>
</html>
