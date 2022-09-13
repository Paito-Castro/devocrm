<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use App\Models\Clientes;
use App\Models\Empleado;
use App\Models\Servicios;
use App\Models\EstadoSolicituds;
use Illuminate\Http\Request;
use PDF;

/**
 * Class SolicitudeController
 * @package App\Http\Controllers
 */
class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitude::paginate();

        return view('solicitude.index', compact('solicitudes'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudes->perPage());
    }

        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitude = new Solicitude();
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');
        return view('solicitude.create', compact('solicitude', 'client', 'servicio', 'ejecutivo', 'estadosolicitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Solicitude::$rules);

        $solicitude = Solicitude::create($request->all());

        return redirect()->route('solicitudes.index')
            ->with('mensaje', 'Solicitud creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitude = Solicitude::find($id);
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');

        return view('solicitude.show', compact('solicitude', 'client', 'servicio', 'ejecutivo', 'estadosolicitud'));
    }

    public function pdf()
    {
        $solicitudes = Solicitude::paginate();

        $pdf = PDF::loadView('solicitude.pdf', ['solicitudes'=>$solicitudes]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
       
       
        //return view('solicitude.pdf', compact('solicitudes'));

    }   

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitude = Solicitude::find($id);
        $client = Clientes::pluck('empresa', 'id');
        $servicio = Servicios::pluck('nombreservicio', 'id');
        $ejecutivo = Empleado::pluck('Nombre', 'id');
        $estadosolicitud = EstadoSolicituds::pluck('nombreestado', 'id');

        return view('solicitude.edit', compact('solicitude', 'client', 'servicio', 'ejecutivo', 'estadosolicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solicitude $solicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitude $solicitude)
    {
        request()->validate(Solicitude::$rules);

        $solicitude->update($request->all());

        return redirect()->route('solicitudes.index')
            ->with('mensaje', 'Solicitud actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitude = Solicitude::find($id)->delete();

        return redirect()->route('solicitudes.index')
            ->with('mensaje', 'Solicitud eliminada exitosamente');
    }
}
