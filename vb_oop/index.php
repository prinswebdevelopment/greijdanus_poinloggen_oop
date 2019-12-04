<?php

require "libraries/Datum.php";
require "libraries/DatumTijd.php";

$datumObject = new DatumTijd();

$datumObject->setDag("12");
$datumObject->setMaand("11");
$datumObject->setJaar("2019");
$datumObject->setUur("10");
$datumObject->setMinuut("20");

echo $datumObject->getDatum();

echo "<br>";

$datumObject2 = new DatumTijd( 11, 25, 27, 12, 2099);

echo $datumObject2->getDatum();

echo "<br>";

$datumObject3 = new DatumTijd();
echo $datumObject3->getDatum();