<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehiculeFactory;

$car = VehiculeFactory::createVehicule('car');
$truck = VehiculeFactory::createVehicule('truck');
$bike = VehiculeFactory::createVehicule('bike');

echo $car->getCostPerKm() . PHP_EOL;
echo $truck->getCostPerKm() . PHP_EOL;
echo $bike->getCostPerKm() . PHP_EOL;