<?php

namespace App\Http\Services\Adapter;

use App\Models\Vehiculo;
use App\Http\Services\Adapter\ExternalVehicleSystem;

class VehicleAdapter
{
  protected $externalSystem;

  public function __construct(ExternalVehicleSystem $externalSystem)
  {
    $this->externalSystem = $externalSystem;
  }

  public function getVehículo($id)
  {
    $data = $this->externalSystem->getVehicleData($id);
    $vehículo = new Vehiculo();
    $vehículo->id = $data['id'];
    $vehículo->tipo_vehiculos_id = $data['tipo'];
    $vehículo->capacidad = $data['capacidad'];
    $vehículo->placa = $data['placa'];
    return $vehículo;
  }
}
