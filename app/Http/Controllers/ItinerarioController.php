<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Itinerario\Store;
use App\Http\Services\Builder\ItinerarioBuilder;
use App\Models\Conductor;
use App\Models\Ruta;
use App\Models\Vehiculo;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Itinerario;

class ItinerarioController extends Controller
{
    public function store(Store $request) {
        $builder = new ItinerarioBuilder();

        $builder->setFecha($request['fecha']);
        $builder->setHoraSalida($request['hora_salida']);

        // Buscar las referencias de Ruta, Vehículo y Conductor
        $ruta = Ruta::find($request['rutas_id']);
        $vehiculo = Vehiculo::find($request['vehículos_id']);
        $conductor = Conductor::find($request['conductores_id']);

        if (!$ruta || !$vehiculo || !$conductor) {
            throw new HttpResponseException(response()->json("Bad Request", 400));
        }
        
        $builder->setVehículo($vehiculo);
        $builder->setRuta($ruta);
        $builder->setConductor($conductor);

        $itinerario = $builder->build();
        $itinerario->save();

        return response()->json($itinerario, 201);  // 201 para indicar creación exitosa
    }

    public function index(){
        return response()->json(Itinerario::with('vehiculo.tipoVehiculo', 'conductor', 'ruta')->get());
    }

}
