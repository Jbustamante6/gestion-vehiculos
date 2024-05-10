<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $licencia
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Itinerario[] $itinerarios
 */
class Conductor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conductores';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'licencia', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itinerarios()
    {
        return $this->hasMany('App\Models\Itinerario', 'conductores_id');
    }
}
