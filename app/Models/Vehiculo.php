<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $tipo_vehiculos_id
 * @property integer $capacidad
 * @property string $placa
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Itinerario[] $itinerarios
 * @property TipoVehiculo $tipoVehiculo
 */
class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    /**
     * @var array
     */
    protected $fillable = ['tipo_vehiculos_id', 'capacidad', 'placa', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itinerarios()
    {
        return $this->hasMany('App\Models\Itinerario', 'vehiculos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoVehiculo()
    {
        return $this->belongsTo('App\Models\TipoVehiculo', 'tipo_vehiculos_id');
    }
}
