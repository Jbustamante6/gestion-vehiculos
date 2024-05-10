<?php

namespace App\Http\Controllers;
use App\Http\Services\Factory\VehiculoFactory;
use App\Http\Services\Adapter\VehicleAdapter;
use App\Http\Requests\Vehiculo\Store;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    protected $vehicleAdapter;
    public function __construct(VehicleAdapter $adapter) {
        $this->vehicleAdapter = $adapter;
    }
    public function store(Store $request) {
        $vehiculo = VehiculoFactory::crearVehiculo($request['tipo']);
        $vehiculo->tipo_vehiculos_id = $request['tipo'];
        $vehiculo->capacidad = $request['capacidad'];
        $vehiculo->placa = $request['placa'];
        $vehiculo->save();

        return response()->json($vehiculo, 201);
    }

    public function index() {
        return response()->json(Vehiculo::with('tipoVehiculo')->get());
    }

    public function showAdapter($id){
        $vehículo = $this->vehicleAdapter->getVehículo($id);
        return response()->json($vehículo);
    }
}
