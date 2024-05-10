<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $rutas_id
 * @property integer $vehiculos_id
 * @property integer $conductores_id
 * @property string $fecha
 * @property string $hora_salida
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Ruta $ruta
 * @property Conductor $conductor
 * @property Vehiculo $vehiculo
 */
class Itinerario extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['rutas_id', 'vehiculos_id', 'conductores_id', 'fecha', 'hora_salida', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ruta()
    {
        return $this->belongsTo('App\Models\Ruta', 'rutas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conductor()
    {
        return $this->belongsTo('App\Models\Conductor', 'conductores_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'vehiculos_id');
    }
}
