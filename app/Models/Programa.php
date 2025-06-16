<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $nombre_programa
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_programa', 'estado'];


}
