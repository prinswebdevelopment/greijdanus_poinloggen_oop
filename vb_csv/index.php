<?php

require 'Csv.php';

$csvObject = new Csv('data.csv');

echo "print<br>";
$csvObject->getData();
echo "<br><br>";

echo "append<br>";
$csvObject->appendData();
echo "<br><br>";

echo "print<br>";
$csvObject->getData();
echo "<br><br>";

echo "write<br>";
$csvObject->writeData();
echo "<br><br>";

echo "print<br>";
$csvObject->getData();