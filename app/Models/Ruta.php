<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $origen
 * @property string $destino
 * @property integer $distancia
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Itinerario[] $itinerarios
 */
class Ruta extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'origen', 'destino', 'distancia', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itinerarios()
    {
        return $this->hasMany('App\Models\Itinerario', 'rutas_id');
    }
}
