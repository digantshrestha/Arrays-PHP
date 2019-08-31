<?php
  $nums=[12,43,32,3,20,78,14,1];

  // for($i=0;$i<count($nums);$i++){
  //   for($j=$i+1;$j<count($nums);$j++){
  //     if($nums[$j]<$nums[$i]){
  //       $temp=$nums[$i];
  //       $nums[$i]=$nums[$j];
  //       $nums[$j]=$temp;
  //     }
  //   }
  // }

  // array_multisort($nums, SORT_DESC);

  // print_r($nums);

  function my_in_array($i, $arrayName){
    foreach($arrayName as $n){
      if($i==$n){
        return true;
      }
    }
    return false;
  }

  $found=my_in_array(22, $nums);

  if($found){
    echo "Found";
  }else{
    echo "Not Found";
  }

 ?>
