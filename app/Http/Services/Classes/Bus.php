<?php

namespace App\Http\Services\Classes;

use App\Models\Vehiculo;
class Bus extends Vehiculo
{
  public function tipo()
  {
    return 'Pasajeros';
  }

}
