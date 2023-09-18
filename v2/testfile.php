<?php

$drinkCount = fopen("counts.txt" , "r+");

$_drinks = array();
$_drinks explode("&",$drinkCount)

for ($i=1; $i<=5; $i++)
  {
  echo $_drinks[$i] . $i . "<br>";
  }

fclose($drinkCount);
  
?>