<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcione
 *
 * @property $id
 * @property $nino_id
 * @property $fecha_inscripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Nino $nino
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nino_id', 'fecha_inscripcion', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nino()
    {
        return $this->belongsTo(\App\Models\Nino::class, 'nino_id', 'id');
    }
    
}
