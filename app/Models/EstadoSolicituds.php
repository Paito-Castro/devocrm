<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadosolicitud
 *
 * @property $id
 * @property $nombreestado
 * @property $created_at
 * @property $updated_at
 *
 * @property Solicitude[] $solicitudes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadosolicituds extends Model
{
    
    static $rules = [
		'nombreestado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreestado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudes()
    {
        return $this->hasMany('App\Models\Solicitude', 'estadosolicitud_id', 'id');
    }
    

}
