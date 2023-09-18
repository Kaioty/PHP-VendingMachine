<?php


$drinkCounts = array();
$file = "./values.txt";
$document = file_get_contents($file);
$drinkCounts = explode("\n", $document);

$DSDcount = $drinkCounts[0];
$LDScount = $drinkCounts[1];
$CRScount = $drinkCounts[2];
$EOEcount = $drinkCounts[3];
$CMDcount = $drinkCounts[4];

echo $DSDcount . '<br>';
echo $LDScount . '<br>';
echo $CRScount . '<br>';
echo $EOEcount . '<br>';
echo $CMDcount . '<br>';

$DSDcount++;
$LDScount++;
$CRScount++;
$EOEcount++;
$CMDcount++;

file_put_contents($file, (
$DSDcount . "\n" . 
$LDScount . "\n" . 
$CRScount . "\n" . 
$EOEcount . "\n" .
$CMDcount . "\n"));

//foreach($drinkCounts as $newline) {
//echo $newline . '<br>';
//}

?>