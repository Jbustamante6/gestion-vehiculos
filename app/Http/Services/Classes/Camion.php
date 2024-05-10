<?php

namespace App\Http\Services\Classes;

use App\Models\Vehiculo;
class Camion extends Vehiculo
{
  public function tipo()
  {
    return 'Carga';
  }
  
}
