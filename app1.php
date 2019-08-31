<?php
  $employee=array(
    "id"=>1, "name"=>"Ram", "salary"=>50000
  );

  // var_dump($employee);

  $employees[]=$employee;
  $employees[]=[
    "id"=>2, "name"=>"Shyam", "salary"=>20000
  ];
  array_push($employees, [
    "id"=>3, "name"=>"Hari", "salary"=>30000
  ]);

  var_dump($employees);

  foreach($employees as $emp){
    echo $emp["name"]."\r\n";
  }
 ?>
