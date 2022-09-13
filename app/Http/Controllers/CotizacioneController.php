<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Empleado;
use App\Models\Servicios;
use App\Models\EstadoSolicituds;
use App\Models\Cotizacione;
use App\Models\Solicitude;
use Illuminate\Http\Request;

/**
 * Class CotizacioneController
 * @package App\Http\Controllers
 */
class CotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacione::paginate();

        return view('cotizacione.index', compact('cotizaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $cotizaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cotizacione = new Cotizacione();
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $solicitudes = Solicitude::pluck('id', 'id', 'message');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');

        
        return view('cotizacione.create', compact('cotizacione', 'client', 'servicio', 'ejecutivo', 'estadosolicitud', 'solicitudes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cotizacione::$rules);

        $cotizacione = Cotizacione::create($request->all());

        return redirect()->route('cotizaciones.index')
            ->with('mensaje', 'Cotización creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacione = Cotizacione::find($id);
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $solicitudes = Solicitude::pluck('Message', 'id');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');

        return view('cotizacione.show', compact('cotizacione', 'client', 'servicio', 'ejecutivo', 'estadosolicitud', 'solicitudes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacione = Cotizacione::find($id);
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $solicitudes = Solicitude::pluck('Message', 'id');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');

        return view('cotizacione.edit', compact('cotizacione', 'client', 'servicio', 'ejecutivo', 'estadosolicitud', 'solicitudes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cotizacione $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacione $cotizacione)
    {
        request()->validate(Cotizacione::$rules);

        $cotizacione->update($request->all());

        return redirect()->route('cotizaciones.index')
            ->with('mensaje', 'Cotizacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cotizacione = Cotizacione::find($id)->delete();

        return redirect()->route('cotizaciones.index')
            ->with('mensaje', 'Cotizacion eliminada exitosamente');
    }
}
