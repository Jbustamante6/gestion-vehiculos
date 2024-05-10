<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $tipo
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Vehiculo[] $vehiculos
 */
class TipoVehiculo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tipo', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'tipo_vehiculos_id');
    }
}
