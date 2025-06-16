<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tutore
 *
 * @property $id
 * @property $nino_id
 * @property $nombre_completo
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Nino $nino
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tutore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nino_id', 'nombre_completo', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nino()
    {
        return $this->belongsTo(\App\Models\Nino::class, 'nino_id', 'id');
    }
    
}
