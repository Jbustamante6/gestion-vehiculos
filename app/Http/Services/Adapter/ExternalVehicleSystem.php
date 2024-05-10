<?php

namespace App\Http\Services\Adapter;

class ExternalVehicleSystem
{
  public function getVehicleData($id)
  {
    // Simulación de obtener datos de un sistema externo
    return [
      'id' => $id,
      'tipo' => 1,
      'capacidad' => 50,
      'placa' => 'EXTERNAL123'
    ];
  }
}
