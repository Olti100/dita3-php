<?php
  
  $num = -1;
  if ($num < 0){
    echo "$num is less than 0";
  }

  $age = 17;

  if (($age > 12) && ($age < 20)) {
    echo "You are a teenager";
  }

  if ($age < 18) {
    echo "you are under 18";
  }else {
    echo "You are over 18";
  }

  $numb = 1
  ;

  if ($numb > 0) {
    echo "$numb is positive";
  }else if($numb == 0){
    echo "$numb is 0";
  }else{
    echo "$numb is negative";
  }

  $a = 50;
  $b = 10;

  if ($a == $b) {
    echo " <br> Yes";
  }else{
    echo "No";
  }

  if ($a == $b) {
    echo "1";
  }elseif($a > $b){
    echo "2";
  }else{
    echo "3";
  }

  $age = 15;
  switch ($age) {
    case ($age >= 0 && $age <=18):
        echo "You are a minor";
        break;
    case($age > 18 && $age <= 25):
        echo "You are a young adult";
        break;
    case ($age > 25):
        echo "You are an adult";
        break;
    default:
       echo "Invalid age input";
       break;            
  }

  echo "<>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  $x = 1;

  while($x<=5){
    echo "$x <br>";
    $x++;
  }

  $x = 1;

  do{
    echo "The number is : $x <br>";
    $x++;
 }while($x <= 5);

 for($x=0; $x<=10; $x++){
     echo "The number is : $x <br>";
 }