<?php

namespace App\Http\Services\Fecade;

use App\Http\Services\Adapter\VehicleAdapter;

class VehicleServiceFacade
{
  protected $vehicleAdapter;

  public function __construct(VehicleAdapter $adapter)
  {
    $this->vehicleAdapter = $adapter;
  }

  public function getVehicleInfo($id)
  {
    return $this->vehicleAdapter->getVehículo($id);
  }
}
