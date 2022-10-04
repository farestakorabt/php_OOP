<?php

declare(strict_types = 1);

require('./Country.php');

$southCountryEU = new Country();
$southCountryEU->id = 1;
$southCountryEU->name = 'Greece';
$southCountryEU->capital = 'Athens';
$southCountryEU->population = 10432481;
$southCountryEU->president = 'Kyriákos Mitsotákis';
$southCountryEU->area = 131957;
$southCountryEU->setDebts(370607);
$southCountryEU->setCorrupted(true);

print_r($southCountryEU);