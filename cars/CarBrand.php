<?php

enum CarBrand: string
{
    case Lada = 'Lada';
    case Citroen = 'Citroen';
}

$vehicule = new Vehicule();
$vehicule->setBrand(CarBrand::Lada);
