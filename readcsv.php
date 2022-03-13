<?php

ini_set('auto_detect_line_endings',TRUE);

$file = file('yourfilename.csv');

foreach($file as $data)
$csv[] = explode(',',$data);

print_r($csv); /* print all the data in csv file*/
echo "<br><br>";

print_r (array_shift($csv)); /* shift 1st value from the data set*/
echo "<br><br>";

print_r($csv); /* Display the remain value in the array*/


?>
