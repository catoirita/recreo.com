<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nino
 *
 * @property $id
 * @property $nombre_completo
 * @property $fecha_nacimiento
 * @property $direccion
 * @property $telefono
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Autorizado[] $autorizados
 * @property Enfermedade[] $enfermedades
 * @property Inscripcione[] $inscripciones
 * @property Tutore[] $tutores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nino extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_completo', 'fecha_nacimiento', 'direccion', 'telefono', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autorizados()
    {
        return $this->hasMany(\App\Models\Autorizado::class, 'id', 'nino_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enfermedades()
    {
        return $this->hasMany(\App\Models\Enfermedade::class, 'id', 'nino_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciones()
    {
        return $this->hasMany(\App\Models\Inscripcione::class, 'id', 'nino_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tutores()
    {
        return $this->hasMany(\App\Models\Tutore::class, 'id', 'nino_id');
    }
    
}
