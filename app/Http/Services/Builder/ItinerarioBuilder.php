<?php

namespace App\Http\Services\Builder;

use App\Models\Itinerario;


class ItinerarioBuilder
{
  protected $itinerario;

  public function __construct()
  {
    $this->itinerario = new Itinerario();
  }

  public function setFecha($fecha)
  {
    $this->itinerario->fecha = $fecha;
    return $this;
  }

  public function setHoraSalida($hora)
  {
    $this->itinerario->hora_salida = $hora;
    return $this;
  }

  public function setVehículo($vehiculo)
  {
    $this->itinerario->vehiculos_id = $vehiculo->id;
    return $this;
  }

  public function setConductor($conductor)
  {
    $this->itinerario->conductores_id = $conductor->id;
    return $this;
  }

  public function setRuta($ruta)
  {
    $this->itinerario->rutas_id = $ruta->id;
    return $this;
  }

  public function build()
  {
    return $this->itinerario;
  }
}
