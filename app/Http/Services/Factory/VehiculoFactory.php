<?php

namespace App\Http\Services\Factory;

use App\Http\Services\Classes\Bus;
use App\Http\Services\Classes\Camion;
class VehiculoFactory
{

  public static function crearVehiculo($tipo)
  {
    switch ($tipo) {
      case 1:
        return new Bus();
      case 2:
        return new Camion();
      default:
        throw new \Exception("Tipo de vehículo desconocido: $tipo");
    }
  }
  
}
