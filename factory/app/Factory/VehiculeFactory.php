<?php

namespace App\Factory;

use App\Entity\Vehicule;

abstract class VehiculeFactory
{
    public static function createVehicule(string $type): Vehicule
    {
        switch ($type) {
            case 'car':
                return new Car();
            case 'bike':
                return new Bike();
            case 'truck':
                return new Truck();
            default:
                throw new \InvalidArgumentException('Vehicule inconnu');
        }
    }
}