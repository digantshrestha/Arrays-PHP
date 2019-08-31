<?php
  $isMale=true;
  $isTall=true;
  if($isMale && $isTall){
    echo "Male and Tall";
  }else if($isMale && !$isTall){
    echo "Male and untall";
  }else if(!$isMale && $isTall){
    echo "Female and Tall";
  }else{
    echo "Female and untall";
  }
  echo "<br>";

  $num=10;

  if(10>$num){
    echo "$num is smaller than 10";
  }else if(10<$num){
    echo "$num is greater than 10";
  }else{
    echo "$num = 10";
  }
  echo "<br>";

  function greater($num1, $num2){
    if($num1>$num2){
      echo "$num1 is greater than $num2";
    }else{
      echo "$num2 is greater than $num1";
    }
    echo "<br>";
  }

  function smaller($num1, $num2){
    if($num1<$num2){
      echo "$num1 is smaller than $num2";
    }else{
      echo "$num2 is smaller than $num1";
    }
    echo "<br>";
  }

  greater(23,44);
  smaller(54,21);

  function posNegZero($num){
    if($num>0){
      return "$num is Positive<br>";
    }else if($num<0){
      return "$num is Negative<br>";
    }else{
      return "$num is Zero<br>";
    }
  }

  echo posNegZero(32);
  echo posNegZero(-45);
  echo posNegZero(0);
?>
