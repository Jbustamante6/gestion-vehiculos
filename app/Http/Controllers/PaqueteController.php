<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CoR\VerifyPackage;
use App\Http\Services\CoR\PackPackage;
use App\Http\Services\CoR\ShipPackage;
use App\Http\Requests\Paquete\Store;


class PaqueteController extends Controller
{
    public function process(Store $request) {
        $verificar = new VerifyPackage();
        $empaquetar = new PackPackage();
        $enviar = new ShipPackage();

        $verificar->setNext($empaquetar);
        $empaquetar->setNext($enviar);

        $paquete = $request->all();  // Datos del paquete
        $verificar->handle($paquete);  // Inicia el procesamiento

        return response()->json(['message' => 'Paquete procesado'], 200);
    }
}
