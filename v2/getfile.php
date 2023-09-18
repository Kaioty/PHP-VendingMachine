<?php

$file = "./values.txt";

$document = file_get_contents($file);

$lines = explode("\n", $document);

foreach($lines as $newline) {

echo $newline . '<br>';

}

?>