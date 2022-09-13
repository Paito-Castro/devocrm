<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotizacione
 *
 * @property $id
 * @property $fechacotiz
 * @property $descripcion
 * @property $cliente_id
 * @property $servicio_id
 * @property $ejecutivo_id
 * @property $estadosolicitud_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Empleado $empleado
 * @property Estadosolicitud $estadosolicitud
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cotizacione extends Model
{
    
    static $rules = [
		'fechacotiz' => 'required',
		'descripcion' => 'required',
		'cliente_id' => 'required',
		'servicio_id' => 'required',
		'ejecutivo_id' => 'required',
		'estadosolicitud_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechacotiz','descripcion','cliente_id','servicio_id','ejecutivo_id','estadosolicitud_id', 'solicitud_id', 'message'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Clientes', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'ejecutivo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadosolicitud()
    {
        return $this->hasOne('App\Models\EstadoSolicituds', 'id', 'estadosolicitud_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicios', 'id', 'servicio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solicitud()
    {
        return $this->hasOne('App\Models\Solicitude', 'id', 'solicitud_id');
    }
    

}
