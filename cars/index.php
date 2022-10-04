<?php

declare(strict_types = 1);

require("./Vehicule.php");
require("./Moto.php");

$vehicule1 = new Vehicule();
$vehicule1->id = 1;
$vehicule1->setCountry('France');

$moto1 = new Moto();
$moto1->id = 1;
$moto1->setBrand('Lada');

print_r($vehicule1);
