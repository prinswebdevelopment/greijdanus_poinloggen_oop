<?php

require "libraries/Datum.php";

$datumObject = new Datum();

$datumObject->setDag("12");
$datumObject->setMaand("11");
$datumObject->setJaar("2019");

echo $datumObject->getDatum();

echo "<br>";

$datumObject2 = new Datum(27, 12, 2099);

echo $datumObject2->getDatum();

echo "<br>";

$datumObject3 = new Datum();
echo $datumObject3->getDatum();